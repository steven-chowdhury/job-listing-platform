<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobPost;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_posts')->insert([
            [
                "title" => "React Native Engineer",
                "description" => "As a React Native engineer, you will build simple and beautiful experiences for the crucial interactions people have with our platform every day.",
                "qualifications" => "5+ years professional experience developing and deploying iOS and Android apps using React Native. Passion for your craft and care for the people you work with. You value quality across code, communication, and culture.",
                "department" => "engineering",
                "location" => "United States",
                "location_type" => "remote",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Backend Engineer",
                "description" => "We're looking for a backend engineer to help us build scalable APIs and services that power our core application stack.",
                "qualifications" => "3+ years of experience with Node.js, Laravel, or similar backend frameworks. Strong understanding of RESTful design and database optimization.",
                "department" => "engineering",
                "location" => "New York, NY",
                "location_type" => "hybrid",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Frontend Engineer",
                "description" => "Design and implement intuitive user interfaces using modern JavaScript frameworks like React or Vue.",
                "qualifications" => "2+ years of experience with JavaScript, CSS, HTML. Experience with responsive and accessible UI design.",
                "department" => "engineering",
                "location" => "Austin, TX",
                "location_type" => "onsite",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Data Engineer",
                "description" => "Build and maintain our data infrastructure, ensuring high-quality pipelines and insights across the organization.",
                "qualifications" => "Strong SQL skills and experience with data tools like Airflow, Snowflake, or BigQuery. Python or Scala experience a plus.",
                "department" => "engineering",
                "location" => "San Francisco, CA",
                "location_type" => "remote",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "DevOps Engineer",
                "description" => "Support and scale our infrastructure through automation, CI/CD pipelines, and cloud tooling.",
                "qualifications" => "Hands-on experience with Docker, Kubernetes, Terraform, and cloud providers like AWS or GCP.",
                "department" => "engineering",
                "location" => "Seattle, WA",
                "location_type" => "hybrid",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Sales Development Representative",
                "description" => "Prospect and qualify inbound and outbound leads to help grow our sales pipeline.",
                "qualifications" => "Excellent communication skills, high energy, and a passion for helping businesses find solutions. Experience with CRM systems like Salesforce is a plus.",
                "department" => "sales",
                "location" => "Remote - US",
                "location_type" => "remote",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Account Executive",
                "description" => "Close deals with mid-sized businesses and work closely with customer success to ensure long-term satisfaction.",
                "qualifications" => "3+ years of B2B sales experience. Strong negotiation skills and proven ability to meet quotas.",
                "department" => "sales",
                "location" => "Chicago, IL",
                "location_type" => "onsite",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Sales Manager",
                "description" => "Lead a team of high-performing reps and guide them toward consistent success.",
                "qualifications" => "Previous experience in a sales leadership role. Ability to coach, mentor, and lead by example.",
                "department" => "sales",
                "location" => "Los Angeles, CA",
                "location_type" => "hybrid",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "HR Generalist",
                "description" => "Support HR operations including employee relations, onboarding, compliance, and benefits.",
                "qualifications" => "2+ years experience in human resources. Working knowledge of labor laws and HRIS systems.",
                "department" => "hr",
                "location" => "United States",
                "location_type" => "remote",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Talent Acquisition Specialist",
                "description" => "Drive our recruitment strategy and help attract top talent across engineering and business roles.",
                "qualifications" => "Experience with sourcing platforms (LinkedIn Recruiter, etc.), excellent interviewing and screening skills.",
                "department" => "hr",
                "location" => "Boston, MA",
                "location_type" => "onsite",
                "company_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
