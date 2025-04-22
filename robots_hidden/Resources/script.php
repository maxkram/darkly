<?php

function getReadMe(string $baseUrl, array &$foundReadmes = []): void {
    $content = @file_get_contents($baseUrl);
    if ($content === false) {
        error_log("Failed to fetch URL: $baseUrl");
        return;
    }

    $regex = '/<a\s+href="([^"]+)"[^>]*>/i';
    preg_match_all($regex, $content, $matches);
    
    foreach ($matches[1] as $relativePath) {
        if ($relativePath === "../") {
            continue;
        }
        
        $fullUrl = rtrim($baseUrl, '/') . '/' . ltrim($relativePath, '/');
        
        if (strtoupper($relativePath) === 'README') {
            $readmeContent = trim(@file_get_contents($fullUrl));
            if ($readmeContent !== false && !isset($foundReadmes[$readmeContent])) {
                echo "$fullUrl => $readmeContent\n";
                $foundReadmes[$readmeContent] = true;
            }
        } else {
            getReadMe($fullUrl, $foundReadmes);
        }
    }
}

echo "Enter the server IP address (e.g., 10.39.42.166): ";
$ip = trim(fgets(STDIN));

if (!filter_var($ip, FILTER_VALIDATE_IP)) {
    die("Invalid IP address format.\n");
}

$results = [];
getReadMe("http://$ip/.hidden/", $results);
?>