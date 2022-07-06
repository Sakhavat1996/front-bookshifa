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
              <p class="current-point">Ana səhifə</p>
            </div>
          </div>
          <div class="patients-main-container w-100">
              <div class="patients-first-line">
                <div class="add-patient-box same-patient-box">
                  <p>Pasiyent əlavə et</p>
                  <div class="add_btn_box">
                    <button type="button" data-toggle="modal" data-target="#addPatient">Pasiyent əlavə et</button>
                    <button type="button" data-toggle="modal" data-target="#newPatient">Yeni</button>
                  </div>
                </div>
                <div class="add-diagnosis-box same-patient-box">
                  <p>Diaqnoz ID-si daxil et</p>
                  <form >
                    <input type="text" placeholder="ID" required>
                    <button type="submit">Daxil et</button>
                </form>
                </div>
              </div>
              <div class="patients-search">
                <p>Pasiyent axtar</p>
                <form>
                  <input type="text" placeholder='ID və ya ad'>
                  <button><img src="img/search.svg" alt=""></button>
                </form>
              </div>
              <div class="patients-result">
                <p>Bütün pasiyenlər</p>
                <div class="result-box">
                  <div class="item-result">
                    <div class="result-data">
                      <p>Adı: <span>Qambar Huseynov</span></p>
                      <p>Doğum tarixi:<span>xx/xx/xxxx</span></p>
                      <p>ID:<span>XXXXXXXX</span></p>
                      <a href="#" class="see_link">
                        Bax
                      </a>
                    </div>
                  </div>
                  <div class="item-result">
                    <div class="result-data">
                      <p>Adı: <span>Qambar Huseynov</span></p>
                      <p>Doğum tarixi:<span>xx/xx/xxxx</span></p>
                      <p>ID:<span>XXXXXXXX</span></p>
                      <a href="#" class="see_link">
                        Bax
                      </a>
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

    <!-- editPatient -->
    <form >
      <div class="modal fade addModal addPatient" id="addPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Pasiyent əlavə et</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <img src="img/close.svg" alt="">
                      </button>
                  </div>
                  <div class="modal-body">
                          <label>
                              <input type="text" placeholder="ID" required>
                          </label>
                          <button type="submit">
                            Əlavə et
                          </button>
                  </div>
              </div>
          </div>
      </div>
    </form>
    <!-- newPatient -->
    <div class="modal fade addModal newPatient" id="newPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pasiyent əlavə et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="img/close.svg" alt="">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-first">
                          <div class="block-first">
                            <input type="text" required placeholder="Pasiyentin adı">
                            <input type="text" required placeholder="Pasiyentin soyadı">
                          </div>
                          <div class="block-second">
                            <input type="email" required placeholder="Elektron mail">
                            <p>VƏ YA</p>
                            <div class="input-number-container">
                              <input type="text" disabled value="994">
                              <input type="text" name="phone" id="phone" placeholder="XX-XXX-XX-XX">
                            </div>
                          </div>
                          <p class="advise">Hər ikisini doldurmağınız məsləhətlidir.</p>
                        </div>
                        <div class="form-second">
                          <p class="label">Doğum tarixi</p>
                          <div class="select-box">
                            <select name="day" id="day">
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                            </select>
                            <span>/</span>
                            <select name="month" id="month">
                              <option value="jan">01</option>
                              <option value="feb">02</option>
                              <option value="mar">03</option>
                              <option value="apr">04</option>
                              <option value="may">05</option>
                              <option value="jun">06</option>
                              <option value="jul">07</option>
                              <option value="aug">08</option>
                              <option value="sep">09</option>
                              <option value="oct">10</option>
                              <option value="nov">11</option>
                              <option value="dex">12</option>
                            </select>
                            <span>/</span>
                            <select name="year" id="year">
                              <option value="1990">1990</option>
                              <option value="1991">1991</option>
                              <option value="1992">1992</option>
                              <option value="1993">1993</option>
                              <option value="1994">1994</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-third">
                          <p class="label">Cins</p>
                          <div class="radio-box">
                            <label class="custom-label">Kişi
                              <input type="radio" name="radio" required>
                              <span class="checkmark"></span>
                            </label>
                            <label class="custom-label">Qadın
                              <input type="radio" name="radio" required>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                        <button type="submit">
                          Əlavə et
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</section>

<?php
    include("includes/script.php");
?>
