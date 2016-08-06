#Laravel 5.2 


## HTTP Methods


## GET Method

A GET request retrieves data from a web server by specifying parameters in the URL portion of the request. 
This is the main method used for document retrieval. The following example makes use of GET method to fetch hello.htm:

 
    GET /hello.htm HTTP/1.1
    User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
    Host: www.test.com
    Accept-Language: en-us
    Accept-Encoding: gzip, deflate
    Connection: Keep-Alive


The server response against the above GET request will be as follows:

	HTTP/1.1 200 OK
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
	ETag: "34aa387-d-1568eb00"
	Vary: Authorization,Accept
	Accept-Ranges: bytes
	Content-Length: 88
	Content-Type: text/html
	Connection: Closed

	<html>
	<body>
	<h1>Hello, World!</h1>
	</body>
	</html>

## HEAD Method
	The HEAD method is functionally similar to GET, except that the server replies with a response line and headers, but no entity-body. The following example makes use of HEAD method to fetch header information about hello.htm:

	HEAD /hello.htm HTTP/1.1
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
	Host: www.test.com
	Accept-Language: en-us
	Accept-Encoding: gzip, deflate
	Connection: Keep-Alive

The server response against the ab
ove GET request will be as follows:

HTTP/1.1 200 OK
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
	ETag: "34aa387-d-1568eb00"
	Vary: Authorization,Accept
	Accept-Ranges: bytes
	Content-Length: 88
	Content-Type: text/html
	Connection: Closed
	You can notice that here server the does not send any data after header.

##POST Method

The POST method is used when you want to send some data to the server, for example, file update, form data, etc. The following example makes use of POST method to send a form data to the server, which will be processed by a process.cgi and finally a response will be returned:

	POST /cgi-bin/process.cgi HTTP/1.1
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
	Host: www.test.com
	Content-Type: text/xml; charset=utf-8
	Content-Length: 88
	Accept-Language: en-us
	Accept-Encoding: gzip, deflate
	Connection: Keep-Alive
	<?xml version="1.0" encoding="utf-8"?>
	<string xmlns="http://clearforest.com/">string</string>

The server side script process.cgi processes the passed data and sends the following response:

	HTTP/1.1 200 OK
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
	ETag: "34aa387-d-1568eb00"
	Vary: Authorization,Accept
	Accept-Ranges: bytes
	Content-Length: 88
	Content-Type: text/html
	Connection: Closed
	<html>
	<body>
	<h1>Request Processed Successfully</h1>
	</body>
	</html>

##PUT Method

The PUT method is used to request the server to store the included entity-body at a location specified by the given URL. The following example requests the server to save the given entity-boy in hello.htm at the root of the server:

	PUT /hello.htm HTTP/1.1
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
	Host: www.test.com
	Accept-Language: en-us
	Connection: Keep-Alive
	Content-type: text/html
	Content-Length: 182
	
	<html>
	<body>
	<h1>Hello, World!</h1>
	</body>
	</html>

The server will store the given entity-body in hello.htm file and will send the following response back to the client:

	HTTP/1.1 201 Created
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Content-type: text/html
	Content-length: 30
	Connection: Closed

	<html>
	<body>
	<h1>The file was created.</h1>
	</body>
	</html>


##DELETE Method

The DELETE method is used to request the server to delete a file at a location specified by the given URL. The following example requests the server to delete the given file hello.htm at the root of the server:

	DELETE /hello.htm HTTP/1.1
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
	Host: www.test.com
	Accept-Language: en-us
	Connection: Keep-Alive
	The server will delete the mentioned file hello.htm and will send the following response back to the client:

	HTTP/1.1 200 OK
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Content-type: text/html
	Content-length: 30
	Connection: Closed
	<html>
	<body>
	<h1>URL deleted.</h1>
	</body>
	</html>

##CONNECT Method

The CONNECT method is used by the client to establish a network connection to a web server over HTTP. The following example requests a connection with a web server running on the host tutorialspoint.com:

	CONNECT www.tutorialspoint.com HTTP/1.1
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)

The connection is established with the server and the following response is sent back to the client:

	HTTP/1.1 200 Connection established
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)


##OPTIONS Method

The OPTIONS method is used by the client to find out the HTTP methods and other options supported by a web server. The client can specify a URL for the OPTIONS method, or an asterisk (*) to refer to the entire server. The following example requests a list of methods supported by a web server running on tutorialspoint.com:

	OPTIONS * HTTP/1.1
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)

The server will send an information based on the current configuration of the server, for example:

	HTTP/1.1 200 OK
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Allow: GET,HEAD,POST,OPTIONS,TRACE
	Content-Type: httpd/unix-directory


##TRACE Method

The TRACE method is used to echo the contents of an HTTP Request back to the requester which can be used for debugging purpose at the time of development. The following example shows the usage of TRACE method:

	TRACE / HTTP/1.1
	Host: www.test.com
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)

The server will send the following message in response to the above request:

	HTTP/1.1 200 OK
	Date: Mon, 27 Jul 2009 12:28:53 GMT
	Server: Apache/2.2.14 (Win32)
	Connection: close
	Content-Type: message/http
	Content-Length: 39

	TRACE / HTTP/1.1
	Host: www.test.com
	User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)




##Laravel Routes

	Route::get($uri, $callback);
	Route::post($uri, $callback);
	Route::put($uri, $callback);
	Route::patch($uri, $callback);
	Route::delete($uri, $callback);
	Route::options($uri, $callback);


 In example

 	Route::get('/', function () {
    	return "This is GET Method";
	});
 	Route::get('/cal/sub/{num1}/{num2}','CalculatorController@substract');


