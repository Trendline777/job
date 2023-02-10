<?php

session_start();

$_SESSION['name'] = $_POST['name'];


$url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLScFaNV6aUFQwpHZ_FVVoSySRVty1U8guS_CqpNlZ9QtfNS4Fg/formResponse";

$link = "finishpage.php";

$post_data = array(
    "entry.125880107" => $_POST['name'],
    "entry.677047606" => $_POST['email'],
    "entry.267094133" => $_POST['contact'],
    "entry.374071430" => $_POST['city'],
    "entry.1698698113" => $_POST['spec'],
    "entry.1957994535" => $_POST['like'],
    "entry.75168775" => $_POST['degree'],
    "entry.933328153" => $_POST['experience'],
    "entry.633179340" => $_POST['boss'],
    "entry.1553271513" => $_POST['businessman'],
    "entry.2031263693" => $_POST['important'],

    "partialResponse" => "[null,null,&quot;7302432380351372858&quot;]",
    "pageHistory" => "0",
    "fbzx" => "7302432380351372858"
);

// Далее не трогать
// с помощью CURL заносим данные в таблицу google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// указываем, что у нас POST запрос
curl_setopt($ch, CURLOPT_POST, 1);
// добавляем переменные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//заполняем таблицу google
$output = curl_exec($ch);
curl_close($ch);

header('Location: '.$link);


?>