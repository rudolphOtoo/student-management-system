# Student Management System
 A Laravel-based system to manage student records, courses, and documents, with automated file organization.

## Features
 - User authentication for admins.
 - Database models for students and courses with many-to-many relationships.

 ## Setup
    1. Clone the repository:
        ```bash
        git clone https://github.com/your-username/student-management-system.git
        cd student-management-system
        ```
     2. Install dependencies:
        ```bash
        composer install
        npm install
        ```
     3. Configure `.env` with your MySQL credentials.
     4. Run migrations:
        ```bash
        php artisan migrate
        ```
     5. Compile assets:
        ```bash
        npm run dev
        ```
     6. Run the server:
        ```bash
        php artisan serve
        ```