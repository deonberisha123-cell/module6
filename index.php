<?php

$my_file = fopen("ds.txt","w");//write only
// $my_file = fopen("ds.txt","r");//read only
// $my_file = fopen("ds.txt","a");//write only shtohet ne fund te file
// $my_file = fopen("ds.txt","w+");//read only + write only
// $my_file = fopen("ds.txt","x");//krijohet file i ri per write only

// $myfile = fread("$myfile", filesize("$myfile"));

// $teksti = "Digital school";

// fwrite($my_file , $teksti);

// fclose($my_file);

// $text = fopen("file.txt" , "w");

// fclose($text);

// file_put_contents("new.txt", $teksti);
// echo file_get_contents("new.txt");

//metoda 1


$animals = ["dog","cat","bird","turtle","rabbit"];

file_put_contents("animal.txt", $animals);
echo file_get_contents("animal.txt");



//metoda 2

// $file = fopen("lista.txt", "w");
// for($i=0;$i<count($kafshet); $i++){
//     fwrite($file,$kafshet[$i]. "<br>"); 
// }
// fclose($file);

// echo file_get_contents("lista.txt");

?>