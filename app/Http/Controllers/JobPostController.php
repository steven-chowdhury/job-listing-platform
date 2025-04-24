<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Company;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JobPost::all();
    }

    public function indexByCompany(string $companyId)
    {
        $company = Company::findOrFail($companyId);
        $jobs = $company->jobPosts()->get();
        return $jobs;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $companyId)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'description' => 'string|required',
            'qualifications' => 'string|required',
            'department' => 'string|in:sales,hr,engineering|required',
            'location' => 'string|required',
            'location_type' => 'string|in:remote,hybrid,onsite'
        ]);

        $company = Company::findOrFail($companyId);

        $job = $company->jobPosts()->create($validated);
        $job->refresh();
        return $job;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = JobPost::findOrFail($id);
        return $job;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'string',
            'description' => 'string',
            'qualifications' => 'string',
            'department' => 'string|in:sales,hr,engineering',
            'location' => 'string',
            'location_type' => 'string|in:remote,hybrid,onsite'
        ]);

        $job = JobPost::findOrFail($id);
        $job->update($validated);
        $job->refresh();

        return $job;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = JobPost::findOrFail($id);
        $job->delete();
        
        return response()->json(['message' => 'Job Deleted']);
    }
}
