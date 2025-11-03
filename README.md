# Project Management Portal

A **web-based Project Management Portal** designed to streamline the process of managing company project data efficiently.  
This application allows users to add, view, update, and delete project information, providing a centralized platform for organizing and monitoring company projects.

---

## Features

-  **Project Data Management** — Add, edit, and remove project records easily.  
-  **Dashboard Overview** — Get a clear overview of all projects in one place.  
-  **Search & Filter** — Quickly find specific projects using search and filter functionality.  
-  **User-Friendly Interface** — Simple and intuitive web interface for smooth navigation.  
-  **Database Integration** — Securely stores project details using MySQL.

---

## Technologies Used

| Component | Technology |
|------------|-------------|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP |
| Database | MySQL |

---

## Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/<your-username>/project-management-portal.git
   cd project-management-portal

2. **Set up the database**

- Create a MySQL database (e.g., project_portal).
- Import the SQL file from /database/project_portal.sql (if available) to set up tables.

3. **Configure the database connection**

- Open the config.php file.
- Update it with your local database credentials:
```bash
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_portal";
```

4. **Run the application**

- Place the project folder in your web server directory (e.g., htdocs for XAMPP).
- Start Apache and MySQL from your local server tool (XAMPP/WAMP).
- Open your browser and navigate to:
```bash
http://localhost/project-management-portal
```

## Project Structure
```bash
project-management-portal/
│
├── assets/               # CSS, JS, and image files
├── includes/             # Reusable PHP components
├── database/             # SQL dump file (optional)
├── index.php             # Main landing page
├── config.php            # Database configuration
└── README.md             # Project documentation
```

## Purpose

This project was developed as a **hands-on web development exercise** to demonstrate:

- CRUD operations with PHP & MySQL
- Frontend–backend integration
- Clean UI design principles

## Project Flow 
![Capture](https://user-images.githubusercontent.com/44197887/87570888-e7aeed00-c6e6-11ea-87e9-ed4abbd2f192.JPG)

## Designed Interfaces: 

### Starting Page
![1](https://user-images.githubusercontent.com/44197887/87572315-fb5b5300-c6e8-11ea-9028-f5debe4f749f.JPG)

### Register/ Login 
![2](https://user-images.githubusercontent.com/44197887/87572898-d1566080-c6e9-11ea-889a-f724fa24da79.JPG)

![3](https://user-images.githubusercontent.com/44197887/87572912-d5827e00-c6e9-11ea-9338-95e536d4abe4.JPG)

### New Project
![4](https://user-images.githubusercontent.com/44197887/87572461-3493c300-c6e9-11ea-81a9-acfc3576aa92.JPG)

### Edit Project
![6](https://user-images.githubusercontent.com/44197887/87572539-555c1880-c6e9-11ea-8aa2-f7d76b49634a.JPG)
![7](https://user-images.githubusercontent.com/44197887/87572558-5b51f980-c6e9-11ea-8710-439aa4d6e429.JPG)

--

*If you find this research insightful, please consider giving the repository a star on GitHub!*
