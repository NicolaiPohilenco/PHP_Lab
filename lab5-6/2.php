<?php
//// Создание файла
//$data = "1. William Smith, 1990, 2344455666677\n"
//    . "2. John Doe, 1988, 4445556666787\n"
//    . "3. Michael Brown, 1991, 7748956996777\n"
//    . "4. David Johnson, 1987, 5556667779999\n"
//    . "5. Robert Jones, 1992, 99933456678888\n";
//
//if (file_put_contents("file.txt", $data) === false) {
//   die("File creation error!");
//}

// Добавление данных в файл
$additional_data = "6. Jessica Jons, 1997, 8753983985847\n"
    . "7. Matew Merdok, 1956, 9087385610392\n"
    . "8. Tia Harribel, 1999, 4627891047984\n";

if (file_put_contents("../lab5-6_PohilencoNicolai/file.txt", $additional_data, FILE_APPEND) === false) {
    die("Error adding data to a file!");
}

// Открытие файла для чтения
$data_from_file = file_get_contents("../lab5-6_PohilencoNicolai/file.txt");
if ($data_from_file === false) {
    die("Error opening a file for reading!");
}
?>

<div>Data from file:</div>
<?php
// Вывод данных из файла
$lines = explode("\n", $data_from_file);
foreach ($lines as $line) {
    echo $line . "<br/>";
}