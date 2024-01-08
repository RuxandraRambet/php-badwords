<!-- dichiarazione variabili -->
<?php
    $text = $_GET['text'];
    $word = $_GET['word'];

    $word_replaced = str_replace($word, '***', $text);
?>
<!-- /dichiarazione variabili -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- paragrafo originale -->
    <p>Il paragrafo originale è: <?php echo $text;?></p>
    <h4>Lunghezza paragrafo: <?php echo strlen($text);?></h4>

    <!-- paragrafo censurato -->
    <p>Il paragrafo censurato è: <?php echo $word_replaced;?></p>
    <h4>Lunghezza paragrafo: <?php echo strlen($word_replaced);?></h4>
</body>
</html>
