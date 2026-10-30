# Practical-04: Interactive DOM Manipulation for StudentHub

**Student Name:** Jay Zalavadiya  
**Student ID:** 25CE142  
**Subject:** Web Development Frameworks (ITUE203)  
**Department:** Computer Engineering (CSPIT-CE)  
**University:** CHARUSAT  

---

## 1. Aim
To enhance the StudentHub responsive portal with interactive JavaScript DOM manipulation features (such as dynamic greeting banner, live search filtering, responsive navigation toggle, character counters, and modal notices) to improve user engagement and usability.

**Tools / Technology to be Used:** HTML5, CSS3, JavaScript ES6+ (DOM Events, `localStorage`, `sessionStorage`, Modal APIs).

---

## 2. Interactive Features Implemented in `script.js`

1. **Light / Dark Theme Switcher with `localStorage` Persistence**:
   - Toggles body class `light-theme` dynamically.
   - Updates theme icons and labels (`☀️ Light` / `🌙 Dark`).
   - Persists selected theme across browser refreshes using `localStorage.setItem('studenthub-theme', ...)`.

2. **Dismissible Session Notification Banner**:
   - Displays urgent campus notification (e.g. lab assignment deadline).
   - Dismissing the banner writes state into `sessionStorage`, ensuring it remains hidden for the active tab session.

3. **Highlights Auto-Slider**:
   - Automated carousel cycling through important academic highlights every 4 seconds.
   - Automatically pauses on mouse hover and resumes on mouse leave.
   - Interactive bullet indicator dots for manual slide switching.

4. **Campus Notice Modal Dialog**:
   - Accessible popup modal for viewing full announcement text.
   - Supports keyboard `Escape` key dismissal and backdrop click dismissal.

5. **Collapsible FAQ Accordion**:
   - Expanding and collapsing question answers with smooth height transitions.

6. **Live Navigation Table Search Filter**:
   - Instant real-time filtering of navigation rows as the user types into the search field.

---

## 3. Files in this Practical
- [`index.html`](index.html): Interactive portal page with theme toggles, modal dialog triggers, and banner elements.
- [`js/script.js`](js/script.js): Core DOM manipulation script implementing all interactive events.
- [`css/styles.css`](css/styles.css): Complete responsive CSS styling.
