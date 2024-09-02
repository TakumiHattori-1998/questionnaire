<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];

    $data = [$name, $email, $question1, $question2];
    $file = fopen('kadai_data.csv', 'a');
    fputcsv($file, $data);
    fclose($file);

    echo "データが登録されました。<br>";
    echo '<a href="kadai_read.php">登録データを表示する</a>';
}
?>