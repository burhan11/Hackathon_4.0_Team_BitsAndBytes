<?php
$book_name=$_GET["p"];
$servername = "localhost";
$username = "koha_mykoha";
$password = "sL925avEhO6utH1V";
$dbname="koha_mykoha";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error){
   echo $con->error;

}

$r1="";
$r2="";
$sql="SELECT count(*) from issues i,items it,biblio b where i.itemnumber=it.itemnumber and it.biblionumber=b.biblionumber and title='".$book_$
$result=$con->query($sql);
if($row=$result->fetch_assoc())
 $r1=$row["count(*)"];
$sql1="Select count(*) from biblio where  title='".$book_name."'";
$result2=$con->query($sql1);
if($row2=$result2->fetch_assoc())
 $r2=$row2["count(*)"];

$avl=$r2-$r1;

$sql2="select * from biblio where title='".$book_name."'";

$res="";
$rs=$con->query($sql2);
if($rr=$rs->fetch_assoc())

$res=$res.",".$rr["title"].",".$rr["author"].",".$rr["biblionumber"].",".$avl;

echo  $res;

?>
