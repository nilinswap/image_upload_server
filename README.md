# image_upload_server

## Synopsis
It is an image **upload-download server** application. It is equipped with **user registration** system.It uses
**PHP** and **MySQL** at backend. For frontend I did not do much work, just picked up a template ( frontend was not part of my agenda).
## Walkthrough
The main page is having a dashboard with multiple images( uploaded by users). To upload an image a user has to login.
there attached is a small link to download.
## To run
# download 
this repo and rename it to say X, 
# import database 
1. by simply running ` mysql> source dbfile.sql` after having logged in to your mysql account
# making server
store this repo X in root of your server
if apache server is there,type in terminal
`sudo service apache2 restart`
and just `open domainname/X/` on browser

# run server
if apache server is there,type in terminal
'sudo service apache2 restart'
## Extension
Looking to attach a 'like' feature as there is in instagram.


