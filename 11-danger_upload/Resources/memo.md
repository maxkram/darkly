# 📤 Unrestricted File Upload – MEMO

## 📌 Breach Summary
The Darkly application allows file uploads without properly validating the file type, extension, or content. This opens the door to **Unrestricted File Upload** attacks, including uploading executable scripts disguised as media files (e.g., PHP inside a `.jpg`).

This can lead to remote code execution, defacement, or data theft.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Locate the Upload Form
Visit:
```text
http://<target-ip>/?page=upload
```
You’ll see a form prompting you to upload a file.

### 2. ✅ Execute The Script

If executed as PHP:
use the script like './script.sh'
it'll show a lot of info in the terminal. The line with 'The flag is' contains the flag

---


### 📝 Sample walkthrough.txt

```text
1. Found file upload form at /upload
2. run the script
```
The script create fake jpg with php and get the flag
---

## 💬 What to Say During Evaluation

- Explain how server-side validation is critical for uploads.
- Show that MIME type, extension, and file content were not properly validated.
- Discuss potential impacts: RCE, defacement, data exfiltration.

---

## 📚 References

- OWASP A6: Security Misconfiguration
- OWASP Unrestricted File Upload: https://owasp.org/www-community/vulnerabilities/Unrestricted_File_Upload
- Tools used: text editor, browser, optional Burp Suite

✅ Be ready to demonstrate the upload, confirm execution, and explain remediation.