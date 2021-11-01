<?php
/*
 * ------
 * ROASTS
 * ------
 */

$sentences =
    array("You look ugly.",
        "You're a bitch.",
        "You hit me // you made me cry.",
        "Your adopted.",
        "Awww, are you about to cry?",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "");

$sentences_answers =
    array("Sorry, but I'm not a mirror",
        "A bitch is a female dog, a dog barks, bark is part of a tree, a tree is part of nature and nature is beautiful.",
        "Sorry, not sorry",
        "At least I'm wanted",
        "Yeah, because your breath smells",
        "If I throw a stick, will you leave?",
        "You’re a gray sprinkle on a rainbow cupcake.",
        "If your brain was dynamite, there wouldn’t be enough to blow your hat off.",
        "You are more disappointing than an unsalted pretzel.",
        "Light travels faster than sound, which is why you seemed bright until you spoke.",
        "Your kid is so annoying he makes his Happy Meal cry.",
        "You have so many gaps in your teeth it looks like your tongue is in jail.",
        "Your secrets are always safe with me. I never even listen when you tell me them.",
        "I’ll never forget the first time we met. But I’ll keep trying.",
        "I forgot the world revolves around you. My apologies! How silly of me.",
        "I only take you everywhere I go just so I don’t have to kiss you goodbye.",
        "Hold still. I’m trying to imagine you with a personality.",
        "Your face makes onions cry.",
        "You look so pretty. Not at all gross today.",
        "It’s impossible to underestimate you.",
        "Her teeth were so bad she could eat an apple through a fence.",
        "I’m not insulting you; I’m describing you.",
        "I’m not a nerd; I’m just smarter than you.",
        "Don’t be ashamed of who you are. That’s your parents’ job.",
        "Your face is just fine, but we’ll have to put a bag over that personality.",
        "You bring everyone so much joy… when you leave the room.",
        "I thought of you today. It reminded me to take out the trash.",
        "Don’t worry about me. Worry about your eyebrows.",
        "You are the human version of period cramps.",
        "If you’re going to be two-faced, at least make one of them pretty.",
        "You are like a cloud. When you disappear, it’s a beautiful day.",
        "Don’t worry — the first 40 years of childhood are always the hardest.",
        "I may love to shop, but I will never buy your bull.",
        "I love what you’ve done with your hair. How do you get it to come out of your nostrils like that?",
        "OH MY GOD! IT SPEAKS!",
        "Child, I’ve forgotten more than you ever knew.",
        "You just might be why the middle finger was invented in the first place.",
        "I know you are, but what am I?",
        "I see no evil, and I definitely don’t hear your evil.",
        "You have miles to go before you reach mediocre.",
        "When you look in the mirror, say hi to the clown you see in there for me, would ya?",
        "Bye, hope to see you never.",
        "Remember that time you were saying that thing I didn’t care about? Yeah… that is now.",
        "Wish I had a flip phone so I could slam it shut on this conversation.",
        "Wow, I bet you even fart glitter!",
        "I guess if you actually ever spoke your mind, you’d really be speechless.",
        "Since you know it all, you should know when to shut up.",
        "Life is full of disappointments, and I just added you to the list.",
        "I treasure the time I don’t spend with you.",
        "I was going to make a joke about your life, but I see life beat me to the punch.",
        "The last time I saw something like you… I flushed.",
        "When you start talking, I stop listening.",
        "You look like something that came out of a slow cooker.",
        "Feed your own ego. I’m busy.",
        "The only work-life balance I want is being away from you.",
        "Your family tree must be a cactus because everybody on it is a prick.",
        "I’d give you a nasty look, but you’ve already got one.",
        "Are you almost done with all of this drama? Because I need an intermission.",
        "Of course I’m talking like an idiot… how else could you understand me?",
        "You’re the reason this country has to put directions on shampoo.",
        "Some people are like slinkies — not really good for much, but they bring a smile to your face when pushed down the stairs.",
        "No matter how much a snake sheds its skin, it’s still a snake.",
        "You have an entire life to be an idiot. Why not take today off?",
        "If you have a problem with me, write the problem on a piece of paper, fold it, and shove it up your ass.",
        "Wanna know what you have in common with a colonoscopy? You're both a pain in the ass.");
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
