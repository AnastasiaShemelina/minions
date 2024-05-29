<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/test.css">
    <title>Bob</title>
</head>
<body>
    <header>
    <nav>
        <?php require "templates/header.php" ?>
    </nav>
    </header>
    <main>
        <div class="main-select">
            <ul>
            <p class="regulartext">BOB</p>
            <li>Innocence and Kindness: Bob possesses childlike innocence and kindness. His pink cheeks and one large eye create a sense of cuteness and naivety.</li><br>
            <li>Emotionality: Bob often displays vivid emotions and feelings. His mood can quickly shift from excitement to sadness, making him a funny and endearing character.</li><br>
            <li>Love for Creativity: In the "Despicable Me" movies, Bob frequently exhibits a creative approach to problem-solving. He finds unconventional and playful ways to tackle challenges.</li><br>
            </ul>
            <div class="photo">
            <img src="img/Bob.webp" width="300px">
            </div>
        </div>
        <div class="main-bottom1">
        <?php require "templates/tickets.php" ?>
        </div>
        
    </main>
    <footer>
        <?php require "templates/footer.php" ?>
    </footer>
</body>
</html>