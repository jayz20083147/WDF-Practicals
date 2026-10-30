# Practical-03: Responsive UI Design with Shared External CSS

**Student Name:** Jay Zalavadiya  
**Student ID:** 25CE142  
**Subject:** Web Development Frameworks (ITUE203)  
**Department:** Computer Engineering (CSPIT-CE)  
**University:** CHARUSAT  

---

## 1. Aim
To design a responsive user interface for the StudentHub web application using HTML5 and a shared external CSS file (`style.css`) so that the same pages adapt gracefully to desktop, tablet, and mobile screen sizes.

**Tools / Technology to be Used:** HTML5, CSS3 (Flexbox, Grid, CSS Variables, Media Queries), Chrome DevTools Device Emulation.

---

## 2. Core Concepts & Features

1. **Responsive Viewport Meta Tag**:
   `<meta name="viewport" content="width=device-width, initial-scale=1.0">` ensures the layout scales correctly to the hardware pixel density of any device.
2. **Modern CSS Theme**:
   - Modern glassmorphism palette using CSS custom properties (`:root`).
   - Sticky navigation bar with `backdrop-filter: blur(18px)`.
   - Subtle animated gradient orbs using CSS `@keyframes drift`.
3. **Responsive Table & Card Layouts**:
   - Feature navigation table linking all StudentHub modules.
   - Interactive button hover transformations (`translateY`, gradient shift, glow shadow).
   - Fluid typography and responsive padding using media queries (`@media (max-width: 768px)`).

---

## 3. Files in this Practical
- [`index.html`](index.html): Central responsive portal navigation dashboard.
- [`css/styles.css`](css/styles.css): Shared external CSS stylesheet with variables and media queries.
- [`style.css`](style.css): Root-level copy ensuring direct link compatibility.
