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

        return json_decode($json, true);
    }

    function bestJobMatch(Request $request) {
        $resumeText = '';

        // Check if resume is uploaded as file or post body param
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $parser = new \Smalot\PdfParser\Parser();
            $pdf = $parser->parseFile($file->getRealPath());
            $resumeText = $pdf->getText();     
        } else {
            $validated = $request->validate(['resume' => 'string|required']);
            $resumeText = $validated['resume'];
        }

        $jobs = JobPost::all();
        $jsonJobs = json_encode($jobs);

        $messages = [
            "Given this array of jobs:",
            $jsonJobs,
            "Find the best one that matches this resume:",
            $resumeText,
            "Return the id of the job in the format { id: jobId }"
        ];

        $data = $this->sendPrompt($messages);

        $id = $data ? $data['id'] : null;

        $job = JobPost::findOrFail($id);

        return $job;
    }
}
