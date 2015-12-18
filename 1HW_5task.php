<!--В HTML структурі вивести заголовок сторінки і метатеги (кожний окремий спосіб для виведення інформації не дозволяється використовувати більше одного разу)-->
<!---->
<!--Вхідні данні:-->
<!--$title = 'Page title';-->
<!--$description = 'The Meta Description Tag';-->
<!--$keywords = 'The Meta Keywords Tag';-->
<!--html:-->
<!--<html>-->
<!--<head>-->
<!--    <title>$title</title>-->
<!--    <meta name="description" content="$description">-->
<!--    <meta name="keywords" content="$keywords">-->
<!--</head>-->
<!--<body>Simple html page</body>-->
<!--</html>-->

<?php

$title = 'Page title';
$description = 'The Meta Description Tag';
$keywords = 'The Meta Keywords Tag';


?>

<html>
<head>
    <title><?php print $title ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?= print $keywords; ?>">
</head>
<body>Simple html page</body>
</html>;

