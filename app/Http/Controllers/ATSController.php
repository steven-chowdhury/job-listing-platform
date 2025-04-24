<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ATSController extends Controller
{
    private function sendPrompt(array $messages) {
        $chatMessages = array_map(function($message) {
            return [
                "role" => "user",
                "content" => $message
            ];
        }, $messages);

        $json = Http::withToken(config('services.openai.key'))
        ->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => $chatMessages
        ])
        ->json('choices.0.message.content');

        return json_decode($json);
    }

    function bestJobMatch(Request $request) {
        $validated = $request->validate(['resume' => 'string|required']);
        $jobs = JobPost::all();

        $jsonJobs = json_encode($jobs);
        $resume = $validated['resume'];

        $messages = [
            "Given this array of jobs: {$jsonJobs}"
            ."\nFind the best one that matches this candidate profile: {$resume}"
            ."\nReturn as a json object with the same formatting as the original job"
        ];

        $jobMatch = $this->sendPrompt($messages);

        return $jobMatch;
    }
}
