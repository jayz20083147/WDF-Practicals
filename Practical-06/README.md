# Practical 06: Asynchronous Data Loading with Fetch API & JSON

**Student Name:** Jay Zalavadiya  
**Student ID:** 25CE142  
**Course Code:** ITUE203 - Web Development Frameworks  
**Department:** Computer Engineering, CSPIT  
**Institution:** Charotar University of Science and Technology (CHARUSAT)  

---

## 🎯 Aim
To fetch event and student data from JSON files using the JavaScript Fetch API and display it dynamically with search, category/branch filter, sorting, and pagination in the StudentHub portal.

---

## 🛠️ Tools & Technologies Used
- **HTML5:** Semantic layouts, forms, controls, table containers, responsive cards.
- **CSS3:** Glassmorphic layout styling, responsive flexbox and grid tables.
- **JavaScript (ES6+):**
  - Fetch API (`fetch()`, `response.json()`, `.then()`, `.catch()`).
  - LocalStorage offline caching (`localStorage.setItem()`, `localStorage.getItem()`).
  - Higher-Order Array Methods (`Array.prototype.filter`, `Array.prototype.sort`, `Array.prototype.slice`).
  - DOM dynamic rendering (`document.createElement`, `innerHTML`, `appendChild`).
- **Data Format:** JSON (`data/students.json`, `data/events.json`, `student.json`).
- **Browser:** Google Chrome DevTools (Network tab inspection, console logging).

---

## 🧠 Theory & Core Concepts

### 1. Fetch API Architecture
The `fetch()` function initiates a network request and returns a Promise that resolves to a `Response` object representing the response to the request.
```javascript
fetch("data/students.json")
    .then(response => {
        if (!response.ok) throw new Error("Network response was not ok");
        return response.json();
    })
    .then(data => {
        allStudents = data;
        renderStudents();
    })
    .catch(error => {
        console.error("Fetch failed:", error);
    });
```

### 2. Real-time Filtering & Multi-criteria Search
The student directory filters matching items by checking student attributes:
```javascript
let filtered = allStudents.filter(student => {
    const matchSearch = (student.name || "").toLowerCase().includes(searchText) ||
                        (student.enrollment || "").toLowerCase().includes(searchText) ||
                        (student.email || "").toLowerCase().includes(searchText);
    const matchBranch = (selectedBranch === "All" || student.branch === selectedBranch);
    return matchSearch && matchBranch;
});
```

### 3. Client-Side Pagination
With a fixed `pageSize` (e.g., 5 items per page), the current slice of records is calculated using:
```javascript
const totalPages = Math.max(1, Math.ceil(filtered.length / pageSize));
const start = (currentPage - 1) * pageSize;
const pageStudents = filtered.slice(start, start + pageSize);
```

---

## 📁 Folder Structure

```
Practical-06/
├── index.html                   # Main portal entry point
├── student-dashboard.html       # Overview of semester achievements
├── students.html                # Interactive student directory table
├── events.html                  # Asynchronous campus events board
├── student.js                   # Client-side Fetch & DOM script
├── student.json                 # Fallback root student JSON
├── css/
│   └── styles.css               # Shared glassmorphism styling
├── js/
│   └── student.js               # Primary student directory script
├── data/
│   ├── students.json            # 16-record student dataset
│   └── events.json              # 8-record campus event dataset
└── README.md                    # Practical documentation & Q&A
```

---

## 🚀 Running Practical 06

Because modern web browsers enforce **CORS** restrictions on `file://` fetch requests, run Practical 06 using a local web server:

### Option 1: Python Local Server
```bash
cd Practical-06
python3 -m http.server 8000
```
Open `http://localhost:8000` in Google Chrome.

### Option 2: VS Code Live Server
Right-click `students.html` or `index.html` and select **"Open with Live Server"**.

### Option 3: PHP Built-in Server
```bash
php -S localhost:8000
```

---

## ❓ Viva & Q&A

**Q1: What is the Fetch API?**  
**A:** The Fetch API is a modern JavaScript interface used to make asynchronous network requests. It returns a promise that resolves to a `Response` object, which can then be converted to JSON or text.

**Q2: What is the role of the `then` and `catch` methods here?**  
**A:** `then` methods handle the successful steps—first reading the response as JSON and then rendering the data—while `catch` handles any network error or exception that occurs during the request.

**Q3: How is search implemented?**  
**A:** The `input` event calls `renderStudents`, which uses `filter` to match the typed text against the student's name, enrollment ID, or email, and resets pagination to page 1.

**Q4: How is sorting performed?**  
**A:** The sort select listener re-orders the filtered array using `Array.prototype.sort()` with numeric comparison (`b.cgpa - a.cgpa`) or `localeCompare()` for alphabetical ordering.

**Q5: How is pagination achieved?**  
**A:** The page size is 5, and the `slice(start, start + pageSize)` method returns only the records for the current page. The next and previous buttons update `currentPage` and disable boundary buttons appropriately.
