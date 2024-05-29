<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/test.css">
    <title>Minions</title>
</head>
<body>
    <header>
    <nav>
        <?php require "templates/header.php" ?>
    </nav>
    </header>
    <main>
        <div class="main-top">
            <div class="main-left">
                <p class="bigtext">SELECT YOUR<br>LUCKY MINION</p>
                <p class="minitext">Let's select your current<br>lucky character</p>
                <form action="start.php">
                    <button class="maingo">Go to selection</button>
                </form>
            </div>
            <div class="main-right">
                <img src="img/minions.png" height="350px">
            </div>
        </div>

    </main>
    <footer>
        <?php require "templates/footer.php" ?>
    </footer>
</body>
</html>