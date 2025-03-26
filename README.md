College Department Management System

Project Overview

The College Department Management System is a web-based application that allows users to manage colleges and departments efficiently. The system provides features to add, edit, and delete colleges and departments, ensuring smooth organization and management.
Features:
1. College Management: Add, update, and delete colleges.
2. Department Management: Associate departments with colleges and modify their details.
3. Responsive UI: Works seamlessly across different devices.
4. Database Integration: Stores and retrieves data dynamically.

Steps to Clone and Run the Application

Prerequisites:

Ensure you have the following installed:

1. PHP (8.1 +)
2. Composer (Dependency manager for PHP)
3. MySQL 

Clone the Repository:
git clone https://github.com/AspiringDude/Midterm.git

Set Up the Environment:
1.	Create a .env file by copying the example:
2.	cp .env.example .env
3.	Open .env and configure the database connection:
4.	DB_CONNECTION=mysql
5.	DB_HOST=127.0.0.1
6.	DB_PORT=3306
7.	DB_DATABASE=your_database_name
8.	DB_USERNAME=your_username
9.	DB_PASSWORD=your_password
    
Start the Application:
On terminal
laravel install
php artisan serve
Visit http://127.0.0.1:8000 in your browser.

Git Workflow Explanation
Branching Strategy:
1.	main Branch: Stable production-ready code.
2.	feature-branch-fontsize: For editing font size for all pages.
3.	feature-branch-web.php-update: For setting up web.php so new pages will work.
4.	feature-branch-change-name: For changing homepage name.
5.	feature-branch-home-upgrade: For updating home CSS.
6.	feature-branch-faq: For updating FAQ Page CSS and added more information.
7.	feature-branch-about: For updating About Page CSS and added more information.

Workflow:
1.	Create a Feature Branch:
2.	git checkout -b feature/your-feature-name
3.	Make Changes & Commit:
4.	git add .
5.	git commit -m "Your commit message"
6.	Push to Remote:
7.	git push origin feature/your-feature-name
8.	Create a Pull Request (PR):
o	Open GitHub and navigate to the repository.
o	Click on "New Pull Request".
o	Select feature/your-feature-name as the source branch and main as the target.
o	Add a description and request a review.
9.	Merge the PR:
o	After approval, merge the PR into main.
o	Delete the feature branch if no longer needed.
Keeping Your Local Repo Updated:
git checkout main
git pull origin main
git branch -d feature/your-feature-name

