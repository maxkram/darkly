# darkly

## 1. Understand the Project Scope

The Darkly project involves auditing a simple website hosted on a virtual machine (VM) to identify and exploit 14 specific vulnerabilities (breaches). These vulnerabilities are common in web applications, such as SQL injection, cross-site scripting (XSS), and password cracking, as noted in repositories like anyaschukin/Darkly. The project is divided into:

**Mandatory Part:** Find and exploit 14 breaches, documenting your approach without using automated tools like sqlmap.
**Bonus Part:** Provide advanced explanations for notable breaches, evaluated only if the mandatory part is flawless.
**Evaluation:** You must explain your exploits clearly and may need to demonstrate or fix them during a peer review.
The website is accessed via a provided IP address on a VM running an i386 architecture, as specified in the document.

## 2. Set Up the Environment

**Configure the Virtual Machine**
Use VirtualBox. Get the ISO from the project 42 page. Create VM with New and insert the ISO. Go to the settings and use Bridged Adapter in the Network (check the screenshots). Boot the new VM and use the IP address from the front page.

## 3. OWASP Guidelines Top 10

- Broken Access Control
- Cryptographic Failures
- Injection (SQL, Command, etc.)
- Insecure Design
- Security Misconfiguration
- Vulnerable and Outdated Components
- Identification and Authentication Failures
- Software and Data Integrity Failures
- Security Logging and Monitoring Failures
- Server-Side Request Forgery (SSRF)