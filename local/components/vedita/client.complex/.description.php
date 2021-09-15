<? 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = 
[
	"NAME" => "Отображение таблицы клиентов",
	"DESCRIPTION" => "Выводим таблицу клиентов",
	"COMPLEX" => "Y",
	"PATH" => 
	[
		"ID" => "Ведита",
		"CHILD" => 
		[
			"ID" => "clients",
			"NAME" => "Клиенты"
		]
	],
];
