## Job Listing Platform
- Port: 8000
- Base URL: http://localhost:8000

## Setup Instructions
#### 1. Install Composer
Ensure Composer is installed on your system (ex: via Homebrew)

#### 2. Clone the repository
Clone the project onto your local machine:
```bash
git clone https://github.com/steven-chowdhury/job-listing-platform
cd job-listing-platform
```

#### 3. Configure MySQL
Add your MySQL credentials to the .env file

Example:
```bash
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=job_listing_platform
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

#### 3. Configure OpenAI (optional)
If you want to use the ATS endpoints and have an OpenAI API key, add it to the .env file as well

```bash
OPENAI_API_KEY=sk...
```

## Run Instructions
#### 1. Start the Project
From the project directory, run the following command to start the application: 
```bash
composer run dev
```

#### 2. Run the Migrations and Seeders
From the same directory, run the migrations and seeders using: 
  ```bash
  php artisan migrate --seed
  ```

#### 3. The project is now running on http://localhost:8000.

## Routes

#### Company:
```http
GET /api/companies  
POST /api/companies  
GET /api/companies/{id}  
PUT /api/companies/{id}  
DELETE /api/companies/{id}
```

#### Job:
```http
GET /api/jobs   
GET /api/companies/{companyId}/jobs 
POST /api/companies/{companyId}/jobs 
GET /api/jobs/{id} 
PUT /api/jobs/{id} 
DELETE /api/jobs/{id} 
```

#### Candidate:
```http
GET /api/candidates   
POST /api/candidates 
GET /api/candidates/{id} 
PUT /api/candidates/{id} 
DELETE /api/candidates/{id} 
```

#### ATS:
```http
POST /api/jobs/best_match
```

Example Request:
```json
{
  "resume": "iOS engineer with expertise in mobile frontend technologies." 
}
```

Example Response:
```json
{
  "id": 1,
  "created_at": "2025-04-24T03:01:10.000000Z",
  "updated_at": "2025-04-24T03:01:10.000000Z",
  "title": "React Native Engineer",
  "description": "As a React Native engineer, you will build simple and beautiful experiences for the crucial interactions people have with our platform every day.",
  "qualifications": "5+ years professional experience developing and deploying iOS and Android apps using React Native. Passion for your craft and care for the people you work with. You value quality across code, communication, and culture.",
  "department": "engineering",
  "location": "United States",
  "location_type": "remote",
  "company_id": 1
}
```

## Models
#### Company
```json
{
  "id": 1,
  "created_at": "2025-04-24T03:01:10.000000Z",
  "updated_at": "2025-04-24T03:01:10.000000Z",
  "name": "Anderson, Skiles and Larson",
  "about": "Dolor vel rerum odit quae et similique. Amet ut corrupti reprehenderit rerum ut et enim laudantium. Consequuntur ab odio molestias temporibus unde qui aperiam. Velit ullam qui et consequatur unde. Ab blanditiis quia suscipit voluptas ullam. Pariatur eos facere vero et quam ut repudiandae optio."
}
```

#### Job
```json
{
  "id": 4,
  "created_at": "2025-04-24T03:01:10.000000Z",
  "updated_at": "2025-04-24T03:01:10.000000Z",
  "title": "Data Engineer",
  "description": "Build and maintain our data infrastructure, ensuring high-quality pipelines and insights across the organization.",
  "qualifications": "Strong SQL skills and experience with data tools like Airflow, Snowflake, or BigQuery. Python or Scala experience a plus.",
  "department": "engineering",
  "location": "San Francisco, CA",
  "location_type": "remote",
  "company_id": 1
}
```

#### Candidate
```json
{
  
  "id": 3,
  "created_at": "2025-04-28T22:24:10.000000Z",
  "updated_at": "2025-04-28T22:24:10.000000Z",
  "name": "Carol Davis",
  "email": "carol.davis@example.com",
  "phone": "555-123-4567",
  "resume_summary": "Graphic designer with 7 years of experience in creating branding and marketing materials."
}
```

