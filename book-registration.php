<?php


$book=stripslashes(trim($_POST['book_name']));
$author=stripslashes(trim($_POST['book_author']));

//$sbook=mysqli_real_escape_string($book);
//$sauthor=mysqli_real_escape_string($author);
function book ($book,$author){

if ((empty($book) || empty($author)) || ((int)($author))) {
		header("Content-Type:application/json");
		header("HTTP/1.0 400 Bad Request");
		$status = array();
		$message= "the book was not registered";
		$status["error"]["message"] = $message;
}

else {
	header("Content-Type:application/json");
	header("HTTP/1.0 201 Created");
	$status = array();
	$status["book"]["name"] = $book;
	$status["book"]["author"] = $author;

}
$jstatus=json_encode($status);
return $jstatus;
};

//print_r($status);

$jstatus=book($book,$author);
//echo "$jstatus";





?>