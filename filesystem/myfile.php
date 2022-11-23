<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(is_file("readme.txt")){
    echo "Yes it is file.";

}
else{
    echo "No it is not a file.";
}






















// $file = "readme.txt";

// $file = fopen("readme.txt","r");
// // echo fread($file,filesize("readme.txt"))

// echo fgets($file);
// echo ftell($file);
// fseek($file,2);
// echo "<br>" . fgets($file)




// echo filesize($file);
// echo filetype($file);
// echo realpath($file);


//  $path = realpath($file);

// echo "<pre>";
// print_r(pathinfo($path,PATHINFO_EXTENSION));
// print_r(pathinfo($path,PATHINFO_DIRNAME));
// print_r(pathinfo($path,PATHINFO_BASENAME));
// echo "</pre>";










// if(file_exists($file))
// {
//     mkdir("Textfiles");
 


// }else{
//     echo "Folder already exist";
// }


// if(file_exists($file))
// {
//     echo readfile("readme.txt");
//     // echo copy($file,"target.txt");
//     //  echo rename($file,"readme.txt");
 


// }else{
//     echo "File does not exist";
// }
// unlink("target.txt");   For the file from server.
?>