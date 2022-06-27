<?php
    include("includes/head.php");
?>


<section class="index">
    <?php
        include("includes/headerNotAuth.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="index-main-container w-100">
                <div class="same-big-box">
                    <p class="title-box">Diaqnozlar və Müalicələr</p>
                    <div class="img-box">
                        <img src="img/pills.png" alt="">
                        <img src="img/stoteskop.png" alt="">
                    </div>
                    <a href="diagnosis.php" class="link-box">Bütün diaqnoz və müalicələrə bax</a>
                </div>
                <div class="same-big-box">
                    <p class="title-box">Analizlər</p>
                    <div class="img-box"><img src="img/dnt.png" alt=""></div>
                    <a href="analysis.php" class="link-box">Bütün  diaqnozlara bax</a>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("includes/footer.php");
    ?>
</section>

<?php
    include("includes/script.php");
?>
