<?php
//Часть 1
$array = [1, 3, 7, 3, 4];

function numberDeterminator($array) {
	
	if ($array[0] % 2 == 0 and $array[1] % 2 == 0) {
		foreach ($array as $value) {
			if ($value % 2 != 0) {
				return $value;
			}
		}
	} 
	
	else {
		foreach ($array as $value) {
			if ($value % 2 == 0) {
				return $value;
			}
		}
	}
}

numberDeterminator($array);


//Часть 2
//Инфоблоки 1, 2
$infoblockOne = [
		[
			'book' => 'bookOne',
			'author' => ['authorOne', 'authorTwo', 'authorThree']
		],
		[
			'book' => 'bookTwo',
			'author' => ['authorFour', 'authorFive']
		]
	];

$infoblockTwo = [
		[
			'author' => 'authorOne',
			'info' => 'Information about authorOne'
		],
		[
			'author' => 'authorTwo',
			'info' => 'Information about authorTwo'
		]
	
	];

//Функция получения информации об авторе
function getAuthorInfo($author, $infoblockTwo) {
	foreach ($infoblockTwo as $info) {
		if ($info['author'] === $author) {
			return $info['info'];
		}
		else {
			return 'Information about this autor not found';
		}
	}
}

$filteredBooks = array_slice($infoblockOne, 0, 20);

//Информация о книге и авторах
foreach ($filteredBooks as $book) {
	echo 'Книга: ' . $book['book'] . "\n";
	echo 'Авторы: ' . implode(', ', $book['author']) . "\n";
	
	foreach ($book['author'] as $author) {
		echo 'Информация об авторе ' . $author . ': ' . getAuthorInfo($author, $infoblockTwo) . "\n";
	}
	echo "\n";
}


?>
