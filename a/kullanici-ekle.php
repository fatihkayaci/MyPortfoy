<?php include("header.php"); ?>


      <!-- Content Area Start -->

    <main class="contentArea">
        
        <!-- Kullanici Ekle Area Start -->

        <div class="kullaniciEkleme">
          <div class="kullaniciEklemeIc">

            <h4>Kullanıcı Ekleme</h4>
            <form method="post" id="UserAdd">
              <div class="ekle-row">
                <div class="ekle-col">
                  <p>Ad Soyad :</p>
                  <p class="info">Kullanıcının Adını ve Soy adını giriniz.</p>
                </div>
                <div class="ekle-col">
                  <input class="toplu-input" type="text" id="adSoyad" name="adSoyad" required="">
                </div>
              </div>

              <hr class="horizontal dark">

              <div class="ekle-row">
                <div class="ekle-col">
                  <p>T.C. Kimlik No :</p>
                  <p class="info">Kullanıcının T.C. Kimlik Numarasını giriniz.</p>
                </div>
                <div class="ekle-col">
                  <input class="toplu-input" type="text" id="tcNo" name="tcNo" required="">
                </div>
              </div>

              <hr class="horizontal dark">

              <div class="ekle-row">
                <div class="ekle-col">
                  <p>Telefon Numarası :</p>
                  <p class="info">Kullanıcının Telefon Numarasını giriniz.</p>
                </div>
                <div class="ekle-col">
                  <input class="toplu-input" type="text" id="phonenumber" name="phonenumber" required="">
                </div>
              </div>

              <hr class="horizontal dark">

              <div class="ekle-row">
                <div class="ekle-col">
                  <p>E-Posta :</p>
                  <p class="info">Kullanıcının E-Posta Adresini giriniz.</p>
                </div>
                <div class="ekle-col">
                  <input class="toplu-input" type="email" id="email" name="email" required="">
                </div>
              </div>

              <hr class="horizontal dark">

              <div class="ekle-row">
                <div class="ekle-col">
                  <p>Araç Plakası :</p>
                  <p class="info">Kullanıcının Araç Plakasını giriniz.</p>
                </div>
                <div class="ekle-col">
                  <input class="toplu-input" type="text" id="plaka" name="plaka" required="">
                </div>
              </div>

              <hr class="horizontal dark">

              <div class="ekle-row">
                <div class="ekle-col">
                  <p>Cinsiyet :</p>
                  <p class="info">Kullanıcının Cinsiyetini seçiniz.</p>
                </div>
                <div class="ekle-col">
                    <div class="ekleDrop">
                    <input type="text" id="gender" class="toplu-input" readonly>
                    <div class="options">
                        <div class="option">Erkek</div>
                        <div class="option">Kadın</div>
                        <div class="option">Diğer</div>
                    </div>
                  </div>
                </div>
              </div>

              <hr class="horizontal dark">

              <div class="ekleBtnArea">
                <label for="tekrar">Tekrar eklemek ister misiniz</label>
                <input type="checkbox" id="again" name="again">
                <button class="table-btn EditBtn">İptal</button>
                <button class="table-btn yellowBtn">Kaydet</button>
              </div>
            </form>
            

          </div>
        </div>

        <!-- Kullanici Ekle Area End -->

      </main>

    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/tableshort.js"></script>
<script src="assets/js/useradd.js"></script>

</body>
</html>