<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter fruit name"><br>
        <input type="text" name="color" placeholder="Enter fruit color"><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        include 'classes/Fruits.php'; //using the class file: take note that the class file and class iteself is quite different: クラスファイルの使用：クラスファイルとクラス自体がまったく異なることに注意してください
        // we will create the object: again the object is a copy of your class. the object has the power to manipulate your data using the guide/class as a reference : オブジェクトを作成します。ここでも、オブジェクトはクラスのコピーです。オブジェクトには、ガイド/クラスを参照として使用してデータを操作する能力があります
        $fruitsObj = new Fruits;
        // get the values entered in the form
        $name = $_POST["fname"];
        $color = $_POST["color"];
        // echo $fruitsObj->name;
        // echo $fruitsObj->color;
        $fruitsObj->set_values($name, $color);
        echo "NAME: ", $fruitsObj->get_name(), "<br>";
        echo "COLOR: ", $fruitsObj->get_color();
    }
?>