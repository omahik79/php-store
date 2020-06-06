
<?php

    $hostname='localhost';
    $username='omar';
    $password='hilavila';

    try {

$pdo = new PDO("mysql:host=$hostname;dbname=samsung_tv",$username,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$doc_id = $_POST["name"];

$stmt = $pdo->prepare("DELETE FROM tv WHERE tv_price = ?");
$stmt->execute([$doc_id]);
        echo "record deleted successfully....return back to delete more field";
}
 

catch(PDOException $e)
{
echo $e->getMessage();
}

?>

