<?php
    include("includes/head.php");
?>


<section class="diagnosis info-room">
    <?php
        include("includes/headerNotAuth.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="new-heading-box">
                <div class="breadcrumbs">
                    <a href="#" class="old-point">Ana səhifə</a>
                    <span>></span>
                    <a href="#" class="old-point">Qəmbər Hüseynov</a>
                    <span>></span>
                    <a href="#" class="old-point">Diaqnozlar</a>
                    <span>></span>
                    <a href="#" class="old-point"> Diaqnoz: Göz ağrısı</a>
                    <span>></span>
                    <p class="current-point"> Yeni resept</p>
                </div>

                <button class="send-message" type="button" data-toggle="modal" data-target="#sendMessage">
                Pasiyentə bildiriş göndər
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0511 17.6294C10.1366 17.7357 10.3249 17.8297 10.5869 17.8967C10.8488 17.9637 11.1698 18 11.5 18C11.8302 18 12.1512 17.9637 12.4131 17.8967C12.6751 17.8297 12.8634 17.7357 12.9489 17.6294" stroke="#4098FF" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4.69728 7.34733C4.31546 5.01298 5.76461 2.7691 8.04938 2.1569C10.3342 1.54469 12.7111 2.76338 13.5476 4.97589L14.3965 7.22114C14.8163 8.33153 15.5021 9.32197 16.3938 10.1056L17.3656 10.9596C18.0409 11.5532 18.3786 11.8499 18.4551 12.1498C18.5355 12.4654 18.4572 12.8004 18.2452 13.0476C18.0438 13.2826 17.6096 13.3989 16.7411 13.6316L6.25953 16.4402C5.39105 16.6729 4.95681 16.7892 4.66487 16.6865C4.3577 16.5783 4.12243 16.3274 4.03428 16.0139C3.9505 15.7159 4.09456 15.2901 4.38269 14.4384L4.79725 13.2129C5.17765 12.0884 5.27637 10.8877 5.08475 9.71622L4.69728 7.34733Z" fill="#4098FF"/>
                </svg>
                </button>
            </div>
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

                <div class="recept-box recept-adding w-100">
                    <p class="recept-title">Resept</p>
                    <div class="pill-box">
                      <div class="pill-container">
                        <div class="pill-list">
                          <p class="number">1</p>
                          <input type="text" value="Paraçetromol">
                          <input type="text" value="1 ədəd">
                          <input type="text" value="5 gün">
                          <button class="note_btn" >
                            Not əlavə edildi.
                            <img src="img/okey.svg" alt="">
                          </button>
                          <button class="delete-recept" id="1">
                            <img src="img/close.svg" alt="">
                          </button>
                        </div>
                        
                      </div>
                      <button id="addBtn">
                        <img src="img/add.svg" alt="">
                        <p>Dərman əlavə et</p>
                      </button>
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
    <form class="receptForm">
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
                                <textarea required></textarea>
                            </label>
                            <input type="hidden">
                            <button type="submit">
                                Saxla
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- sendMessage -->
    <form>
        <div class="modal fade addModal noteModal" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bildiriş göndər</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.svg" alt="">
                        </button>
                    </div>
                    <div class="modal-body">
                            <label>
                                <textarea></textarea>
                            </label>
                            <button type="submit">Göndər</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- deleteFileModal -->
    <div class="modal fade addModal sureModal fileModal"  tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resepti silmək istədiyinizə əminsiniz??</h5>
                </div>
                <div class="modal-body">
                    <div class="sure_btns">
                        <button class="yes">Hə</button>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">Xeyr</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
    include("includes/script.php");
?>
