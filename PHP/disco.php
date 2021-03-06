<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../Style/mainStyle.css">
    <link rel="stylesheet" href="../Style/menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="../Style/templateGenreStyle.css"/>
    <link rel="stylesheet" type="text/css" href="../Style/templateOrangeStyle.css"/>
    <title>Disco - MusicTionary</title>
</head>
<body>
    <?php include "../PHP/header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="../Images/disco.png" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Disco is a musical genre and dance that emerged in the United States in the mid-1970s. From funk, soul, pop, salsa and psychedelic genres, enriched by electronic orchestration including strings and brass and then synthesizers. 
                The term derives from the French word "discothèque". Disco emerges as a response to the dominance of the rock scene and the stigmatization of dance music by the counterculture during this period.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">Often associated with a very prominent bass / drums rhythm, with arrangements of violins and brass and with vocals with lots of echo and reverberation. The rhythmic part, put forward very much, consists of drums and Latin percussions, congas, 
                    timpani but also rhythm box.
                </div>
            </div>
        </section>

        <section title = "Few examples">
        <h3 class="fewExample">A few Examples</h3>
        <hr class="blockSeparator"/> 
            <div class="containExamples">
                <ul>
                    <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Abba<br>-<br>Dancing Queen</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Bee Gees<br>-<br>Stayin'Alive</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Village People<br>-<br>YMCA</button></li>
                </ul>
            </div>
            <div id = "video">
                <iframe id = "displayedVideo" width="350" height="200" src="https://www.youtube.com/embed/xFrGuyw1V8s" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <h2>Discover More</h2>
        <hr class="blockSeparator"/> 
        <section title = "discoverFirstBlock">
            <div class="discoverFirstBlock">
                <img src="../Images/bluesGospel.jpg" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">GOSPEL : </span><br><br>Gospel groups were very popular within the black community, 
                but were virtually unknown to the white community, though some in the white community began to follow them. 
                <a href="https://www.youtube.com/watch?v=xdzoeCuVs7w" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/xdzoeCuVs7w"  allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>
        <hr class="blockSeparator"/>
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/uY4cVhXxW64"  allow="autoplay; encrypted-med" allowfullscreen></iframe>
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">FUNK : </span><br><br>Funk emerged in the mid-1960s in the United States, and developed in the 1960s and 1970s. It's characterized by the presence of rhythmic section (guitar, bass, drums), brass or saxophones on rhythmic punctuation (riffs) or solos. 
                <a href="https://www.youtube.com/watch?v=uY4cVhXxW64" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <img src="../Images/funk.png" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator"/>
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="../Images/jazzBebop.jpg" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">BEBOP : </span> <br><br>This style, which leaves room for interpretation, 
                is characterized by an often very fast tempo, dynamic phrasing and by the fact that it is not necessarily linked to the dance.
                <a href="https://www.youtube.com/watch?v=okZYCS_TCO8&feature=emb_logo" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/okZYCS_TCO8"  allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
            
        </section>
    </main>

    <?php include "../PHP/footer.php"?>
    <script src="../JavaScript/menuBurger.js"></script>
    <script src="../JavaScript/searchBar.js"></script>
    <script src="../JavaScript/disco.js"></script>
    <script src="../JavaScript/headerFooter.js"></script>
</body>
</html>
