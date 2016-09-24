<?php
$connect = new MongoClient("mongodb://admin:nhsadmin@ds147995.mlab.com:47995/centurynhs");
$db = $connect->centurynhs;
$collection = $db->photos;

if(isset($_POST['submit'])){
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "images/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file
                    
                    $readFile = file_get_contents($filePath);
                    $encode = base64_encode($readFile);
                    
                    $id = uniqid();
                    $doc = array(
                        "photo_id" => $id.$i,
                        "name" => $shortname,
                        "photo" => $encode
                    );
                    $collection->insert( $doc );
                    $file = fopen("../photo.txt","a");
                    $txt = "\n".$shortname."\n";
                    fwrite($file, $txt);
                    fclose($file);

                }
              }
        }
    }

    //show success message
    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
    echo "<h1>ALL UPLOADS ARE FINAL</h1>";
}
?>