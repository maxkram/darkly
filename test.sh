wget -q -e robots=off -r -nH --no-parent --reject="index.html*" 'http://10.39.42.166/.hidden/' ## Update with your ip address
filepath=$(eval "find .hidden -name "README" -exec grep -l -e '[0-9]' {} +")
cat $filepath
rm -rf .hidden