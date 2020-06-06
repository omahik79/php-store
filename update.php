
<?php

    $hostname='localhost';
    $username='omar';
    $password='hilavila';

    try {

$pdo = new PDO("mysql:host=$hostname;dbname=samsung_tv",$username,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$doc_id = $_POST["name"];
$doc_id1 = $_POST["name1"];
$doc_id2 = $_POST["name2"];
$doc_id3 = $_POST["name3"];

$stmt = $pdo->prepare('UPDATE tv SET tv_type = ?, tv_details = ?, tv_price = ? WHERE tv_type =?' );
$stmt->execute([$doc_id1,$doc_id2,$doc_id3,$doc_id]);
        echo "record updated successfully....return back to update more field";
}
 

catch(PDOException $e)
{
echo $e->getMessage();
}

?>

