# HTTP
- it is statless 
- every reuest is independent (every request is a single transaction)
## HTTPS
- all data are encripted by SSL or by TSL
- we should use it for data which is important like cridit card for example
- alot of webssites uses HTTPS for all of their pages which is a unnessary and slow down our website, they did it by download SSL certificate in the website host, but take care it is recommended to use it for all of our pages
- Using HTTPS for all pages ensures that all data transmitted between the user's browser and the web server is encrypted and secure. It also helps prevent man-in-the-middle attacks and other security vulnerabilities.
## methods attached to requests
- ## GET
  - it is used when you want to fetch data or sent data to the server 
  - every time you visit a web page you make a get request to the server
- ## POST
  - it is used when you post data or adding some thing to the server or adding resources
- ## PUT
  - used to update data that is already in the server
- ## DELETE
  - delete data from the server
## HTTP/2
- it make the web applications faster and reduce load on the server
- improve performance of the web applicatons by improving efficiency of data tranfer
- allows multiple responces and requests at the same time, which requce number of times the page reloaded
- allow server to push reseources to the client before they are requested 
- use binsry format for data transfer
## which one is sported with our servers
- most modern web servers supports both 