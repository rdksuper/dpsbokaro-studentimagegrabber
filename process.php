<!DOCTYPE HTML>
<HTML LANG = "EN">
<BODY>
    <div class = "main">
        <img class  = "img" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQZPS3qcb500ScF2XCPLMBUliOd4ItDhcg_S1Z2QGMdRztUxEVDA" align = "left">
        <h1>
     WELCOME TO DPS BOKARO IMAGE PORTAL .... MADE BY RDKSUPER &copy;; 
 </H1> 
 <p>  
 <div class   = "box">
<?php  

$id   =   $_POST['id'] ; 
$path  =  'http://dpsbokaro.net/sopanschool2.0/uploads/' ; 
$ext  = '.jpg' ; 

//The resource that we want to download.
$fileUrl = "$path$id$ext";
 
//The path & filename to save to.
$saveTo = "$id.jpg";
 
//Open file handler.
$fp = fopen($saveTo, 'w+');
 
//If $fp is FALSE, something went wrong.
if($fp === false){
    throw new Exception('Could not open: ' . $saveTo);
}
 
//Create a cURL handle.
$ch = curl_init($fileUrl);
 
//Pass our filehandle to cURL.
curl_setopt($ch, CURLOPT_FILE, $fp);
 
//Timeout if the file doesn't download after 20 seconds.
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
 
//Execute the request.
curl_exec($ch);



//If there was an error, throw an Exception
if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}
 
//Get the HTTP status code.
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 
//Close the cURL handler.
curl_close($ch);
 
if($statusCode == 200){
    echo 'Downloaded!';
} else{
    echo "Status Code: " . $statusCode;
}

echo '<img src="' . $saveTo . '">';
echo '<P>' ; 
echo 'YOUR STUDENT ID  IS   ' . '<b>'.$id . '</b>' ;  
echo 'your image has been downloaded to this server !!!' ; 
echo 'right click save as to download' ; 
?>

 </div>

</div>
 <style>


 div.box  {
     padding-top:100px;
     width:40%;
     height:50%;
     overflow:auto;
     margin-left:auto ;
    margin-right:auto;
    text-align: center; 

 }

 div.main   H1 {
     text-align: center;
     text-decoration:bold underline ; 
     text-emphasis: none;
     margin-left:auto;
     margin-right:auto; 


 }

 div.main {
     border: 25px solid green ;
 }

.img {
    height:50%;
    padding:30px  40px ; 
 

}


div.box  img {

    width:300px ;
    height:300px ; 
    border: 5px solid black ; 
    }
 </style>

 </BODY>  
 
</HTML>
