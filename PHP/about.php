<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../Style/mainStyle.css">
    <link rel = "stylesheet" href = "../Style/aboutStyle.css">
    <link rel="stylesheet" href="../Style/menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us - MusicTionary</title>
</head>
<body>
    <?php include "../PHP/header.php"?>

    <main>

        <h2>About Us</h2>

        <article class = "member" id = "celia">
            <p class = "description right desktopRight">
                Célia,<br>Patron Saint of Fully Functional Functionalities
            </p>
            <img class = "profileImage left desktopLeft" src="../Images/celia.jpg" alt="célia">
        </article>

        <article class = "member" id = "achille">
            <p class = "description left desktopRight">
                Achille,<br>His Holiness our Supreme Design Guru
            </p>
            <img class = "profileImage right desktopLeft" src="../Images/achille.jpg" alt="achille">
        </article>

        <article class = "member" id = "yann">
            <p class = "description right desktopRight">
                Yann,<br>Certified Genre Classification Expert and W3C Checker
            </p>
            <img class = "profileImage left desktopLeft" src="../Images/yann.jpg" alt="yann">
        </article>

        <article class = "member" id = "lucy">
            <p class = "description left desktopRight">
                Lucy,<br>Professional Tea Drinker
            </p>
            <img class = "profileImage right desktopLeft" src="../Images/lucy.jpg" alt="lucy">
        </article>
    </main>

    <?php include "../PHP/footer.php"?>
    <script src="../JavaScript/menuBurger.js"></script>
    <script src="../JavaScript/searchBar.js"></script>
    <script src="../JavaScript/headerFooter.js"></script>
</body>
</html>