# Student Management System

This is a CRUD (Create, Read, Update, Delete) application built with Laravel 9 and MySQL to manage University Students. The application allows users to perform CRUD operations on Students and Teachers, link them together, and implement various functionalities like pagination, searching, and soft deletion. The frontend uses Bootstrap for styling and JS DataTables for enhanced table interactions.

## Features

- **CRUD Operations:** Create, Read, Update, and Delete students and teachers.
- **Relationships:** Each student is associated with a class teacher.
- **Soft Deletes:** Students can be soft deleted and restored later.
- **Validation:** Input validation to ensure data integrity.
- **Pagination:** Students are listed with pagination.
- **Search Functionality:** Search students by name or other attributes.
- **Responsive Design:** Built with Bootstrap to ensure the application is responsive.
- **Authentication:** User authentication implemented using Laravel's built-in auth system.
- **DataTables:** JS DataTables used for enhanced table features like sorting and searching.

## Technologies Used

- **Backend:** Laravel 9
- **Frontend:** Blade Templates, Bootstrap 5, JS DataTables
- **Database:** MySQL
- **Authentication:** Laravel's built-in authentication system

## Installation

### Prerequisites

- PHP 8.0 or above
- Composer
- Node.js and npm
- MySQL

### Setup Instructions

1. **Clone the Repository**
    ```bash
    git clone https://github.com/Aashu-hacker/student-management-system.git
    cd student-management-system
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment**
    - Copy the `.env.example` file to `.env`:
    ```bash
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations and Seeders**
    - This will create the database tables and populate them with sample data:
    ```bash
    php artisan migrate --seed
    ```

6. **Build Assets**
    - For production:
    ```bash
    npm run build
    ```
    - For development:
    ```bash
    npm run dev
    ```

7. **Run the Application**
    ```bash
    php artisan serve
    ```
    - Visit `http://localhost:8000` in your browser.

## Usage

- **List Students:** Navigate to the Students section to view the list of students.
- **Add Student:** Click on "Add Student" to create a new student entry.
- **Edit Student:** Click the "Edit" button next to a student to update their information.
- **Delete Student:** Click the "Delete" button next to a student to soft delete their record.
- **Search Students:** Use the search bar in the table to filter students by name, class, etc.

## Authentication

- The application uses Laravel's built-in authentication system. You can register a new user or log in with existing credentials.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Contact

For any inquiries or issues, please reach out via [email@example.com](mailto:email@example.com).

