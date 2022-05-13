<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="questions.js" defer></script>
    <title>Quiz</title>
</head>
<body>
    <h1>Quiz</h1>
    <h2>問題一覧</h2>
    <ul>
        <?php foreach($questions as $question): ?>
        <li><a href="question.php?id=<?php echo $question['id']; ?>"></a></li>
        <?php endforeach; ?>
    </ul>
    
    
</body>
</html>