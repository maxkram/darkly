# 🔑 Brute Force – Sign-In Page – MEMO

## 📌 Breach Summary
The sign-in form on the Darkly website lacks basic protections against **brute force attacks**, such as rate limiting or CAPTCHA. Attackers can automate login attempts using common username and password combinations until access is gained.

This exposes the site to unauthorized access, especially if default or weak credentials are used.

---

## ✅ Step-by-Step Exploitation

### 0 To check for the beginning
https://work2go.se/en/news/the-25-most-common-passwords/ Google something like 'top most common passwords'

### 1. 🔍 Locate the Login Page
Visit:
```text
http://<target-ip>//?page=signin
```
You’ll find a username and password form.

### 2. 🧪 Try Common Credentials
Test weak/default combinations manually:
- admin/admin
- user/password
- root/root
- ### root / shadow

### 3. 🤖 Automate the Attack
In real life we could use a tool like `hydra`, `wfuzz`, or a simple Python script:
```bash
hydra -l admin -P /usr/share/wordlists/rockyou.txt http-post-form "/signin:username=^USER^&password=^PASS^:Invalid" -t 4
```
- Adjust parameters based on the form structure.

### 4. ✅ Confirm Access and Retrieve Flag
Once login is successful:
- You’ll access the dashboard or admin area.
- Retrieve the flag displayed post-login.

---

### 📝 Sample walkthrough.txt

```text
1. Accessed /signin and tried common usernames manually
2. Cracked login for user 'root'
3. Logged in successfully and retrieved the flag
```

---

## 💬 What to Say During Evaluation

- Explain what brute force is and why rate limiting, lockouts, or CAPTCHAs are needed.
- Show how you structured and launched the automated attack.
- Highlight that weak credentials are often the first security gap.

---

## 📚 References

- OWASP A2: Broken Authentication
- [Hydra Documentation](https://github.com/vanhauser-thc/thc-hydra)
- Tools used: browser, hydra, rockyou.txt

✅ Practice the manual steps and explain how automated attacks exploit this vulnerability.