# Web Development Frameworks (WDF) Practicals

[![PHP Version](https://img.shields.io/badge/PHP-8.x-777bb4.svg?style=flat&logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.x-4479a1.svg?style=flat&logo=mysql)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=flat&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![Status](https://img.shields.io/badge/Practicals-01--14%20Complete-brightgreen.svg)]()

Comprehensive laboratory implementation of full-stack web engineering, frontend UI/UX architecture, client-side validation, DOM manipulation, asynchronous Fetch APIs, secure user authentication, CRUD operations, file uploads, RESTful JSON APIs, and role-based access control for **StudentHub**.

---

## Student & Course Information

| Field | Details |
| :--- | :--- |
| **Student Name** | Jay Zalavadiya |
| **Student ID** | `25CE142` |
| **Course / Subject** | Web Development Frameworks |
| **Subject Code** | `ITUE203` |
| **Department** | Computer Engineering (CSPIT-CE) |
| **University** | Charotar University of Science and Technology (CHARUSAT) |

---

## List of Practicals & Objectives (Complete 01 - 14)

| Practical | Module / Topic | Objective / Aim |
| :--- | :--- | :--- |
| **[Practical-01](./Practical-01/)** | Project Initiation & Wireframing | Initiate the semester-long StudentHub portal by identifying problem scope, user roles, key modules, navigation flow, and 10 core pages. Create sitemap, low-fidelity wireframes, project structure, and Git setup. |
| **[Practical-02](./Practical-02/)** | Semantic HTML5 Architecture | Build semantic HTML5 skeleton pages for all 10 modules (Login, Signup, Home, Assignments, Attendance, Timetable, Classes, Courses, Result, Profile) with proper tags, links, and forms. |
| **[Practical-03](./Practical-03/)** | Responsive Glassmorphism UI | Develop a modern, responsive layout using CSS3 Flexbox, Grid, custom properties, and glassmorphic translucent UI effects across desktop, tablet, and mobile screen sizes. |
| **[Practical-04](./Practical-04/)** | Dynamic DOM Manipulation | Implement interactive DOM manipulation features including Dark/Light theme toggle with `localStorage`, dismissible notification banner with `sessionStorage`, automated carousel slider, announcement modal dialog with Escape-key handling, and collapsible FAQ accordion. |
| **[Practical-05](./Practical-05/)** | Client-Side Form Validation | Build a robust registration form with real-time JavaScript validation: RegEx checks for student ID (`25ce142` format) and CHARUSAT email, live password strength meter with 4-rule requirements, confirm password matching, and accessible error badges. |
| **[Practical-06](./Practical-06/)** | Asynchronous Fetch API & JSON | Load and parse structured JSON data asynchronously using JavaScript Fetch API (`students.json` and `events.json`). Implement dynamic client-side search, branch filter, CGPA sorting, pagination, and offline `localStorage` caching. |
| **[Practical-07](./Practical-07/)** | Form Processing & JSON Storage | Process submitted registration/contact form data using PHP. Validate and sanitize inputs on the server side and store records in JSON format. Display success and error status messages. |
| **[Practical-08](./Practical-08/)** | Database Design & Connectivity | Design the relational database for **StudentHub** with `students`, `events`, and `registrations` tables. Establish PHP database connectivity using `mysqli` with robust error handling. |
| **[Practical-09](./Practical-09/)** | Secure MySQL Registration | Implement secure user registration inserting user records into MySQL via prepared statements. Sanitize inputs, enforce duplicate email validation, securely hash passwords using `password_hash()`, and handle contact queries. |
| **[Practical-10](./Practical-10/)** | Session Auth & RBAC Security | Develop secure authentication and logout functionality using PHP sessions. Verify passwords with `password_verify()`, regenerate session IDs to prevent fixation, restrict unauthorized access, implement a 30-minute session inactivity timeout, and provide Remember-Me capability. |
| **[Practical-11](./Practical-11/)** | Student Management CRUD | Build a complete Student Management module supporting View, Add, Edit, Delete, Search (by name/email), and Filter (by course) operations using parameterized MySQLi queries. |
| **[Practical-12](./Practical-12/)** | Event Management & File Upload | Develop an Event Management module for administrators to create, view, edit, and delete events, featuring multipart event poster image uploads with strict MIME-type (`JPG`/`PNG`) and file-size (`<= 2MB`) validation. |
| **[Practical-13](./Practical-13/)** | Asynchronous Fetch REST API | Create a RESTful PHP JSON API endpoint (`api_events.php`) supporting `GET`, `POST`, `PUT`, and `DELETE` HTTP methods, and consume it seamlessly via JavaScript's `Fetch API` for single-page asynchronous operations without page reload. |
| **[Practical-14](./Practical-14/)** | Centralized Admin Dashboard | Construct a centralized Admin Dashboard aggregating dynamic metrics (total students, total events, latest 5 registrations) with strict role-based access control (RBAC) and role-specific navigation for students and administrators. |

---

## Repository Structure

```text
wdf/
├── Practical-01/                  # Practical 1: Initiation, Sitemap & Wireframes
│   ├── index.html                # Interactive sitemap & architecture explorer
│   ├── README.md                 # Project requirements, 10-page spec, wireframes & Q&A
│   └── styles.css                # Visual theme for architecture portal
│
├── Practical-02/                  # Practical 2: HTML5 Skeletons (10 Modules)
│   ├── Assignments.html          # Assignment submissions & status table
│   ├── Attendance.html           # Monthly attendance & percentage overview
│   ├── Classes.html              # Classroom schedules & instructor contacts
│   ├── Courses.html              # Enrolled courses & credits catalog
│   ├── Home.html                 # Student dashboard landing skeleton
│   ├── Login.html                # Authentication entry skeleton
│   ├── Profile.html              # Student profile & academic biography
│   ├── README.md                 # Semantic HTML5 architecture documentation
│   ├── Result.html               # Semester grades, SGPA & CGPA breakdown
│   ├── Signup.html               # New student registration skeleton
│   └── Timetable.html            # Weekly lecture schedule table
│
├── Practical-03/                  # Practical 3: Responsive Glassmorphism UI
│   ├── css/
│   │   └── styles.css            # Complete responsive CSS design system
│   ├── index.html                # Responsive glassmorphism showcase
│   ├── README.md                 # UI design system & responsive breakpoints
│   └── style.css                 # Root-level CSS copy
│
├── Practical-04/                  # Practical 4: DOM Manipulation
│   ├── css/
│   │   └── styles.css            # Theme & modal styles
│   ├── index.html                # Interactive DOM features showcase
│   ├── js/
│   │   └── script.js             # Theme toggle, slider, modal, banner, accordion
│   ├── README.md                 # Event listeners, state handling & Q&A
│   ├── script.js                 # Root-level JavaScript copy
│   └── styles.css                # Root-level stylesheet
│
├── Practical-05/                  # Practical 5: Client-Side Form Validation
│   ├── css/
│   │   └── styles.css            # Form layout and validation badges
│   ├── index.html                # Registration validation portal
│   ├── js/
│   │   └── register.js           # Real-time regex & password strength logic
│   ├── README.md                 # RegEx patterns, validation rules & Q&A
│   ├── register.html             # Registration form with error containers
│   ├── register.js               # Root-level validator copy
│   └── styles.css                # Root-level stylesheet
│
├── Practical-06/                  # Practical 6: Asynchronous Fetch API & JSON
│   ├── css/
│   │   └── styles.css            # Glassmorphism directory styling
│   ├── data/
│   │   ├── events.json           # Campus events dataset
│   │   └── students.json         # 16-record student directory dataset
│   ├── events.html               # Asynchronous campus events board
│   ├── index.html                # Practical 6 hub
│   ├── js/
│   │   └── student.js            # Fetch API, search, filter, sort & pagination
│   ├── README.md                 # Fetch API lifecycle, array methods & Q&A
│   ├── student-dashboard.html    # Academic portal overview
│   ├── student.js                # Root-level Fetch script copy
│   ├── student.json              # Fallback student dataset
│   ├── students.html             # Interactive student directory table
│   └── styles.css                # Root-level stylesheet
│
├── Practical-07/                  # Practical 7: Form Processing & JSON Storage
│   ├── contact.html              # Contact form submission page
│   ├── contacts.json             # Stored contact queries
│   ├── register.html             # Student registration form
│   ├── register.php              # Server-side validation & JSON persistence
│   ├── registrations.json        # Stored registration records
│   ├── script.js                 # Client-side form validation
│   └── styles.css                # StudentHub responsive styles
│
├── Practical-08/                  # Practical 8: Database Design & Connection
│   ├── database.sql              # Schema creation (students, events, registrations)
│   └── db_connect.php            # MySQLi connection test script
│
├── Practical-09/                  # Practical 9: Secure DB Registration
│   ├── contact.html              # Contact form
│   ├── contacts.json             # Contact submissions
│   ├── database.sql              # Local copy of database schema
│   ├── db_connect.php            # Modular database connection
│   ├── register.html             # Secure registration frontend
│   ├── register.php              # DB insertion, duplicate check, bcrypt hash
│   └── styles.css                # Visual theme & alert boxes
│
├── Practical-10/                  # Practical 10: Session Auth & RBAC
│   ├── auth.php                  # Session verification & 30-min timeout check
│   ├── db_connect.php            # Database connection
│   ├── home.html                 # Student landing dashboard layout
│   ├── home.php                  # Protected student landing page
│   ├── login.html                # Login portal with status notices
│   ├── login.php                 # Password verification & session creation
│   ├── logout.php                # Session destruction & cookie revocation
│   └── styles.css                # Portal styles
│
├── Practical-11/                  # Practical 11: Student CRUD & Search/Filter
│   ├── add_student.php           # Add new student with default credentials
│   ├── auth.php                  # Authentication guard
│   ├── db_connect.php            # Database connection
│   ├── edit_student.php          # Pre-populated student edit form
│   ├── manage_students.php       # Student table with search, filter & delete
│   └── styles.css                # Admin data tables styling
│
├── Practical-12/                  # Practical 12: Event Management & File Uploads
│   ├── add_event.html            # Event creation with multipart file upload
│   ├── db_connect.php            # Database connection
│   ├── edit_event.php            # Pre-populated event update form
│   ├── manage_events.php         # Event catalog with poster thumbnails
│   ├── process_add_event.php     # File upload validation & DB insert
│   ├── process_delete_event.php  # Event deletion & file cleanup
│   ├── process_edit_event.php    # Event update & optional poster replacement
│   ├── styles.css                # Event cards & table UI
│   └── uploads/                  # Poster image directory
│       └── .gitkeep
│
├── Practical-13/                  # Practical 13: Asynchronous Fetch REST API
│   ├── api_events.php            # RESTful CRUD API endpoint (JSON)
│   ├── db_connect.php            # Database connection
│   ├── event_dashboard.html      # SPA dynamic dashboard
│   ├── script.js                 # Async/await Fetch consumer
│   └── styles.css                # Dashboard styling
│
├── Practical-14/                  # Practical 14: Centralized Admin Dashboard
│   ├── admin_dashboard.php       # Metric counters & latest 5 registrations
│   ├── auth.php                  # Admin role authorization guard
│   ├── db_connect.php            # Database connection
│   ├── login.php                 # Dual-role authentication redirector
│   └── styles.css                # Dashboard metrics UI
│
├── .gitignore                    # Git exclusions
└── README.md                     # Project documentation & execution guide
```

---

## Technologies & Software Requirements

- **Client-Side Technologies**: HTML5, CSS3 (Custom Properties, Flexbox, CSS Grid), JavaScript (ES6+ Standards, Fetch API, DOM API, LocalStorage, SessionStorage).
- **Server-Side Technologies**: PHP 8.x (Session Handling, Filter Extension, OpenSSL, Prepared Statements).
- **Database**: MySQL 8.x (InnoDB Engine, Foreign Key Constraints).
- **Recommended Environment**:
  - [XAMPP](https://www.apachefriends.org/) (Apache 2.4 + PHP 8.x + MySQL 8.x)
  - Modern Web Browser (Google Chrome, Firefox, or Safari)
  - Code Editor: Visual Studio Code

---

## Instructions to Run Practicals

### 1. Practicals 01 to 05 (Static HTML, CSS, DOM Manipulation & Validation)
These practicals run directly in any web browser without a web server:
- Double-click `index.html` inside `Practical-01/`, `Practical-02/`, `Practical-03/`, `Practical-04/`, or `Practical-05/`.
- Or open with the VS Code **Live Server** extension.

### 2. Practical 06 (Fetch API & JSON Data)
Due to browser CORS restrictions on `file://` fetch requests, run Practical 06 using a local server:
```bash
cd Practical-06
python3 -m http.server 8000
```
Open `http://localhost:8000/students.html` in your browser.

### 3. Practicals 07 to 14 (PHP & MySQL Backend)
1. Copy the entire repository into your XAMPP `htdocs` directory:
   - **macOS**: `/Applications/XAMPP/xamppfiles/htdocs/wdf`
   - **Windows**: `C:\xampp\htdocs\wdf`
2. Start the **Apache** and **MySQL** services in the XAMPP Control Panel.
3. Import the database schema:
   - Open [phpMyAdmin](http://localhost/phpmyadmin).
   - Create a database named `studenthub_db`.
   - Click the **Import** tab and select `Practical-08/database.sql`.
   - Execute the SQL import.
4. Verify database connectivity:
   - Navigate to `http://localhost/wdf/Practical-08/db_connect.php`.
5. Access the applications:
   - **Practical 07 Form**: `http://localhost/wdf/Practical-07/register.html`
   - **Practical 09 DB Register**: `http://localhost/wdf/Practical-09/register.html`
   - **Practical 10 Authentication**: `http://localhost/wdf/Practical-10/login.html`
   - **Practical 11 Student CRUD**: `http://localhost/wdf/Practical-11/manage_students.php`
   - **Practical 12 Event Management**: `http://localhost/wdf/Practical-12/manage_events.php`
   - **Practical 13 REST API SPA**: `http://localhost/wdf/Practical-13/event_dashboard.html`
   - **Practical 14 Admin Dashboard**: `http://localhost/wdf/Practical-14/admin_dashboard.php`

---

## Default Login Credentials

| Role | Email | Password | Access Level |
| :--- | :--- | :--- | :--- |
| **Administrator** | `admin@studenthub.com` | `Admin@123` | Full administrative CRUD & metrics access |
| **Student** | `25ce142@charusat.edu.in` | `Student@123` | Student portal, profile & events access |
