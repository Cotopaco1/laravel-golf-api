
## Installation

### Requirements
- PHP 8.4
- MySQL 8.0+
- OpenAI API Key
- Composer

### Setup Environment Variables
- Copy `.env.example` to `.env`: `cp .env.example .env`
- Create the database and configure MySQL variables
- Set your `OPENAI_API_KEY`
- If necessary, generate a new application key: `php artisan key:generate` (a default key is provided)

### Install Composer Dependencies
```bash
composer install
```

### Run Migrations with Seeder
```bash
php artisan migrate --seed
```

### Start Your Preferred Server
Point it to `public/index.php`

### Start Queue Worker
Open a new terminal in the project root and run:
```bash
php artisan queue:work
```
⚠️ The queue worker must be running for AI enrichment to work.
Without it, listings will be created but won't have AI evaluation.

### Default User Credentials (Created by Seeder)
```
Email: sergio@test.com
Password: password123
```

### API Documentation
Open the [Postman collection](./Golf.postman_collection.json) for endpoint guidance.

### Technical Decisions
- The `create listing` endpoint doesn't return AI enrichment text immediately because the enrichment job runs asynchronously.

