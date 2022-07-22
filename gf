#Rewrite URL's
RewriteEngine On
RewriteRule ^error/?$ errors/error.html [NC]

# Enable Error Documents
# (404,File Not Found) | (403,Forbidden) | (500,Internal Server Error)
ErrorDocument 404 /error
ErrorDocument 403 /error