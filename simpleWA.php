<!DOCTYPE html>
<html>
<head>
    <title>Hashing string</title>
</head>
<body>
<div>
    <h2>This Web Application Is Going Print The Hashing of A String</h2>
</div>

<p>
    <form method="GET" action="simpleWA.php">
        <input name="string"/>
        <select name="hash">
            <option value="md2">md2</option>
            <option value="md4">md4</option>
            <option value="md5">md5</option>
            <option value="sha1">sha1</option>
            <option value="sha256">sha256</option>
        </select>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</p>

<p>
    <?php

    if(isset($_GET["submit"])){
        $string =$_GET["string"];

        if($_GET["hash"]=="md2"){
            $result = hash("md2",$string);
            echo "The md2 hashing of the string is <br>";
        }
        elseif($_GET["hash"]=="md4"){
            $result = hash("md4",$string);
            echo "The md4 hashing of the string is <br>";
        }
        elseif($_GET["hash"]=="md5"){
            $result = hash("md5",$string);
            echo "The md5 hashing of the string is <br>";
        }
        elseif($_GET["hash"]=="sha1"){
            $result = hash("sha1",$string);
            echo "The sha1 hashing of the string is <br>";
        }
        else{
            $result = hash("sha256",$string);
            echo "The sha256 of the string is <br>";
        }
        echo " $result"; 

    }

?>

<br>
<a href=./info-file.php>Just some regular info</a>

