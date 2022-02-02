<IfModule mod_rewrite.c>
    RewriteEngine on
    RewriteBase /
    RewriteCond %{HTTP_HOST} ^www.travelperm.000webhostapp.com
    RewriteRule (.*) https://travelperm.000webhostapp.com/$1 [R=301,L]
    RewriteCond %{THE_REQUES} ^[A-Z]{3,9}\ /index\.php\ HTTP/
    RewriteRule ^index\.php$ https://travelperm.000webhostapp.com/ [R=301,L]
</IfModule>
    
ServerSignature Off
AddDefaultCharset UTF-8
    
RewriteRule ^lions?$ lions.php [NC,L]
RewriteRule ^place?$ place.php [NC,L]
RewriteRule ^restaurant?$ restaurant.php [NC,L]
RewriteRule ^relax?$ relax.php [NC,L]

# HTID:5113116: DO NOT REMOVE OR MODIFY THIS LINE AND THE LINES BELOW
php_value display_errors 1
# DO NOT REMOVE OR MODIFY THIS LINE AND THE LINES ABOVE HTID:5113116: