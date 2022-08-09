<?php
// Magic constants
// change the value basing on excuations 
echo __DIR__.'<br>';//which directory file in
echo __FILE__.'<br>';//which files 
//echo __LINE__.'<br>';//how many lines


// Create directory
///mkdir('test');

// Rename directory
//rename('test','test1');
// Delete directory
//rmdir('test1');

// Read files and folders inside directory
echo file_get_contents('lorem.txt');
//lsit the dictory ..pre . now
$files=scandir('./');
echo '<pre>';
var_dump($files);

echo '</pre>';
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
//create folder and put contents
echo file_put_contents('sample.txt','some content');
/// file_get_contents from URL
//$usersJson=file_get_contents('https://jsonplaceholder.typicode.com/users');
///echo $usersJson;
//DECODE JSON INTO AN ARRAY associated array into objectives, with key value pairs 
//$users=json_decode($usersJson);
//echo '<pre>';
//var_dump($users);
//echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt');//true here
// is_dir
is_dir('test');//false here
// filemtime

// filesize
// disk_free_space
// file