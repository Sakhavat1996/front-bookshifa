<?php
    include("includes/head.php");
?>


<section class="diagnosis info-room">
    <?php
        include("includes/headerIsAuth.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="new-heading-box">
                <div class="breadcrumbs">
                    <a href="#" class="old-point">Ana səhifə</a>
                    <span>></span>
                    <a href="#" class="old-point">Qəmbər Hüseynov</a>
                    <span>></span>
                    <a href="#" class="old-point">Analizlər</a>
                    <span>></span>
                    <p class="current-point"> Analiz: Göz ağrısı</p>
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
                <div class="edit-box">
                    <div class="same_btns first-btns">
                        <button class="edit_btn blue_btn">Düzəliş et</button>
                        <button class="delete_btn blue_btn">Diaqnozu sil</button>
                    </div>

                    <div class="same_btns second_btns hide">
                        <button class="save_btn blue_btn">Yadda saxla</button>
                        <button class="cancel_btn">Ləğv et</button>
                    </div>
                </div>
                <div class="inner-main-box w-100">
                    <div class="inner-item">
                        <div class="item-head">
                            <button class="change_btn change_name">
                                <div class="box_renew edit">
                                    <p>Diaqnozun adını dəyiş</p>
                                    <img src="img/edit.svg" alt="">
                                </div>
                                <div class="box_renew save hide">
                                    <p>Yadda saxla</p>
                                    <img src="img/okey.svg" alt="">
                                </div>
                            </button>
                            <p class="item-title">Diaqnoz: <span >Göz ağrısı</span></p>
                        </div>
                        
                        <div class="cabinet-inner">
                            <div class="add_cabinet_box">
                                <button class="add_btn" type="button" data-toggle="modal" data-target="#exampleModal">
                                    <div class="square">
                                        <img src="img/plus.svg" alt="">
                                    </div>
                                    <p>Yeniləmə əlavə et</p>
                                </button>
                            </div>
                            <div class="pdf-container">
                                <div class="pdf-link">
                                    <div class="doc-img">
                                        <a href="recept-patient.php" target="_blank"><img src="img/pdf.svg" alt=""></a>
                                        <button class="delete delete_file" data-file="1">Faylı sil</button>
                                    </div>
                                    <p class="doc-name">gozagrisi.pdf</p>
                                </div>
                                <div class="pdf-link">
                                    <div class="doc-img">
                                        <a href="recept-patient.php" target="_blank"><img src="img/pdf.svg" alt=""></a>
                                        <button class="delete delete_file" data-file="2">Faylı sil</button>
                                    </div>
                                    <p class="doc-name">gozagrisi.pdf</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("includes/footer.php");
    ?>
    <!-- addModal -->
    <form>
        <div class="modal fade addModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Diaqnoz yüklə</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.svg" alt="">
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>
                            Adı
                            <input type="text" required>
                        </label>
                        <div class="files-box">
                            <label for="upload">
                                <span>*html upload*</span>
                                <input type="file" name="" id="upload">
                            </label>
                            <label for="scanner">
                                <span>Cam Scanner</span>
                                <input type="file" name="" id="scanner">
                            </label>
                        </div>
                        <label>
                            Əlavə notlar
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

    <!-- deleteFileModal -->
    <div class="modal fade addModal sureModal fileModal"  tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faylı silmək istədiyinizə əminsiniz?</h5>
                </div>
                <div class="modal-body">
                    <div class="sure_btns">
                        <button class="yes">Hə</button>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">Xeyir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- sendMessage -->
    <form>
        <div class="modal fade addModal noteModal" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</section>

<?php
    include("includes/script.php");
?>
