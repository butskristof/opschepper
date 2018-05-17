# Opschepper 

## Introduction 
This is a website for a young startup battling food waste. 

## Technical 
This website uses elements from the HTML5 boilerplate, to which the Bootstrap 4 framework was added. HTML5 and CSS3 design principles were taken into account as much as possible.  
Server-side, the Plates framework is used for templating. The website is designed to run on an Apache server, hence the `.htaccess` file.  
The contact form uses PHPMailer to provide secure mailing over SMTP, which helps with the mails not being perceived as spam by spam filters and mail clients. The configuration details are read in from a non-public folder above the web root. 