<?php
    include("includes/head.php");
?>


<section class="diagnosis">
    <?php
        include("includes/headerNotAuth.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="entrance-box">
                <p class="title">Diaqnozlarınızı paylaşmaq üçün kodunuz:</p>
                <div class="code">
                    <p>xxxxxxxx</p>
                </div>
                <button class="copy">Kopyalayın</button>
            </div>
            <div class="list-same w-100">
                <div class="item-list">
                    <div class="item-head">
                        <div class="date-box same-head-box">
                            Tarix:
                            <p>05.02.2020</p>
                        </div>
                        <div class="doctor-box same-head-box">
                            Doktor:
                            <p>Dr. Emir Emirov</p>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="diagnosis-box">
                            Diaqnoz:
                            <p>Göz ağrısı</p>
                        </div>
                        <a href="inner-diagnosis.php" class="inner-link">Bax</a>
                    </div>
                </div>
                <div class="item-list">
                    <div class="item-head">
                        <div class="date-box same-head-box">
                            Tarix:
                            <p>05.02.2020</p>
                        </div>
                        <div class="doctor-box same-head-box">
                            Doktor:
                            <p>Dr. Emir Emirov</p>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="diagnosis-box">
                            Diaqnoz:
                            <p>Göz ağrısı</p>
                        </div>
                        <a href="inner-diagnosis.php" class="inner-link">Bax</a>
                    </div>
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
