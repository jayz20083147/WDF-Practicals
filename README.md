# Web Development Frameworks (WDF) Practicals

[![PHP Version](https://img.shields.io/badge/PHP-8.x-777bb4.svg?style=flat&logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.x-4479a1.svg?style=flat&logo=mysql)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=flat&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

Comprehensive laboratory implementation of full-stack web applications, secure user authentication, CRUD operations, file uploads, RESTful JSON APIs, and role-based access control for **StudentHub**.

---

## Student & Course Information

| Field | Details |
| :--- | :--- |
| **Student Name** | Jay Zalavadiya |
| **Student ID** | `25CE142` |
| **Course / Subject** | Web Development Frameworks |
| **Subject Code** | `ITUE203` |
| **Department** | Computer Engineering (CSPIT-CE) |
| **University** | Chandubhai S. Patel Institute of Technology (CHARUSAT) |

> [!NOTE]
> **Curriculum Scope**: In accordance with the academic curriculum and submitted laboratory journal (`25CE142_WDF.pdf`), this repository covers **Practical-07 through Practical-14**, focusing on backend server-side engineering with PHP, MySQL relational database management, session authentication, AJAX/Fetch REST APIs, file handling, and administrative dashboards.

---

## List of Practicals & Objectives

| Practical | Objective / Aim |
| :--- | :--- |
| **[Practical-07](./Practical-07/)** | Process submitted registration/contact form data using PHP. Validate and sanitize inputs on the server side and store records in JSON format. Display success and error status messages. |
| **[Practical-08](./Practical-08/)** | Design the relational database for **StudentHub** with `students`, `events`, and `registrations` tables. Establish PHP database connectivity using `mysqli` with error handling. |
| **[Practical-09](./Practical-09/)** | Implement secure user registration inserting user records into MySQL via prepared statements. Sanitize inputs, enforce duplicate email validation, securely hash passwords using `password_hash()`, and handle contact queries. |
| **[Practical-10](./Practical-10/)** | Develop secure authentication and logout functionality using PHP sessions. Verify passwords with `password_verify()`, regenerate session IDs to prevent fixation, restrict unauthorized access, implement a 30-minute session inactivity timeout, and provide Remember-Me capability. |
| **[Practical-11](./Practical-11/)** | Build a complete Student Management module supporting View, Add, Edit, Delete, Search (by name/email), and Filter (by course) operations using parameterized MySQLi queries. |
| **[Practical-12](./Practical-12/)** | Develop an Event Management module for administrators to create, view, edit, and delete events, featuring multipart event poster image uploads with strict MIME-type (`JPG`/`PNG`) and file-size (`<= 2MB`) validation. |
| **[Practical-13](./Practical-13/)** | Create a RESTful PHP JSON API endpoint (`api_events.php`) supporting `GET`, `POST`, `PUT`, and `DELETE` HTTP methods, and consume it seamlessly via JavaScript's `Fetch API` for single-page asynchronous operations without page reload. |
| **[Practical-14](./Practical-14/)** | Construct a centralized Admin Dashboard aggregating dynamic metrics (total students, total events, latest 5 registrations) with strict role-based access control (RBAC) and role-specific navigation for students and administrators. |

---

## Repository Structure

```text
wdf/
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
│   ├── api_events.php            # REST API (GET, POST, PUT, DELETE)
│   ├── db_connect.php            # Database connection with JSON error output
│   ├── event_dashboard.html      # Asynchronous SPA dashboard using Fetch API
│   └── styles.css                # Dashboard styling
│
├── Practical-14/                  # Practical 14: Comprehensive Admin Dashboard
│   ├── admin_dashboard.php       # Metrics, total counts & latest 5 registrations
│   ├── course.html               # Course catalog for students
│   ├── db_connect.php            # Database connection
│   ├── home.php                  # Student home page
│   ├── login.html                # Unified login interface
│   ├── login.php                 # Role-based credential evaluator
│   ├── logout.php                # Session termination
│   ├── manage_events.php         # Admin events management link target
│   ├── manage_students.php       # Admin students management link target
│   ├── styles.css                # Grid metrics & responsive tables
│   └── uploads/                  # Upload directory for events
│       └── .gitkeep
│
├── database/                     # Master Database Assets
│   └── database.sql              # Master SQL script with full seed data
│
├── .gitignore                    # Git ignore file for temporary & OS files
└── README.md                     # Documentation
```

---

## Technologies Used

- **Backend**: PHP 8.x (Object-Oriented & Procedural MySQLi, Sessions, JSON API, File Handling)
- **Database**: MySQL 8.x / MariaDB (Prepared Statements, Foreign Keys, Indexes, Constraints)
- **Frontend**: HTML5 Semantic Elements, CSS3 (Custom Variables, Flexbox, CSS Grid), JavaScript (ES6+, Fetch API, DOM Manipulation)
- **Data Exchange**: JSON (`json_encode`, `json_decode`, `fetch`)
- **Security**:
  - `password_hash()` & `password_verify()` using strong Bcrypt
  - SQL Injection prevention using MySQLi Prepared Statements (`bind_param`)
  - Cross-Site Scripting (XSS) prevention using `htmlspecialchars()`
  - Session Fixation protection via `session_regenerate_id(true)`
  - Automatic session timeout (1800s / 30 mins)

---

## Software Requirements

1. **XAMPP / WampServer / LAMP / MAMP** with:
   - Apache HTTP Server 2.4+
   - PHP 7.4+ or 8.x with `mysqli`, `json`, and `session` extensions enabled
   - MariaDB 10.4+ or MySQL 8.0+
2. **Modern Web Browser** (Google Chrome, Mozilla Firefox, Microsoft Edge, Safari)
3. **Git** for version control

---

## Setup & Installation Instructions

### 1. Database Setup via phpMyAdmin or MySQL CLI

#### Method A: Using phpMyAdmin (Recommended)
1. Start **Apache** and **MySQL** services in the XAMPP Control Panel.
2. Open your web browser and navigate to `http://localhost/phpmyadmin`.
3. Click on the **Import** tab at the top.
4. Click **Choose File** and select `database/database.sql` (or `Practical-08/database.sql`).
5. Click **Import** (or **Go**) at the bottom.
6. The database `studenthub_db` will be created with tables `students`, `events`, and `registrations`, along with seed data.

#### Method B: Using MySQL Command Line
```bash
mysql -u root -p < database/database.sql
```

---

### 2. Default Test Credentials

The database script pre-populates default demo accounts for testing:

| Role | Email Address | Password | Landing Page |
| :--- | :--- | :--- | :--- |
| **Administrator** | `admin@studenthub.com` | `password` | `admin_dashboard.php` |
| **Student** | `25ce142@charusat.edu.in` | `password` | `home.php` |
| **Student** | `rahul.patel@example.com` | `password` | `home.php` |

---

### 3. Deploying to XAMPP

1. Copy or clone this entire repository into your XAMPP web root directory:
   - **Windows**: `C:\xampp\htdocs\wdf`
   - **macOS**: `/Applications/XAMPP/xamppfiles/htdocs/wdf`
   - **Linux**: `/opt/lampp/htdocs/wdf`
2. Ensure directory write permissions for JSON files and upload folders:
   ```bash
   chmod -R 777 Practical-07/*.json Practical-09/*.json Practical-12/uploads Practical-14/uploads
   ```

---

## Running Individual Practicals

Once Apache and MySQL are running in XAMPP, access each practical through your browser at `http://localhost/wdf/`:

### Practical-07: Form Processing & JSON Persistence
- **URL**: `http://localhost/wdf/Practical-07/register.html`
- Submit registration or contact forms. Submissions are saved to `registrations.json` and `contacts.json`.

### Practical-08: Database Connectivity Check
- **URL**: `http://localhost/wdf/Practical-08/db_connect.php`
- Displays `"Connected successfully to the StudentHub database!"`.

### Practical-09: Secure MySQL Registration
- **URL**: `http://localhost/wdf/Practical-09/register.html`
- Tests duplicate email checking, prepared statement insertion, and bcrypt password hashing.

### Practical-10: Session Authentication & Inactivity Timeout
- **URL**: `http://localhost/wdf/Practical-10/login.html`
- Log in with student credentials to test session creation, auto-timeout (30 minutes), and session destruction on logout.

### Practical-11: Student Management (CRUD)
- **URL**: `http://localhost/wdf/Practical-11/manage_students.php`
- Search students by name or email, filter by engineering branch (`CSE`, `CE`, `IT`, `ME`), add new students, edit profiles, or delete records.

### Practical-12: Event Management & File Uploads
- **URL**: `http://localhost/wdf/Practical-12/manage_events.php`
- Upload event posters with strict MIME type and 2MB size enforcement, view thumbnail previews, edit, and delete events.

### Practical-13: Async Event Management via Fetch REST API
- **URL**: `http://localhost/wdf/Practical-13/event_dashboard.html`
- **Testing the API directly**:
  - `GET http://localhost/wdf/Practical-13/api_events.php`: Returns array of events in JSON format.
  - `POST http://localhost/wdf/Practical-13/api_events.php` with JSON body `{"event_name":"AI Summit","event_date":"2026-06-15","venue":"Hall A"}`.
  - `PUT http://localhost/wdf/Practical-13/api_events.php` with JSON body `{"id":1,"event_name":"Updated Name",...}`.
  - `DELETE http://localhost/wdf/Practical-13/api_events.php?id=1`: Deletes event by ID.

### Practical-14: Admin Analytics & RBAC Dashboard
- **URL**: `http://localhost/wdf/Practical-14/login.html`
- Log in as `admin@studenthub.com` to access administrative metrics and latest registrations, or log in as a student to see the restricted view.

---

## Enhancements Beyond Original PDF

To ensure all practicals function as fully working web applications, the following enhancements and supporting files were added:
1. **Master Schema (`database/database.sql`)**: Synthesized the database requirements from the aims and queries into a complete, foreign-key linked schema with seed records.
2. **Event Processing Scripts (`process_edit_event.php`, `process_delete_event.php`)**: Provided the server-side update and deletion handlers referenced in Practical-12's forms.
3. **Master Stylesheet (`styles.css`)**: Implemented a responsive design system consistent across all practicals matching the visual appearance of the PDF screenshots.
4. **Client-Side Form Validation (`Practical-07/script.js`)**: Real-time validation script verifying email patterns, 10-digit mobile phone numbers, and matching passwords.
5. **Initial Storage Files (`registrations.json`, `contacts.json`)**: Formatted initial JSON storage structures allowing immediate execution out-of-the-box.

---

## GitHub Setup & Push Instructions

To push this repository to your GitHub account:

```bash
# 1. Initialize git repository
git init

# 2. Stage all practical files and documentation
git add .

# 3. Commit the practical code
git commit -m "Add complete WDF practicals (Practical-07 to Practical-14) source code"

# 4. Set default branch to main
git branch -M main

# 5. Link your GitHub remote repository
# Replace YOUR_GITHUB_REPOSITORY_URL with your actual GitHub repo link (e.g., https://github.com/username/WDF-Practicals.git)
git remote add origin YOUR_GITHUB_REPOSITORY_URL

# 6. Push to GitHub
git push -u origin main
```

---

## License

This project is created for educational and academic coursework purposes under the curriculum of **CHARUSAT (CSPIT-CE)**.
