---

## 🗂️ Hidden Directory – Web Scraping & Enumeration

### 📌 Breach Summary
The application contains sensitive files and directories that are not linked on the website but are still accessible by direct URL access. These directories can often be discovered via `robots.txt`, brute-force enumeration, or manual directory scraping.

This is an **Information Disclosure** vulnerability that relies on improper server-side access restrictions or indexing.

---

### ✅ Step-by-Step Exploitation

#### 1. 🔍 Check robots.txt
Visit:
```text
http://<target-ip>/robots.txt
```
Look for entries like:
```
Disallow: /.hidden/
```

#### 2. 📂 Access Hidden Directory
Navigate directly to:
```text
http://<target-ip>/.hidden/
```

#### 3. 🕸️ Use a Spider or Manual Scraping (well, there're 17000 of them, actually)
Use the script and wait, it could be 20 min

#### 📝 Sample walkthrough.txt

```text
1. Visited http://<target-ip>/robots.txt and found a disallowed /.hidden/
2. Run the script with 'php script.php'
3. Discover the flag
```

---

### 💬 What to Say During Evaluation

- Explain that sensitive directories should be protected by access controls, not obscurity.
- Mention that `robots.txt` is for search engines and should not contain paths to sensitive content.
- Demonstrate how you enumerated or discovered the path and retrieved the flag.

---

### 📚 References

- OWASP A6: Security Misconfiguration
- Tools used: Browser, `gobuster`, `curl`

✅ **Make sure your discovery is reproducible and your notes clearly explain each step.**