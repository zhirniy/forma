<?php

$recepient  = "denis_777@ukr.net,";
$recepient .= $_POST["email"];

$sitename = "Заявка";

$file_counter = "counter.txt";


if (file_exists($file_counter)) {
    $fp = fopen($file_counter, "r");
    $counter = fread($fp, filesize($file_counter));
    fclose($fp);
} else {
    $counter = 0;
}

$counter++;

$fp = fopen($file_counter, "w");
fwrite($fp, $counter);
fclose($fp);


$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$select = trim($_POST["select"]);
$datez = trim($_POST["datez"]);
$timez = trim($_POST["timez"]);
$datev = trim($_POST["datev"]);
$timev = trim($_POST["timev"]);

for ($x=1; $x < 10; $x++) 
	{
     if(x<4){
	${"number".$x} =trim($_POST["number".$x]);
    ${"description".$x} =trim($_POST["description".$x]);
    ${"summ".$x} =trim($_POST["summ".$x]);
    ${"price".$x} =trim($_POST["price".$x]);
    ${"manager".$x} =trim($_POST["manager".$x]);
    ${"phonemanager".$x} =trim($_POST["phonemanager".$x]);
    ${"emailmanager".$x} =trim($_POST["emailmanager".$x]);
    ${"bossname".$x} =trim($_POST["bossname".$x]);
    ${"obj".$x} =trim($_POST["obj".$x]);
    ${"adress".$x} =trim($_POST["adress".$x]);
    ${"select".$x} =trim($_POST["select".$x]);}
    else
    {
    ${"number".$x} =trim($_POST["number".$x]);
    ${"description".$x} =trim($_POST["description".$x]);
    ${"summ".$x} =trim($_POST["summ".$x]);
    ${"price".$x} =trim($_POST["price".$x]);
    }	

}

if ($obj2 != "" )
{
  $obj22 = "Объект №2: ";
  $adress22 = "Адресс: ";
  $select22 = "Поставленная задача: ";
  $select23 = "Описание задачаи: ";
  $number21 = "Номер";
  $description22 = "Найменование";
  $summ23 = "Кол-во";
  $price24 = "Цена";
  $manager22 = "Менеджер: ";
  $phonemanager22 = "Телефон +38";
  $emailmanager22 = "Email: ";
  $bossname22 =  "Согласовано: ";



}
else
{
  $obj22 = "";
  $adress22 = "";
  $select22 = "";
  $select23 = "";
  $number21 = "";
  $description22 = "";
  $summ23 = "";
  $price24 = "";
  $manager22 = "";
  $phonemanager22 = "";
  $emailmanager22 = "";
  $bossname22 =  "";
}


if ($obj3 != "" )
{
  $obj33 = "Объект №3: ";
  $adress33 = "Адресс: ";
  $select33 = "Поставленная задача: ";
  $select34 = "Описание задачаи: ";
  $number31 = "Номер";
  $description32 = "Найменование";
  $summ33 = "Кол-во";
  $price34 = "Цена";
  $manager33 = "Менеджер: ";
  $phonemanager33 = "Телефон +38";
  $emailmanager33 = "Email: ";
  $bossname33 =  "Согласовано: ";



}
else
{
  $obj32 = "";
  $adress32 = "";
  $select32 = "";
  $select33 = "";
  $number31 = "";
  $description32 = "";
  $summ33 = "";
  $price34 = "";
  $manager33 = "";
  $phonemanager33 = "";
  $emailmanager33 = "";
  $bossname33 =  "";
}





$message = "

<html>
<head>
  <title>Заявка № $counter </title>
  <style>
  th{
    color:red;
    text-align:center;
  }
  td{text-align:center;}
  </style>
  

</head>
<body>
  
  <table border=1>
    <tr>
      <th colspan=4>Заявка № $counter</th>
    </tr>
    <tr>
      <th colspan=4>Контактные данные пользователя:</th>
    </tr>
     <tr>
      <td colspan=2>Фамилия: $surname</td><td colspan=2>Имя: $name</td>
    </tr>
     <tr>
      <td colspan=2>Компания: $select</td><td td colspan=2>Телефон: $phone</td>
    </tr>
     <tr>
      <td colspan=2>Email: $email</td><tdcolspan=2></td>
    </tr>
    <tr>
      <th colspan=4>Время заполнения и выполнения</th>
    </tr>
    <tr>
      <td colspan=2>Дата заполнения: $datez</td><td colspan=2>Время заполнения: $timez</td>
    </tr>
    <tr>
      <td colspan=2>Дата выполнения: $datev</td><td colspan=2>Время выполнения: $timev</td>
    </tr>
    
    <tr>
      <th colspan=4>Объект №1: $obj1</th>
    </tr>
    <tr>
      <td colspan=2>Адресс объекта: $adress1</td><td colspan=2>Поставленная задача: $select1</td>
    </tr>
    <tr>
       <td colspan=4>Описание задачи:</td>
    </tr>
    <tr>
       <td>Номер</td><td>Найменование</td><td>Кол-во</td><td>Цена</td>
    </tr>
    <tr>
       <td>$number1</td><td>$description1</td><td>$summ1</td><td>$price1</td>
    </tr>
    <tr>
       <td>$number2</td><td>$description2</td><td>$summ2</td><td>$price2</td>
    </tr>
    <tr>
       <td>$number3</td><td>$description3</td><td>$summ3</td><td>$price3</td>
    </tr>
    <tr>
       <td colspan=2>Менеджер: $manager1</td><td>Телефон: $phonemanager1</td>
    </tr>
    <tr>
       <td colspan=2>Email: $emailmanager1</td><td colspan=2>Согласовано: $bossname1</td>
    </tr>
    
   <tr>
      <th colspan=4>$obj22$obj2</th>
    </tr>

    <tr>
      <td colspan=2>$adress22$adress2</td><td colspan=2>$select22$select2</td>
    </tr>
     <tr>  
      <td colspan=4>$select23</td>
     </tr>
    <tr>
       <td>$number21</td><td>$description22</td><td>$summ23</td><td>$price24</td>
    </tr>
    <tr>
       <td>$number4</td><td>$description4</td><td>$summ4</td><td>$price4</td>
    </tr>
    <tr>
       <td>$number5</td><td>$description5</td><td>$summ5</td><td>$price5</td>
    </tr>
    <tr>
       <td>$number6</td><td>$description6</td><td>$summ6</td><td>$price6</td>
    </tr>
    <tr>
       <td colspan=2>$manager22$manager2</td><td colspan=2>$phonemanager22$phonemanager2</td>
    </tr>
    <tr>
       <td colspan=2>$emailmanager22$emailmanager2</td><td colspan=2>$bossname22$bossname2</td>
    </tr>


    <tr>
      <th colspan=4>$obj33$obj3</th>
    </tr>
    <tr>
      <td colspan=2>$adress33$adress3</td><td colspan=2>$select33$select3</td>
    </tr>
    <tr>  
      <td colspan=4>$select34</td>
     </tr>
    <tr>
       <td>$number31</td><td>$description32</td><td>$summ33</td><td>$price34</td>
    </tr>
    <tr>
       <td>$number7</td><td>$description7</td><td>$summ7</td><td>$price7</td>
    </tr>
    <tr>
       <td>$number8</td><td>$description8</td><td>$summ8</td><td>$price8</td>
    </tr>
    <tr>
       <td>$number9</td><td>$description9</td><td>$summ9</td><td>$price9</td>
    </tr>
    <tr>
       <td colspan=2>$manager33$manager3</td><td colspan=2>$phonemanager33$phonemanager3</td>
    </tr>
    <tr>
       <td colspan=2>$emailmanager33$emailmanager3</td><td colspan=2>$bossname33$bossname3</td>
    </tr>

  </table>
</body>
</html>
";


$pagetitle = "Заявка \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");