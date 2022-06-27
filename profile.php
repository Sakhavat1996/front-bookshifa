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
                    <p class="current-point">Profil</p>
                </div>
            </div>
            <div class="profile-container w-100">
              <div class="profile-information profile-box">
                <p class="profile-title">Şəxsi məlumatlar</p>
                <form>
                  <div class="first-row same-row disabled-row">
                    <label >
                      Ad
                      <input type="text" value="Elmir" disabled>
                    </label>
                    <label >
                      Soyad
                      <input type="text" value="Elmirov" disabled>
                    </label>
                  </div>
                  <div class="second-row disabled-row">
                    <label>Doğum tarixi</label>
                    <div class="group-inputs">
                      <input type="text" value="12" disabled>
                      <input type="text" value="Yanvar" disabled>
                      <input type="text" value="1995" disabled>
                    </div>
                    <div class="profile-help-box">
                      <p>Ad, soyad və doğum tarixini dəyişmək üçün bizlə əlaqə saxlayın.</p>
                    </div>
                  </div>
                  <div class="third-row same-row">
                    <label >
                      Əlaqə nömrəsi
                      <input type="number" placeholder="(XXX) XX -XXX-XX-XX" value="+994 (50) 555-55-55" required disabled>
                    </label>
                    <label >
                      Elektron mail
                      <input type="email" placeholder="Email daxil edin" value="qambarqambarov@qmbr.com" required disabled>
                    </label>
                  </div>
                  <button type="submit">
                    Düzəliş et
                    <img src="img/pen-white.svg" alt="">
                  </button>
                </form>
              </div>
              <div class="profile-password profile-box">
                <p class="profile-title">Şifrənizi dəyişin</p>
                <form>
                  <label for="old-password">
                    Köhnə şifrə
                    <input type="password" id="old-password">
                  </label>
                  <label for="new-password">
                    Yeni şifrə
                    <input type="password" id="new-password">
                  </label>
                  <label for="renew-password">
                    Yeni şifrəni təkrarlayın
                    <input type="password" id="renew-password">
                  </label>
                  <button type="submit">
                    Yadda saxla
                  </button>
                </form>
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
