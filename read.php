<?php
$connect = new MongoClient("mongodb://admin:nhsadmin@ds147995.mlab.com:47995/centurynhs");
$db = $connect->centurynhs;
$collection = $db->photos;

$photo_name = $_GET['photo'];

$cursor = $collection->find(array("type" => 'photo'));

if(empty($cursor)){
    echo "Empty";
}

?>
<table class="table">
    
<?php
foreach ($cursor as $document) {
    echo "<tr><td>";
    $photoData = $document['photo'];
    //$decode = base64_decode($photoData);
    header('Content-type: image/jpeg');
    //echo $decode;
    echo $photoData;
    echo "</td></tr>";
}

?>
    
</table>