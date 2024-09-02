<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
</head>
<body>
    <h1>アンケートフォーム</h1>
    <form action="kadai_write.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label>質問1: 好きな色は？</label><br>
        <input type="radio" name="question1" value="赤"> 赤<br>
        <input type="radio" name="question1" value="青"> 青<br>
        <input type="radio" name="question1" value="緑"> 緑<br>

        <label>質問2: 好きな食べ物は？</label><br>
        <input type="radio" name="question2" value="寿司"> 寿司<br>
        <input type="radio" name="question2" value="ラーメン"> ラーメン<br>
        <input type="radio" name="question2" value="カレー"> カレー<br>

        <input type="submit" value="送信">
    </form>
</body>
</html>