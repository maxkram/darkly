# 🔀 Open Redirect Vulnerability – MEMO

## 📌 Breach Summary
The Darkly website is vulnerable to **Open Redirects**, where a user can be redirected to an external and potentially malicious site by manipulating a URL parameter. This occurs due to insufficient validation of redirection targets.

Such vulnerabilities are often abused in phishing campaigns and can harm user trust.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Locate the Vulnerable Endpoint
- Find a page with a redirect parameter, commonly like:
  ```
  http://<target-ip>/redirect?url=http://example.com
  ```

### 2. 🧪 Test Redirection
- Replace `url=` value with a malicious or unexpected domain:
  ```
  http://<target-ip>/index.php?page=redirect&site=admin
  ```
- If the server redirects without validation, the vulnerability is confirmed.


## 💬 What to Say During Evaluation

- Explain the risks of open redirects (phishing, social engineering, user trust loss).
- Mention that redirect destinations should be whitelisted or validated against allowed domains.
- Demonstrate the redirect and show how it's abused.

---

## 📚 References

- OWASP A10: Unvalidated Redirects and Forwards
- [OWASP Open Redirect Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html)

✅ Be prepared to reproduce the redirect and explain why it's insecure.