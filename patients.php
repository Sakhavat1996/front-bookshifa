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
                    <p class="modal-title" id="new-patient-title">Pasiyent əlavə et</p>
                    <p class="modal-title d-none" id="confirm-title">Nömrəni təsdiqlə</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="img/close.svg" alt="">
                    </button>
                </div>
                <!-- yeni new Patient -->
                <div class="modal-body">
                    <form class="form-first">
                        <div class="block-first">
                          <label for="name">
                            Pasiyentin adı
                            <div class="form-group">
                              <input type="text" name="name" id="name" required placeholder="Pasiyentin adını daxil edin">
                            </div>
                          </label>
                          <label for="surname">
                            Pasiyentin soyadı
                            <div class="form-group">
                              <input type="text" name="surname" id="surname" required placeholder="Pasiyentin soyadını daxil edin">
                            </div>
                          </label>
                          <label for="phone">
                            Pasiyentin nömrəsi
                            <div class="form-group input-number-container">
                              <input type="text" disabled value="994">
                              <input type="text" name="phone" id="phone" required placeholder="XX-XXX-XX-XX">
                            </div>
                          </label>
                          <p class="info-form">
                          “Sonrakı” düyməsinə basdıqdan sonra pasiyentin nömrəsinə təsdiqləmə kodu göndəriləcək.
                          </p>
                        </div>
                        <button type="submit">
                          <p>Sonrakı</p>
                          <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 9.14204L16.075 9.14204L11.5375 14.1245C11.3253 14.3578 11.2232 14.6587 11.2537 14.9609C11.2842 15.263 11.4447 15.5418 11.7 15.7357C11.9553 15.9297 12.2844 16.023 12.6149 15.9952C12.9454 15.9673 13.2503 15.8205 13.4625 15.5872L19.7125 8.73065C19.7545 8.67611 19.7922 8.61882 19.825 8.55924C19.825 8.5021 19.825 8.46781 19.9125 8.41068C19.9692 8.27965 19.9988 8.14017 20 7.99929C19.9988 7.8584 19.9692 7.71892 19.9125 7.58789C19.9125 7.53076 19.9125 7.49647 19.825 7.43934C19.7922 7.37975 19.7545 7.32246 19.7125 7.26792L13.4625 0.411395C13.345 0.282397 13.1978 0.178658 13.0314 0.107554C12.8651 0.0364513 12.6836 -0.000268936 12.5 2.86102e-06C12.2079 -0.000518799 11.9249 0.0924721 11.7 0.262836C11.5734 0.358768 11.4688 0.476589 11.3921 0.609546C11.3154 0.742502 11.2682 0.887981 11.2531 1.03766C11.238 1.18733 11.2553 1.33826 11.3041 1.48179C11.3529 1.62532 11.4322 1.75865 11.5375 1.87412L16.075 6.85653L1.25 6.85653C0.918478 6.85653 0.600536 6.97693 0.366116 7.19124C0.131695 7.40554 0 7.69621 0 7.99929C0 8.30236 0.131695 8.59303 0.366116 8.80733C0.600536 9.02164 0.918478 9.14204 1.25 9.14204Z" fill="white"/>
                          </svg>
                        </button>
                    </form>
                    <form class="form-second" data-autosubmit="false" autocomplete="off">
                      <div class="second-main-box">
                        <div class="second-info-box">
                          <div class="sec-img"><img src="img/form-second.svg" alt=""></div>
                          <p><span class="send-number">+994 050 392 94 31</span> nömrəsinə 4 rəqəmli təsdiqləmə kodu göndərildi.</p>
                        </div>
                        <div class="otp-inputs">
                          <input type="text" id="digit-1" maxlength='1' name="digit-1" data-next="digit-2">
                          <input type="text" id="digit-2" maxlength='1' name="digit-2" data-previous="digit-1" data-next="digit-3">
                          <input type="text" id="digit-3" maxlength='1' name="digit-3" data-previous="digit-2" data-next="digit-4">
                          <input type="text" id="digit-4" maxlength='1' name="digit-4" data-previous="digit-3">
                        </div>
                        <div class="timer-container">
                          <p id="countdown"></p>
                          <div class="resend-box">
                            <div class="send-btn-box">
                              <p>Kod gəlməyib?</p>
                              <button type="button">Yeni kod göndər.</button>
                            </div>
                            <p class="info-send-duration"><span>60</span>saniyə sonra yenidən göndərə bilərsiniz.</p>
                          </div>
                        </div>
                        <div class="second-form-submit-box">
                          <button type="button">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 6.85796H3.925L8.4625 1.87555C8.67467 1.64218 8.77675 1.34131 8.74628 1.03914C8.7158 0.736965 8.55527 0.458234 8.3 0.264265C8.04473 0.070295 7.71563 -0.0230245 7.3851 0.00483557C7.05456 0.0326956 6.74967 0.179453 6.5375 0.412823L0.2875 7.26935C0.245451 7.32389 0.207849 7.38118 0.175 7.44076C0.175 7.4979 0.175 7.53218 0.0875002 7.58932C0.0308421 7.72035 0.0011764 7.85983 0 8.00071C0.0011764 8.1416 0.0308421 8.28108 0.0875002 8.41211C0.0875002 8.46924 0.0874998 8.50353 0.175 8.56066C0.207849 8.62025 0.245451 8.67754 0.2875 8.73208L6.5375 15.5886C6.65503 15.7176 6.8022 15.8213 6.96856 15.8924C7.13491 15.9635 7.31636 16.0003 7.5 16C7.79207 16.0005 8.07511 15.9075 8.3 15.7372C8.42657 15.6412 8.5312 15.5234 8.60789 15.3905C8.68458 15.2575 8.73183 15.112 8.74692 14.9623C8.76202 14.8127 8.74466 14.6617 8.69586 14.5182C8.64705 14.3747 8.56775 14.2414 8.4625 14.1259L3.925 9.14347H18.75C19.0815 9.14347 19.3995 9.02307 19.6339 8.80876C19.8683 8.59446 20 8.30379 20 8.00071C20 7.69764 19.8683 7.40697 19.6339 7.19267C19.3995 6.97836 19.0815 6.85796 18.75 6.85796Z" fill="#4098FF"/>
                            </svg>
                            <p>
                             Geri qayıt
                            </p>

                          </button>
                          <button type="submit" disabled>
                            <p>Bitir</p>
                          </button>
                        </div>
                      </div>
                    </form>
                </div>

                <!-- kohne-newPatient -->
                <!-- <div class="modal-body">
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
                              <input type="text" disabled="" value="994">
                              <input type="text" required placeholder="Telefon nömrəsi">
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
                </div> -->
            </div>
        </div>
    </div>

    
</section>

<?php  include("includes/script.php");?>
<script>
  $(function(){
    let arr = [];
    const btnSubmit = $('.second-form-submit-box button[type="submit"]');
    $(".otp-inputs").find('input').each(function() {
      $(this).on('keyup', function(e) {
        var parent = $('.form-second');
        if(e.keyCode === 8 || e.keyCode === 37) {
          var prev = parent.find('input#' + $(this).data('previous'));
          arr.splice(prev ,1)
        } 
        else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105) ) {
          var next = parent.find('input#' + $(this).data('next'));
          if(next.length) {
            $(next).focus();
          }
          else {
            if(parent.data('autosubmit')) {
              parent.submit();
            }
          }
          arr.push(next)
        }
        else{
          return false;
        }

        arr.length >= 4 ? btnSubmit.removeAttr('disabled') : btnSubmit.attr('disabled' ,true)
      });
    });

    $(".otp-inputs input").on('focus',function(){
      $(".otp-inputs input").removeClass('error');
    })
    

    // resend otp start

    // otp 60 seconds resend function -start
    function countdown(){
        var seconds = 59;
        function tick(){
          seconds--;
          $('.info-send-duration span').text("0:" + (seconds < 10 ? "0" : "") + String(seconds))
          if (seconds > 0) {
            setTimeout(tick, 1000);
          } 
          else {
            $('.send-btn-box button').removeAttr('disabled');
            $('.info-send-duration').removeClass('show')
          }
        }
        tick();
    }
    // otp 60 seconds resend function - end

    $('.send-btn-box button').on('click',function(){
      $(this).attr('disabled' , true);
      $('.info-send-duration').addClass('show');
      countdown()
    })

    // resend otp end


    // back to first form
    $('.second-form-submit-box button[type="button"]').on('click',function(){
      $('.form-first').show();
      $('.newPatient .modal-title#confirm-title').addClass('d-none');
      $('.newPatient .modal-title').show();
      $('.form-second').hide()
    })

    // phone mask start
    $('#phone').inputmask("(099) 999 99 99")
    // phone mask end
  })

  // 5min countdown-start
  const startingMin = 5;
  let time = startingMin * 60;

  const countDown = document.getElementById('countdown');
  let refreshIntervalId = setInterval(updateCountdown, 1000);

  function updateCountdown(){
     let minutes = Math.floor(time / 60);
     let seconds = time % 60;

     seconds = seconds < 10 ? '0' + seconds : seconds;
     minutes = minutes < 10 ? '0' + minutes : minutes;
     countDown.innerHTML = `${minutes} : ${seconds}`;
     time--;
     if (time < 0) {
          clearInterval(refreshIntervalId);
          countDown.innerHTML = 'Vaxt bitdi';
          countDown.classList.add('up')
      }
  }
  // 5min countdown-end

</script>
