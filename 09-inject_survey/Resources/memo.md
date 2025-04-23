# 📋 Parameter Tampering – Survey Form – MEMO

## 📌 Breach Summary
The Darkly survey page allows users to vote by selecting a value from a dropdown menu. However, the server fails to validate that the submitted value matches the provided options. This makes it vulnerable to **parameter tampering**, where a user can submit arbitrary values by modifying the HTML or using browser developer tools.

This allows unauthorized manipulation of survey results or potential flag retrieval.

---

## ✅ Step-by-Step Exploitation

### 1. 🔍 Locate the Survey Page
Visit:
```text
http://10.39.42.166/?page=survey
```
You’ll see a form with a dropdown list of predefined answers.

### 2. 🛠️ Intercept or Modify Form Submission
- on the page put the pointer to a grade, right button, 'inspect',
change the value from '10' to bigint (10000000000000), then select it
(<option value='10'>10</option)

### 📝 Sample walkthrough.txt

```text
1. Opened /survey and inspected the HTML form
3. Submitted the form with tampered input
4. Received flag in the server response
```

---

## 💬 What to Say During Evaluation

- Explain what parameter tampering is and how form values can be manipulated client-side.
- Clarify that lack of server-side validation is the core issue.
- Show the tampered input and how the server responded incorrectly.

---

## 📚 References

- OWASP A5: Security Misconfiguration
- OWASP: [Tampering Cheat Sheet](https://owasp.org/www-community/attacks/Parameter_Tampering)
- Tools used: browser dev tools, optional Burp Suite

✅ Be ready to show both the modified HTML and the intercepted request during defense.