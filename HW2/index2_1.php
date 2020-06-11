<?php 
$title = 'php_hw2_1-7';
$user = 'Nikolaeva Anna'

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $title . " user " . $user; ?></title>
</head>

<body>
	<h2>Home Work lesson 2 <br></h2>
	<p> 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:

		если $a и $b положительные, вывести их разность;
		если $а и $b отрицательные, вывести их произведение;
		если $а и $b разных знаков, вывести их сумму;
		Ноль можно считать положительным числом.</p>


	<?php 
	$a = -6;
    $b = 5;
    if ($a >= 0 && $b >= 0) {
		echo "a = $a b = $b, если a и b положительные то их разность = ";
    echo $a - $b; // если a = 0; b = 27 // разность -27
     } else if
         ($a < 0 && $b < 0){
		echo "a = $a b = $b, если a и b отрицательные то их произведение = ";
         echo $a * $b; // если a = -2; b = -5 // произведение +10
     } else {
        echo "a = $a b = $b, если a и b рарных знаков то сумма = ";
		echo $a + $b . '<br><br>'; // если a = 2; b = -5 // сумма -3
     }
?>

	<p> 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>


	<?php 
		$a = rand(0, 15);
		echo "a= $a | вывод чисел ";  //+prompt('Введите число от 1 до 15');
		switch ($a) {
		case 1:
		echo $a++ . " ";
		case 2:
		echo $a++ . " ";
		case 3:
		echo $a++ . " ";
		case 4:
		echo $a++ . " ";
		case 5:
		echo $a++ . " ";
		case 6:
		echo $a++ . " ";
		case 7:
		echo $a++ . " ";
		case 8:
		echo $a++ . " ";
		case 9:
		echo $a++ . " ";
		case 10:
		echo $a++ . " ";
		case 11:
		echo $a++ . " ";
		case 12:
		echo $a++ . " ";	
		case 13:
		echo $a++ . " ";
		case 14:
		echo $a++ . " ";
		case 15:
		echo $a++ . " ";
		}
		
	?>

	<br><br>


	<p>
		3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
	</p>

<?php 
	$x = 10;
 	$y = 12;

	function amount($x, $y) {
	  return ($x + $y);
	}

	 echo "Сумма " . $amt = amount($x, $y) . '<br>';

	function difference($x, $y) {
	  return ($x - $y);
	}
	echo "Разность " . $diff = difference($x, $y). '<br>';

	function multiplication($x, $y) {
	  return ($x * $y);
	}
	echo "Произведение " . $mtp = multiplication($x, $y). '<br>';

	function division($x, $y) {
	  return ($x / $y);
	}
	echo "Деление " . $dvs = division($x, $y). '<br>';


	echo '<br>' . "4. Реализовать функцию с тремя параметрами. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).";

	echo '<br><br>';
	
	function mathOperation($arg1, $arg2, $operation) {
		switch($operation){
			case '+':
				return 'Вывожу сумму: ' . amount($arg1, $arg2) . '<br>';
			case '-':
				return 'Вывожу разность: ' . difference($arg1, $arg2). '<br>';
			case '/':
				return 'Вывожу частное: ' . division($arg1, $arg2). '<br>';
			case '*':
				return 'Вывожу произведение: ' . $mtp = multiplication($arg1, $arg2). '<br>';
		}
		
	}
	
	$mtp = '*';
	
	echo mathOperation(10, 12, $mtp);
	echo mathOperation(10, 12, '/');
	echo mathOperation(10, 12, '+');
	echo mathOperation(10, 12, '-');
	
	?>

	<p> 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
	</p>
	
	<?php 
		echo date('Y') . '<br>'; 
		echo date("d.m.Yг.") . '<br>';
	
	?>
	
	<p>
		*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
	</p>

	
	<?php 
		$val = 5;
		$pow = 5;

		function power($val, $pow) {
		  if ($pow !== 1) {
			return $val * power($val, $pow - 1);
		  }
		  return $val;
		}

		echo "$val в $pow степени равно: " . power($val, $pow);

	?>
<p> 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
	22 часа 15 минут
	21 час 43 минуты</p>

	<?php 
		$time = time();
		$h = date('G', $time);
		$i = date('i', $time);
	
	function timeNow ($val, $a, $b, $c){
		if ($val > 20){
			$val %= 10;
		}
		if ($val == 1){
			return $a;
		}
		if ($val > 1 && $val <5 ){
			return $b;
		}
		if ($val >= 5){
			return $c;
		}
	}
	
	 timeNow($h, 'час', 'часа', 'часов');
	 timeNow($i, 'минута', 'минуты', 'минут');
	
	echo "Текущее время: $h " . timeNow($h, 'час', 'часа', 'часов') . " $i " . timeNow($i, 'минута', 'минуты', 'минут');
	
	
	?>



</body>

</html>