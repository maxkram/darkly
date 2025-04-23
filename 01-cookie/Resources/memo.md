# 🍪 Insecure Cookie / Admin Forged Cookie – MEMO

## 📌 Breach Summary

This vulnerability arises from insecure or predictable use of cookies for access control. In this case, the application sets a cookie to identify admin users without verifying it securely. If you modify the cookie value manually, you can elevate your privileges and access the admin area.

---

## ✅ Step-by-Step Guide

### 1. 🌐 Navigate to the Home Page
- Open: `http://<target-ip>/`
- You will be greeted by the default site, possibly with a “Welcome” message.

### 2. 🍪 Inspect Cookies
- Open **Developer Tools** (F12 in browser)
- Go to the **Application** tab → **Cookies**
- Check the cookies for the website. Look for missing flags:
- HttpOnly: Prevents JavaScript access.
- Secure: Ensures the cookie is only sent over HTTPS.
- SameSite: Prevents cross-site request forgery (CSRF).
- If any flag is missing, note it as a vulnerability.
- Locate a cookie, usually named:
  - `Admin`, `admin`, `is_admin`, or similar

### 3. ✍️ Modify the Cookie

- 'i_am_admin' cookie: 68934a3e9455fa72420237eb05902327
- Google the value and change to the opposite (from false to true),
- insert and get the flag

### 4. 💬 What to Say During Evaluation

- Explain what cookies are and how they’re used for sessions or user roles.
- Describe the insecure design: trust placed on client-side cookie without server-side validation.
- Mention this is a typical Access Control vulnerability (e.g., OWASP A5: Broken Access Control).
- Show how you identified and altered the cookie.
- Explain what flag/resource became available.

### 5. 📚 References
- OWASP A5: Broken Access Control
- Developer Tools (Chrome, Firefox)
- Tools used: Browser only, optionally curl or Burp Suite for automation