Options -Indexes
ErrorDocument 402 /404.php
ErrorDocument 403 /blogger/404.php
ErrorDocument 404 /blogger/404.php
ErrorDocument 500 /blogger/404.php

RewriteEngine on
RewriteRule view.php$ index.php [L]
RewriteRule footer.php$ index.php [L]
RewriteRule css/header.php$ index.php [L]
RewriteRule index.html$ index.php [L]
RewriteRule index$ index.php [L]
RewriteRule article/$ articles.php [L]
RewriteRule contact/$ contact.php [L]
RewriteRule ^([^/.]+)/([^/.]+)\.html$ views.php?id=$1&title=$2 [L]
RewriteRule ^([^/.]+)-([^/.]+)\$ views.php?id=$1&title=$2 [L]
RewriteRule ^article/([^/.]+)$ articles.php?page=$1 [L]
RewriteRule ^category/([^/.]+)/([^/.]+)/$ articles.php?category=$1&label=$2 [L]
RewriteRule ^category/([^/.]+)/([^/.]+)/([^/.]+)$ articles.php?category=$1&label=$2&page=$3 [L]
Options All -Indexes