# 🔐 .htpasswd Admin Authentication Breach – MEMO

## 📌 Breach Summary

This vulnerability exploits exposed `.htpasswd` and `.htaccess` mechanisms to access a restricted admin area. The key idea is to find hidden files that reveal access credentials or paths to protected directories.

## ✅ Step-by-Step Guide

### 1. 📄 Check `robots.txt`
- Visit: `http://<target-ip>/robots.txt`
- Look for **disallowed** paths (commonly: `/admin`, `/hidden`, or similar).

### 2. 📁 Directory Brute-force (Optional but helps)

go to http://{ip}/robots.txt and find 2 directories: whatever and .hidden
check http://{ip}/whatever and find the 'htpasswe' inside of it
the file contains some info, 'root:437394baff5aa33daa618be47b75cb49'
google it and find that's md5 hash for 'qwerty123@'

### 3. 🔍 Try Accessing the `/admin` Page
- Navigate to: `http://<target-ip>/admin`
- Use 'root' and 'qwerty123@' to log in the flag is inside

### 3. 💬 What to say during the evaluation
- Explain .htpasswd purpose (basic HTTP auth).
- Show how you discovered the restricted path (robots.txt).
- Justify why downloading .htpasswd is a misconfiguration.
- Explain hash cracking method (tool + wordlist).
- Show final result and how you got the flag.

### 4. 📚 References
- OWASP A2: Broken Authentication
- Apache .htpasswd + .htaccess docs
- Tools used: curl, john, gobuster, rockyou.txt