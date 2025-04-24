# 📩 Hidden Input Manipulation – Memo

## 📌 Breach Summary
The password recovery or email-sending form on the Darkly website includes a **hidden HTML input field** that is insecurely trusted by the backend. By modifying this field’s value in the browser, an attacker can alter the behavior of the form (e.g., change the recipient email, privilege level, or trigger hidden actions).

This results in **parameter tampering** and **sensitive data exposure**.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Locate the Form with a Hidden Field
Visit:
```text
http://<target-ip>/?page=recover
```
Inspect the HTML form using **Developer Tools**.

Look for hidden inputs such as:
```html
<input type="hidden" name="mail" value="webmaster@borntosec.com" maxlength="15">
```

### 2. 🛠️ Modify the Hidden Input
Modify an email field to send to your own address:
```html
<input type="hidden" name="email" value="attacker@example.com" />
```

### 3. 📩 Hit the Submit button
- If a flag or sensitive response appears, the server is using this input without validation.

---

### 📝 Sample walkthrough.txt

```text
1. Opened the /recover form and inspected it using browser dev tools
2. Found a hidden field: <input type="hidden" name="mail" value="webmaster@borntosec.com" maxlength="15">
3. Changed value to "mu@ha.ha", submitted the form
4. Received elevated access or flag
```

---

## 💬 What to Say During Evaluation

- Explain that hidden fields are client-side and should never be trusted by the server.
- Show how you identified and modified the field.
- Emphasize the need for server-side validation and the risks of exposing sensitive logic in HTML.

---

## 📚 References

- OWASP A3: Sensitive Data Exposure
- OWASP: [Hidden Field Manipulation](https://owasp.org/www-community/attacks/Hidden_Field_Manipulation)
- Tools used: browser developer tools

✅ Make sure to show your modifications live and explain the backend trust issue clearly.