# 📁 Path Traversal / Local File Inclusion (LFI) – MEMO

## 📌 Breach Summary
The Darkly website includes a file based on a user-supplied parameter, without proper validation or sanitization. This leads to a **Path Traversal / Local File Inclusion (LFI)** vulnerability, allowing access to sensitive server files (e.g., `/etc/passwd`) or source code.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Locate the File Include Feature
Visit a URL such as:
```
http://<target-ip>/page?file=home
```
This parameter loads the content of `home.html` or similar files.

### 2. 💉 Inject Path Traversal Payload
Try replacing the parameter with:
```
http://<target-ip>/?page=../../../../../../../etc/passwd
```

### 📝 Sample walkthrough.txt

```text
1. Visited /page?file=home and identified file inclusion behavior
2. Changed file parameter to http://<target-ip>/?page=../../../../../../../etc/passwd
3. Server returned alert of /etc/passwd — confirmed path traversal
4. Retrieved the flag from a sensitive file
```

---

## 💬 What to Say During Evaluation

- Explain how file inclusion works and why user input should never be directly used in file paths.
- Demonstrate your payload and explain why it succeeded.
- Highlight the impact: disclosure of credentials, source code, or OS-level files.

---

## 📚 References

- OWASP A5: Security Misconfiguration
- OWASP Path Traversal Guide: https://owasp.org/www-community/attacks/Path_Traversal
- Tools used: browser, manual crafted URLs

✅ Practice reproducing this locally and explaining each step during your project defense.