# Practical-05: Client-Side Registration Form Validation

**Student Name:** Jay Zalavadiya  
**Student ID:** 25CE142  
**Subject:** Web Development Frameworks (ITUE203)  
**Department:** Computer Engineering (CSPIT-CE)  
**University:** CHARUSAT  

---

## 1. Aim
To design and implement a comprehensive, accessible student registration form for StudentHub with rigorous client-side JavaScript validation (regex validation for Student ID, Name, Email, Mobile number, password strength, matching passwords, terms confirmation, error messages, and interactive field enhancements).

**Tools / Technology to be Used:** HTML5 Form Controls, CSS3, JavaScript ES6+ (Regex, DOM Event Listeners, Canvas API, `localStorage`).

---

## 2. Validation & Security Rules

| Input Field | Validation Criterion / Regex | Error Feedback Message |
|:---|:---|:---|
| **Full Name** | `/^[A-Za-z\s]{3,50}$/` | Minimum 3 letters, alphabetic and space characters only. |
| **Student ID** | `/^\d{2}[A-Za-z]{2}\d{3}$/` (e.g. `25ce142`) | Must match 2 digits, 2 branch letters, 3 digits. |
| **Email Address** | Standard RFC 5322 compliant regex | Must be a valid email (e.g. `student@charusat.edu.in`). |
| **Mobile Number**| `/^[6-9]\d{9}$/` | Exactly 10 digits starting with 6, 7, 8, or 9. |
| **Password** | Min 8 chars, 1 uppercase, 1 lowercase, 1 digit, 1 symbol | Dynamic password entropy strength meter (Weak/Moderate/Strong). |
| **Confirm Password**| Must strictly match Password value | "Passwords do not match." |
| **Branch & Year**| Non-empty select option | Required dropdown selection. |
| **CAPTCHA** | Procedural Canvas code verification | 6-character alphanumeric image with noise interference lines. |
| **Terms Check** | Checked boolean state | User must accept CHARUSAT Academic Code of Conduct. |

---

## 3. Files in this Practical
- [`register.html`](register.html): Semantic accessible registration form with ARIA live error regions.
- [`js/register.js`](js/register.js): Real-time input evaluation, Canvas CAPTCHA generation, and form submission handler.
- [`css/styles.css`](css/styles.css): Form layout, status banners, and input feedback styling.
