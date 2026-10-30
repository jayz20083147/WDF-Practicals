# Practical-02: Static HTML5 Skeletons for StudentHub Portal

**Student Name:** Jay Zalavadiya  
**Student ID:** 25CE142  
**Subject:** Web Development Frameworks (ITUE203)  
**Department:** Computer Engineering (CSPIT-CE)  
**University:** CHARUSAT  

---

## 1. Aim
To develop static HTML5 skeletons for at least 10 StudentHub portal pages (such as Home, About, Register, Login, Dashboard, Events, Profile, Contact, Admin, FAQ, and Feedback) using proper semantic tags and an accessibility-friendly web structure.

**Tools / Technology to be Used:** VS Code, HTML5, Browser accessibility inspection tools.

---

## 2. Theory & Core Concepts

1. **Semantic HTML Structure**:
   Using modern HTML5 tags (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`, `<table>`, `<form>`) to define the true semantic meaning and hierarchy of the web document.
2. **Web Accessibility (a11y)**:
   Structuring forms and tables with explicit labels (`<label for="...">`), logical heading hierarchies (`<h1>` to `<h6>`), and descriptive navigation links to assist screen readers.
3. **Template Consistency**:
   Establishing a uniform header, navigation links bar, and footer across all pages of the portal to provide predictable navigation.

---

## 3. Implemented Pages

| Filename | Purpose | Key HTML Features |
|:---|:---|:---|
| `Login.html` | User Authentication | Center-aligned form table, email/password inputs, Remember Me checkbox, submit/reset buttons. |
| `Signup.html` | Account Creation | Full name, student ID, email, role selection dropdown, password/confirm password fields. |
| `Home.html` | Portal Homepage | Portal header, navigation menu, welcome banner, quick account access card. |
| `Timetable.html` | Weekly Schedule | HTML timetable table spanning Monday to Friday with lecture slots, break times, and faculty names. |
| `Attendance.html`| Subject Attendance | Tabular display of theory and practical lectures conducted, attended, percentages, and eligibility status. |
| `Courses.html` | Course Curriculum | Enrolled courses table with subject codes, credits, course types, faculty instructors, and syllabus links. |
| `Classes.html` | Classroom Directory | Room numbers, lab batch assignments, building locations, and online lecture links. |
| `Assignments.html`| Lab Submission | Assignment statements, deadlines, status badges (Submitted, Pending, Overdue), and submit buttons. |
| `Result.html` | Exam Performance | Semester grade card with subject credits, grade points, SGPA, and academic standing remarks. |
| `Profile.html` | Student Profile | Table summarizing student bio, ID, department, semester, and institutional email. |

---

## 4. Accessibility Checklist
- [x] Every form input is preceded by a clear label.
- [x] Clean heading hierarchy starting with `<h1>` for page identity.
- [x] Clear navigation text instead of ambiguous click labels.
- [x] Clean table headers (`<th>`) with structured cell padding.
