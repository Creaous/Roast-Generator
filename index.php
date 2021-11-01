<?php
/*
 * ------
 * ROASTS
 * ------
 */

$sentences = json_decode(file_get_contents("assets/roasts-sentences.json"), true);
$sentences_answers = json_decode(file_get_contents("assets/roasts-answers.json"), true);

// yep i stole these: https://www.scarymommy.com/best-insults-and-comebacks/

$ransentence = array_rand($sentences);

/*
 * ------
 * EMOJIS
 * ------
 */

$emojis =
    array("💖",
        "🍫",
        "🤣",
        "⚡",
        "❤",
        "🍕");

$ranemoji = array_rand($emojis);

/*
$word1_arr = array('female', "male");
$word2_arr = array("dog", "cat");
$word3_arr = array("beautiful", "ugly");

$sentence = 'A bitch is a '. $word1_arr[array_rand($word1_arr)]. ' '. $word2_arr[array_rand($word2_arr)]. ', a '. $word2_arr[array_rand($word2_arr)]. ' barks, bark is part of a tree, a tree is part of nature and nature is '. $word3_arr[array_rand($word3_arr)];
*/
?>

<html>
<!-- Roast Generator -->
<head>
    <!-- Site meta data -->
    <title>Roast Generator</title>
    <meta name="description" content="Generate some roasts.">

    <!-- Styles and Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/RED7Studios/RED7Community-CDN@main/assets/js/fontawesome.js"></script>
</head>

<body class="bg">
<!-- Main site -->
<div class="center">
    <h1>Roast Generator</h1>
    <p><?php if ($sentences[$ransentence] != "") { echo '<b>THEM:</b>'; } ?> <?php echo $sentences[$ransentence]; ?></p>
    <p><b>YOU:</b> <?php echo $sentences_answers[$ransentence]; ?></p>
    <a class="btn btn-primary" onclick="document.location = document.location">Refresh</a>
</div>

<!-- Bottom text -->
<div class="parent-bottom">
    <div class="bottom">
        <small>Made with <?php echo $emojis[$ranemoji]; ?> by Aishah and Mitchell of RED7 STUDIOS</small>
    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>
