<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form data</title>
    <link href="styles/styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h1 class="titulo_form">Informação guardada:</h1>

<?php
$filename='form.txt';

$data = file_get_contents($filename);

echo $data;

?>
</body>
</html>
