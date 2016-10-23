<?php
$a1 = null;
if (isset ($_GET['a1'])) {
	$a1 = $_GET['a1'];
}
$a2 = null;
if (isset ($_GET['a2'])) {
	$a2 = $_GET['a2'];
}
$b1 = null;
if (isset ($_GET['b1'])) {
	$b1 = $_GET['b1'];
}
$b2 = null;
if (isset ($_GET['b2'])) {
	$b2 = $_GET['b2'];
}

if (isset($a1) && isset ($a2) && isset ($b1) && isset ($b2)) {
	if (is_numeric($a1) && is_numeric($a2) && is_numeric($b1) && is_numeric($b2)) {

			$ab=sqrt(($b1-$a1)**2+($b2-$a2)**2);
			
			$result = number_format ($ab, 2, ',', ' ');
	}
	else {
		echo "Ошибка! Вы ввели не числовое значение";
		echo "<br>";
	}
}
?>
<html>
<meta charset="UTF-8">
<body>
<form method="GET">

Точка А = ( <input type ="text" name= "a1" value="<?= $a1 ?>">, <input type ="text" name="a2"  value="<?= $a2 ?>"> );
</br>
Точка B = ( <input type ="text" name= "b1"  value="<?= $b1 ?>">, <input type ="text" name="b2"  value="<?= $b2 ?>"> ).

<input type ="submit" value="Рассчитать" name="add">
<?php
if (isset($result)) {
	echo "<br/>Результат: ".$result;
} 
?>
<hr><img src="http://www.myshared.ru/thumbs/6/643559/big_thumb.jpg"><br>
</form>
</body>
</html>