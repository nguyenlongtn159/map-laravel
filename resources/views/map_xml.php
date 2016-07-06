<?php


// Select all the rows in the markers table
$connection = new PDO('mysql:host=localhost; dbname=test','root','');
$connection->query('set names "utf8"');
$query = $connection->query('SELECT * FROM `maps` WHERE true', PDO::FETCH_ASSOC);

$dom = new DOMDocument("1.0", 'UTF-8');
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$xmlRoot = $dom->createElement("xml");


header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

foreach($query as $row){



    // ADD TO XML DOCUMENT NODE
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);

}
$content = $dom->saveXML();
echo $dom->saveXML();
File::put(storage_path().'file.xml', $content);
?>