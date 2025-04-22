## 1
go to http://{ip}/robots.txt and find 2 directories: whatever and .hidden
check http://{ip}/whatever and find the 'htpasswe' inside of it
the file contains some info, 'root:437394baff5aa33daa618be47b75cb49'
google it and find that's md5 hash for 'qwerty123@'
go to http://{ip}/admin and use 'root' and 'qwerty123@' to log in
the flag is inside
