<?php

//interactive with other servers 
$url = 'https://jsonplaceholder.typicode.com/users';

/*
// Sample example to get data.
$resource=curl_init($url);
//set the option for resource
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true);
//excuted it
$result=curl_exec($resource);
//get the info
//$info=curl_getinfo($resource);
//response codes CURLINFO_HTTP_CODE
$code=curl_getinfo($resource,CURLINFO_HTTP_CODE);

echo '<pre>';
var_dump($code);
echo '</pre>';
curl_close($resource);
echo $result;
*/


// Get response status code

// set_opt_array

// Post request
//getting user api
$user=[
    'name'=> 'Leanne Graham',
     "username"=> "Bret", 
     'email'=> 'Sincere@april.biz'
];


$resource= curl_init();
curl_setopt_array($resource,[
    CURLOPT_URL=>$url,
    CURLOPT_RETURNTRANSFER=>TRUE,
    CURLOPT_POST=>TRUE,
    //tell api the type is json
    CURLOPT_HTTPHEADER=>['Content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)]);

//call curl 
$result=curl_exec($resource);
curl_close($resource);
echo $result;
