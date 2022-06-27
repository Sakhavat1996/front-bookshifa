<?php
    include("includes/head.php");
?>


<section class="diagnosis">
    <?php
        include("includes/headerNotAuth.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="inner-container w-100">
                <div class="inner-head">
                    <div class="head-date same_inner">
                        Diaqnozun əlavə olunduğu tarix:
                        <p>05.02.2020</p>
                    </div>
                    <div class="head-doctor same_inner">
                        Yazan həkim:
                        <p>Dr. Emir Emirov</p>
                    </div>
                </div>
                <div class="entrance-box">
                    <p class="title">Diaqnozlarınızı paylaşmaq üçün kodunuz:</p>
                    <div class="code">
                        <p>xxxxxxxx</p>
                    </div>
                    <button class="copy">Kopyalayın</button>
                </div>
                <div class="inner-main-box w-100">
                    <div class="inner-item">
                        <p class="item-title">Diaqnoz: Göz ağrısı</p>
                        <div class="pdf-container">
                            <a href="recept-patient.php" target="_blank" class="pdf-link">
                                <div class="doc-img"><img src="img/pdf.svg" alt=""></div>
                                <p class="doc-name">gozagrisi.pdf</p>
                            </a>
                        </div>
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
