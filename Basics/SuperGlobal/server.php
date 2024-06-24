<?php
// server.php
// This file is used to handle the server side of the application
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
// The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.
// $_SERVER['PHP_SELF'] returns the filename of the currently executing script
echo $_SERVER['PHP_SELF'];
echo "<br>";
// $_SERVER['SERVER_NAME'] returns the name of the host server
echo $_SERVER['SERVER_NAME'];
echo "<br>";
// $_SERVER['HTTP_HOST'] returns the Host header from the current request
echo $_SERVER['HTTP_HOST'];
echo "<br>";

/*The Host header is a part of the HTTP request sent by the client (usually a web browser) to the server. It specifies the domain name or IP address of the server that the client wants to communicate with.

In the context of the code you provided, $_SERVER['HTTP_HOST'] retrieves the value of the Host header from the current request. This allows you to access the domain name or IP address of the server that is handling the request.

For example, if a user visits your website at http://example.com, $_SERVER['HTTP_HOST'] will contain the value "example.com". This information can be useful for various purposes, such as generating dynamic URLs or determining the domain name of the server for further processing.
*/
// $_SERVER['HTTP_USER_AGENT'] returns the user agent of the user
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";