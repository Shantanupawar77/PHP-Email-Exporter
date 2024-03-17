# PHP Email Exporter
This project allows you to export data from a MySQL database to a CSV file and send it via email using PHPMailer.

## Setup Instructions
Database Setup: Create a MySQL database and import the provided SQL file (database.sql) to create the necessary table and insert sample data.

## PHPMailer Installation: Download PHPMailer from the official documentation and place it in the PhpMailer directory.

## Configuration: Update the SMTP configuration in export.php to match your email server settings.

## Run the Application: Navigate to index.php and click on the "Export To Email" button. This will generate the CSV file, send it via email, and delete the file afterward.

# File Structure
- config.php: Contains database configuration settings.
- data.php: Generates CSV data from the database.
- export.php: Handles CSV generation, email sending, and file deletion.
- PhpMailer/: Directory containing PHPMailer library files.
- database.sql: SQL file for database setup.
# Result
Upon clicking the "Export To Email" button, the application will generate a CSV file containing database records, send it via email to the specified recipient, and delete the file afterward.
