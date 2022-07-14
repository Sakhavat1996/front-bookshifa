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
                                        <button class="delete delete_file" data-file="1">
                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.33333 14C6.55435 14 6.76631 13.9122 6.92259 13.7559C7.07887 13.5996 7.16667 13.3876 7.16667 13.1666V8.16663C7.16667 7.94561 7.07887 7.73365 6.92259 7.57737C6.76631 7.42109 6.55435 7.33329 6.33333 7.33329C6.11232 7.33329 5.90036 7.42109 5.74408 7.57737C5.5878 7.73365 5.5 7.94561 5.5 8.16663V13.1666C5.5 13.3876 5.5878 13.5996 5.74408 13.7559C5.90036 13.9122 6.11232 14 6.33333 14ZM14.6667 3.99996H11.3333V3.16663C11.3333 2.50358 11.0699 1.8677 10.6011 1.39886C10.1323 0.930018 9.49637 0.666626 8.83333 0.666626H7.16667C6.50363 0.666626 5.86774 0.930018 5.3989 1.39886C4.93006 1.8677 4.66667 2.50358 4.66667 3.16663V3.99996H1.33333C1.11232 3.99996 0.900358 4.08776 0.744078 4.24404C0.587797 4.40032 0.5 4.61228 0.5 4.83329C0.5 5.05431 0.587797 5.26627 0.744078 5.42255C0.900358 5.57883 1.11232 5.66663 1.33333 5.66663H2.16667V14.8333C2.16667 15.4963 2.43006 16.1322 2.8989 16.6011C3.36774 17.0699 4.00363 17.3333 4.66667 17.3333H11.3333C11.9964 17.3333 12.6323 17.0699 13.1011 16.6011C13.5699 16.1322 13.8333 15.4963 13.8333 14.8333V5.66663H14.6667C14.8877 5.66663 15.0996 5.57883 15.2559 5.42255C15.4122 5.26627 15.5 5.05431 15.5 4.83329C15.5 4.61228 15.4122 4.40032 15.2559 4.24404C15.0996 4.08776 14.8877 3.99996 14.6667 3.99996ZM6.33333 3.16663C6.33333 2.94561 6.42113 2.73365 6.57741 2.57737C6.73369 2.42109 6.94565 2.33329 7.16667 2.33329H8.83333C9.05435 2.33329 9.26631 2.42109 9.42259 2.57737C9.57887 2.73365 9.66667 2.94561 9.66667 3.16663V3.99996H6.33333V3.16663ZM12.1667 14.8333C12.1667 15.0543 12.0789 15.2663 11.9226 15.4225C11.7663 15.5788 11.5543 15.6666 11.3333 15.6666H4.66667C4.44565 15.6666 4.23369 15.5788 4.07741 15.4225C3.92113 15.2663 3.83333 15.0543 3.83333 14.8333V5.66663H12.1667V14.8333ZM9.66667 14C9.88768 14 10.0996 13.9122 10.2559 13.7559C10.4122 13.5996 10.5 13.3876 10.5 13.1666V8.16663C10.5 7.94561 10.4122 7.73365 10.2559 7.57737C10.0996 7.42109 9.88768 7.33329 9.66667 7.33329C9.44565 7.33329 9.23369 7.42109 9.07741 7.57737C8.92113 7.73365 8.83333 7.94561 8.83333 8.16663V13.1666C8.83333 13.3876 8.92113 13.5996 9.07741 13.7559C9.23369 13.9122 9.44565 14 9.66667 14Z" fill="#DE4747"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="doc-name">gozagrisi.pdf</p>
                                </div>
                                <div class="pdf-link">
                                    <div class="doc-img">
                                        <a href="recept-patient.php" target="_blank"><img src="img/pdf.svg" alt=""></a>
                                        <button class="delete delete_file" data-file="2">
                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.33333 14C6.55435 14 6.76631 13.9122 6.92259 13.7559C7.07887 13.5996 7.16667 13.3876 7.16667 13.1666V8.16663C7.16667 7.94561 7.07887 7.73365 6.92259 7.57737C6.76631 7.42109 6.55435 7.33329 6.33333 7.33329C6.11232 7.33329 5.90036 7.42109 5.74408 7.57737C5.5878 7.73365 5.5 7.94561 5.5 8.16663V13.1666C5.5 13.3876 5.5878 13.5996 5.74408 13.7559C5.90036 13.9122 6.11232 14 6.33333 14ZM14.6667 3.99996H11.3333V3.16663C11.3333 2.50358 11.0699 1.8677 10.6011 1.39886C10.1323 0.930018 9.49637 0.666626 8.83333 0.666626H7.16667C6.50363 0.666626 5.86774 0.930018 5.3989 1.39886C4.93006 1.8677 4.66667 2.50358 4.66667 3.16663V3.99996H1.33333C1.11232 3.99996 0.900358 4.08776 0.744078 4.24404C0.587797 4.40032 0.5 4.61228 0.5 4.83329C0.5 5.05431 0.587797 5.26627 0.744078 5.42255C0.900358 5.57883 1.11232 5.66663 1.33333 5.66663H2.16667V14.8333C2.16667 15.4963 2.43006 16.1322 2.8989 16.6011C3.36774 17.0699 4.00363 17.3333 4.66667 17.3333H11.3333C11.9964 17.3333 12.6323 17.0699 13.1011 16.6011C13.5699 16.1322 13.8333 15.4963 13.8333 14.8333V5.66663H14.6667C14.8877 5.66663 15.0996 5.57883 15.2559 5.42255C15.4122 5.26627 15.5 5.05431 15.5 4.83329C15.5 4.61228 15.4122 4.40032 15.2559 4.24404C15.0996 4.08776 14.8877 3.99996 14.6667 3.99996ZM6.33333 3.16663C6.33333 2.94561 6.42113 2.73365 6.57741 2.57737C6.73369 2.42109 6.94565 2.33329 7.16667 2.33329H8.83333C9.05435 2.33329 9.26631 2.42109 9.42259 2.57737C9.57887 2.73365 9.66667 2.94561 9.66667 3.16663V3.99996H6.33333V3.16663ZM12.1667 14.8333C12.1667 15.0543 12.0789 15.2663 11.9226 15.4225C11.7663 15.5788 11.5543 15.6666 11.3333 15.6666H4.66667C4.44565 15.6666 4.23369 15.5788 4.07741 15.4225C3.92113 15.2663 3.83333 15.0543 3.83333 14.8333V5.66663H12.1667V14.8333ZM9.66667 14C9.88768 14 10.0996 13.9122 10.2559 13.7559C10.4122 13.5996 10.5 13.3876 10.5 13.1666V8.16663C10.5 7.94561 10.4122 7.73365 10.2559 7.57737C10.0996 7.42109 9.88768 7.33329 9.66667 7.33329C9.44565 7.33329 9.23369 7.42109 9.07741 7.57737C8.92113 7.73365 8.83333 7.94561 8.83333 8.16663V13.1666C8.83333 13.3876 8.92113 13.5996 9.07741 13.7559C9.23369 13.9122 9.44565 14 9.66667 14Z" fill="#DE4747"/>
                                            </svg>
                                        </button>
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
