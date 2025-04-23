## 1
Go to http://{some_ip}/index.php?page=feedback

## 2


## 🗨️ 4. XSS (Stored) – Feedback Page

### 📌 Breach Summary
The Feedback page of the Darkly site fails to sanitize user input, allowing attackers to inject scripts that are stored in the database and executed when others view the feedback. This is a **Stored Cross-Site Scripting (XSS)** vulnerability and one of the most dangerous types of XSS due to its persistent nature.

---

### ✅ Step-by-Step Exploitation

#### 1. 📝 Locate the Feedback Form
- Go to `http://{some_ip}/index.php?page=feedback` or find the feedback section on the homepage.
- Look for a form allowing users to leave comments or messages.

#### 2. 💉 Inject a Script as Feedback
Example payload:
<script>alert('XSS')</script>
Submit the form with this payload in the message or comment field.
- OR -
use 'r' and 'n' for the fields. The flag appears

#### 3. 👀 View Stored Feedback
Reload the feedback viewing page (or wait for an admin to review the comment).
If a popup appears, the XSS injection was successful.

### 💬 What to Say During Evaluation
- Explain that XSS occurs when user input is not sanitized or escaped before rendering in HTML.
- Clarify the difference between stored, reflected, and DOM-based XSS.
- Mention how an attacker could steal cookies, impersonate users, or launch phishing attacks.
- Walk through your payload and how it demonstrated the issue.

📚 References
- OWASP XSS Guide
- OWASP Top 10: A3 – Cross-Site Scripting
- Tools used: Browser, Developer Tools