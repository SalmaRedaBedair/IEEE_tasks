# How the web works
- ## what happen when you visit a website
  1- url gets resolved

  2- request is sent to server

  3- response is parsed

  4- page is rendered and displayed
  
- ## 1- url gets resolved
  - the browser sends a request to server with the ip address of website 
  - lets understand that ``academind.com/learn`` that is the URL which consists of domain name and path
    - ``academind.com``: domain name
    - ``/learn``: path
    - you can also enter it as ``www.academind.com/learn``, ``www``: is subdomain
    - that step ends when we know the ip address
- ## 2- request is sent to server
  - browser make a request to the server with that ip
  - the request is sent to server as HTTP request, it contains the type of method(get or post) and which data maybe included and also headers that provide additional information about the request
  - ## what happens on the server
    - When the server receives the request, it processes it and generates a response. The response includes not only the requested data, but also headers that provide additional information about the response. For example, the headers may include information about the content type, the length of the response, and whether the response can be cached
    - response doesn't have to contain a website, it can contain any data including files and images
    - some servers are programmed to generate website dynamically based on the request 
    - othe severs return pre-generated web pages
- ## 3- response is parsed
  - browser parses the responce as the server did in the request
  - browser checks the data and metadata and decide what to do based on it
  - the browser render the data, The rendering process involves interpreting the HTML, CSS, and JavaScript code and displaying the content on the screen.
  -  ## meta-data
     - when you request pdf from ``academind.com``, it is not return to you as pdf because we don't support this type of data for that specfic URL(``academind.com``)
