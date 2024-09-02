<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>アンケート結果</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>Email</th>
            <th>好きな色</th>
            <th>好きな食べ物</th>
        </tr>
        <?php
        if (($file = fopen("kadai_data.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($file)) !== FALSE) {
                echo "<tr>";
                foreach ($data as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file);
        }
        ?>
    </table>
</body>
</html>