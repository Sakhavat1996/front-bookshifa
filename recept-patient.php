<?php
    include("includes/head.php");
?>


<section class="diagnosis info-room">
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

                <div class="recept-box w-100">
                    <p class="recept-title">Resept</p>
                    <div class="pill-box">
                      <div class="pill-container">
                        <div class="pill-list patient-recept">
                          <p class="number">1</p>
                          <input type="text" value="Paraçetromol">
                          <input type="text" value="1 ədəd">
                          <input type="text" value="5 gün">
                          <button class="note_btn" >
                            Not əlavə edildi.
                            <img src="img/okey.svg" alt="">
                          </button>
                        </div>
                      </div>
                    </div>
                    <form>
                      <label>
                        Müalicə
                        <textarea></textarea>
                      </label>
                      <button type="submit">
                        Yüklə
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("includes/footer.php");
    ?>
    <form >
        <div class="modal fade addModal noteModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Əlavə notlar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.svg" alt="">
                        </button>
                    </div>
                    <div class="modal-body">
                            <label>
                                <textarea></textarea>
                            </label>
                            <button type="submit">
                                Yüklə
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<?php
    include("includes/script.php");
?>
