<?php
session_start(); // Oturumu başlat

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

try {
    // PDO üzerinden veritabanına bağlanma
    $conn = new PDO("mysql:host=$servername;port=3308;unix_socket=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock;dbname=$dbname;charset=utf8mb4", $username, $password);
    // PDO hata modunu istisna olarak ayarla
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // JSON dosyasını oku
    $json_data = file_get_contents('randevu_listesi.json');
    // JSON verisini diziye dönüştür
    $randevular = json_decode($json_data, true);

    // Veritabanına randevuları ekleyin
    foreach ($randevular as $randevu) {
        // Veri öğelerini al
        $RandevuTarihi = $randevu['RandevuTarihi'];
        $RandevuSaati = $randevu['RandevuSaati'];
        $HastaID = $randevu['HastaID'];
        $DoktorID = $randevu['DoktorID'];
        $YoneticiID = $randevu['YoneticiID'];
        $CalistigiHastane = $randevu['CalistigiHastane'];
        $UzmanlikAlani = $randevu['UzmanlikAlani'];

        // SQL sorgusunu hazırla
        $sql = "INSERT INTO randevular (RandevuTarihi, RandevuSaati, HastaID, DoktorID, YoneticiID, CalistigiHastane, UzmanlikAlani) 
                VALUES (:RandevuTarihi, :RandevuSaati, :HastaID, :DoktorID, :YoneticiID, :CalistigiHastane, :UzmanlikAlani)";
        
        // SQL sorgusunu hazırla
        $stmt = $conn->prepare($sql);

        // Bağlantıyı yapılandır
        $stmt->bindParam(':RandevuTarihi', $RandevuTarihi);
        $stmt->bindParam(':RandevuSaati', $RandevuSaati);
        $stmt->bindParam(':HastaID', $HastaID);
        $stmt->bindParam(':DoktorID', $DoktorID);
        $stmt->bindParam(':YoneticiID', $YoneticiID);
        $stmt->bindParam(':CalistigiHastane', $CalistigiHastane);
        $stmt->bindParam(':UzmanlikAlani', $UzmanlikAlani);

        // SQL sorgusunu çalıştır
        $stmt->execute();

        echo "Yeni randevu başarıyla eklendi\n";
    }
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>