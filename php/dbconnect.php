<?php
$connect = new MongoClient("mongodb://admin:nhsadmin@ds147995.mlab.com:47995/centurynhs");
$db = $connect->centurynhs;
//$collection = $db->photos;
//if($db){
//    echo "success";
//}
//else {
//    echo "fail";
//}
//$doc = array(
//    "photo_id" => $id,
//    "name" => "test",
//    "photo" => "hello"
//);
//$collection->insert( $doc );

//$cursor = $collection->find(array("photo_id" => 1));
//foreach ($cursor as $document) {
//    print_r($document);
//}

?>