<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$select = htmlspecialchars($_POST['select'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

echo '私の名前は '.$name.'<br>';
echo '希望する商品は '.$select. '<br>';
echo '注文数は '.$number.'個';
