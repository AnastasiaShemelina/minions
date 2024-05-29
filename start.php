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
    <div class="main-select">
            <div class="main-select-text">
                <p class="regulartext">Which minion</p> will you choose?
            </div>
            <div class="photo">
                <img src="img/question.png" width="300px">
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