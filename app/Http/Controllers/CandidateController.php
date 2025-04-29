<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Candidate::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'phone' => 'string',
            'resume_summary' => 'string'
        ]);

        $candidate = Candidate::create($validated);
        $candidate->refresh();

        return $candidate;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $candidate = Candidate::findOrFail($id);
        return $candidate;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'string',
            'email' => 'email',
            'phone' => 'string',
            'resume_summary' => 'string'
        ]);

        $candidate = Candidate::findOrFail($id);
        $candidate->update($validated);
        $candidate->refresh();

        return $candidate;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->delete();
        
        return response()->json(['message' => 'Candidate Deleted']);
    }
}
