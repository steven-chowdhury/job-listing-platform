<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ATSController extends Controller
{
    function bestJobMatch(Request $request) {
        $validated = $request->validate(['resume' => 'string|required']);
        $jobs = JobPost::all();

        $jsonJobs = json_encode($jobs);
        $resume = $validated['resume'];

        $jobMatch = Http::withToken(config('services.openai.key'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        "role" => "user",
                        "content" => "Given this array of jobs: {$jsonJobs}"
                        ."\nFind the best one that matches this candidate profile: {$resume}"
                        ."\nReturn as a json object with the same formatting as the original job"
                    ]
                ]
            ])
            ->json('choices.0.message.content');

        return json_decode($jobMatch);
    }
}
