<?php
    $userName = 'Anna';
	$title = 'PHP_HW_1';
	$h1 = 'Hello World!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo "$title user $userName"; ?></title>
</head>
<body>
	<p>1. установила  XAMPP на iOS / пока пользуюсь Breckets, но могу перейти и на PhpStorm</p>
	<p>2. Выполнить примеры из методички и разобраться, как это работает.</p> 

	<?php
		echo 'Hello, World!<br>'; 
	?>
		<?php
		$name = "GeekBrains user";
		echo "Hello, $name <br>"; 
	?>
	
	<?php
		define ( 'MY_CONST' , 100 );
		echo MY_CONST;
		echo "<br>";
	?>
	<?php
		$int10 = 42;
		$int2 = 0b101010;
		$int8 = 052;
		$int16 = 0x2A;
		echo "Десятеричная система $int10 <br>";
		echo "Двоичная система $int2 <br>";
		echo "Восьмеричная система $int8 <br>";
		echo "Шестнадцатеричная система $int16 <br>";
		$precise1 = 1.5;
		$precise2 = 1.5e4;
		$precise3 = 6E-8;
		echo "$precise1 | $precise2 | $precise3 <br>";
		$a2 = 1;
		echo "$a2"; // 1
		echo '$a2 <br>'; // $a2
	
		echo "Операции со строками <br>";
		$a3 = 'Hello,';
		$b3 = 'world';
		$c3 = $a3 . $b3;
		echo $c3;
		echo "<br>";
	
//		echo "Математические операции a = 4 b = 5 <br>";
//		$a = 4;
//		$b = 5;
//		echo $a + $b . '<br>' ; // сложение
//		echo $a * $b . '<br>' ; // умножение
//		echo $a - $b . '<br>' ; // вычитание
//		echo $a / $b . '<br>' ; // деление
//		echo $a % $b . '<br>' ; // остаток от деления
//		echo $a ** $b . '<br>' ; // возведение в степень
	
//		$a += $b;
//		echo 'a = ' . $a . '<br>';
//		$a = 0;
//		echo $a ++; // Постинкремент
//		echo ++ $a ; // Преинкремент
//		echo $a --; // Постдекремент
//		echo -- $a ; // Предекремент
	
//		$a = 4;
//		$b = 5;
//		var_dump ( $a == $b ); // Сравнение по значению
//		var_dump ( $a === $b ); // Сравнение по значению и типу
//		var_dump ( $a > $b ); // Больше
//		var_dump ( $a < $b ); // Меньше
//		var_dump ( $a <> $b ); // Не равно
//		var_dump ( $a != $b ); // Не равно
//		var_dump ( $a !== $b ); // Не равно без приведения типов
//		var_dump ( $a <= $b ); // Меньше или равно
//		var_dump ( $a >= $b ); // Больше или равно
	
	
		echo "<br>";
	?>
	
<p>3.объяснить как работает данный код</p> 

<?php
    $a = 5;
    $b = '05';
    echo var_dump($a == $b) . '<br>';// Почему true? Не строгое сравнение по значению php приведет тип данных к integer
    echo var_dump((int)'012345') . '<br>';     // Почему 12345? php приведет тип данных к integer
    echo var_dump((float)123.0 === (int)123.0) . '<br>'; // Почему false? === сравнение по значению и типу float число с плавающей  запятой и integer целое число
    echo var_dump((int)0 === (int)'hello, world'); // Почему true? сравнение по типу тип один (int),а строковое значение приведется к 0 var_dump(int)'Hello, world' = 0
?>

<p> 4.  Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных</p>

<h1 class="rty"><?php echo $h1; ?></h1>
<h2><?php echo date('Y'); ?></h2>

<p>
	5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.
</p>

<?php
	$a = 2;
	$b = 1;
	echo '$a = $a + $b;<br>
			$b = $a - $b ;<br>
			$a = $a - $b ;<br>';
	
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;
	echo "a = " .$a . '<br>';
	echo "b = " .$b . '<br>';
?>

</body>
</html>

