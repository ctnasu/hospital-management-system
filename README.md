Kullanıcının amacı, daha önceki yanıtta bahsettiğimiz ve GitHub bağlantısını verdiği "Hospital Management System" (Hastane Yönetim Sistemi) projesi için GitHub'a koyabileceği bir README dosyası metni oluşturmaktır.

Bu proje, kullanıcının yüklediği "rapor-2.pdf" dosyasındaki BLM210 PROGRAMLAMA LAB. II PROJE 3'e karşılık gelmektedir. Ayrıca kullanıcının CV'sinde de bu projenin PHP ve MySQL ile yapıldığı belirtilmektedir.

Önceki projede olduğu gibi, rapor dosyasındaki gereksinimleri ve CV'deki teknolojileri kullanarak kapsamlı bir README metni oluşturacağım.

README Metni Oluşturma Planı:

Başlık: Proje adını ve kısa açıklamasını belirt.

Hakkında: Projenin amacını, temel fonksiyonlarını (hasta, doktor, yönetici işlemleri) rapor-2.pdf'ten yola çıkarak özetle.

Kullanılan Teknolojiler: CV'den PHP ve MySQL'i ve rapordan VTYS ve dil önerilerini kullanarak listele.

Temel Özellikler: Randevu, rapor ve kullanıcı işlemlerini, güvenlik ve arayüz detaylarını (AJAX, Dashboard) rapor-2.pdf'ten alarak listele.

Veritabanı Tasarımı: Temel tabloları ve normalizasyon vurgusunu ekle.

Kurulum: Kullanıcıya rehberlik edecek genel kurulum adımlarını ekle.Harika! Bu proje, CV'nizde de belirttiğiniz gibi PHP ve MySQL kullanılarak geliştirdiğiniz "Hospital Management System" (Hastane Yönetim Sistemi) projesidir.

Bu proje, yüklediğiniz "rapor-2.pdf" dosyasındaki gereksinimlere dayanmaktadır. Bu detayları kullanarak, projenizin amacını ve teknik gücünü sergileyen kapsamlı bir README metni hazırlayalım:

🏥 Hastane Takip ve Yönetim Sistemi (Hospital Management System)

Bu proje, hastane operasyonlarını kolaylaştırmak ve optimize etmek amacıyla geliştirilmiş tam özellikli bir web uygulamasıdır. Sistem, hastaların kayıt oluşturabileceği, doktorlarla randevu alabileceği ve tıbbi raporları güvenli bir şekilde yönetebileceği merkezi bir platform sunar.

Kocaeli Üniversitesi Bilgisayar Mühendisliği dersi kapsamında, Nesne Yönelimli Programlama (OOP) prensipleri ve ilişkisel veritabanı tasarımı esas alınarak geliştirilmiştir.

Kullanılan Teknolojiler

Kategori	Teknoloji	Açıklama
Backend	PHP	Orta seviye yetkinliklerimle geliştirilmiş sunucu tabanlı mantık.
Veritabanı	MySQL	İlişkisel veri tabanı yönetimi ve tasarımı için kullanılmıştır.
Ön Yüz	HTML/CSS/JavaScript	Kullanıcı arayüzü geliştirmeleri ve dinamik etkileşimler için kullanılmıştır.
VTYS Prensipleri	SQL	İleri düzey SQL bilgisi kullanılarak tablolar arası ilişkiler kurulmuştur.
Temel Özellikler (Rapor Gereksinimleri)

Proje, hastane yönetiminin kilit noktalarını ele alan kapsamlı özelliklere sahiptir:

Rol Tabanlı Yönetim: Sistemde Hasta, Doktor ve Yönetici olmak üzere üç farklı rol bulunmaktadır.

Randevu Yönetimi: Hastalar doktorlarla randevu alabilir ve mevcut randevularını iptal edebilir; sistem, veri tabanındaki güncellemeleri kontrol eder.

Veri Yönetimi (CRUD): Arayüz üzerinden hasta ve doktor ekleme/silme işlemleri, ilgili tablolarda tetikleyici (trigger) fonksiyonlarıyla güncel tutulur.

Tıbbi Raporlama:

Tıbbi raporlar, sistemde görüntü dosyaları olarak saklanır ve veritabanında bu dosyalara işaret eden URL'ler tutulur.

Raporlar ayrıca JSON formatında da yedeklenir.

Dinamik Arayüz (AJAX): Kullanıcı arayüzünde sayfa yenilenmeden dosya yükleme ve indirme işlemleri için AJAX çağrıları kullanılmıştır.

Güvenlik: Hassas laboratuvar verilerinin güvenliğini sağlamak için HTTPS protokolü ve uygun şifreleme yöntemleri uygulanmıştır.

Dashboard'lar: Hasta ve doktor profillerinde, tıbbi geçmişlerini ve randevu geçmişlerini görebilmeleri için özel dashboard'lar yer alır.

Veritabanı Tasarımı

Veritabanı, 1NF, 2NF ve 3NF normalizasyon kurallarına uyularak ilişkisel bir yapıda tasarlanmıştır.

Temel Tablolar: Hastalar, Doktorlar, Yöneticiler, Randevular ve Tıbbi Raporlar.

İlişkisel Yapı: Her bir tablo için Primary Key ve Foreign Key tanımlanarak tablolar arası tutarlılık sağlanmıştır.

Kurulum (Local Development)

Projenin yerel ortamda çalıştırılması için aşağıdaki adımları takip ediniz:

Gereksinimler:

Bir web sunucusu ortamı (örneğin: XAMPP, WAMP veya MAMP).

MySQL veritabanı.

İndirme: Bu GitHub deposunu klonlayın veya zip olarak indirin.

Kurulum: Proje dosyalarını web sunucunuzun kök dizinine (örneğin: XAMPP'te htdocs klasörüne) yerleştirin.

Veritabanı: MySQL'de bir veritabanı oluşturun ve database/schema.sql dosyasını (veya benzer bir dosyayı) içe aktararak tabloları oluşturun.

Ayarlar: Veritabanı bağlantı bilgilerini içeren yapılandırma dosyasını (örneğin: config.php) kendi yerel ayarlarınıza göre düzenleyin.

Çalıştırma: Tarayıcınızda projenin adresine giderek uygulamayı başlatın.
GİRİŞ SAYFASI
<img width="1470" alt="335790972-520d12d3-4fd2-4a0b-a479-ca69da170eab" src="https://github.com/user-attachments/assets/ba5e4999-ebd5-4aa0-94a0-348474fdf757">
DOKTOR SAYFASI
<img width="1272" alt="335791668-e834146a-1af6-4b26-b751-992c7b1a0dd2" src="https://github.com/user-attachments/assets/5604d282-a607-45f2-a20d-0500c7497ec8">
<img width="1203" alt="335791793-f54d24cb-c942-4e7e-833e-cd65be4fe8c8" src="https://github.com/user-attachments/assets/14863f1d-780c-435f-b173-47de6bc9e850">
HASTA SAYFASI
<img width="1453" alt="335791580-8744a71c-eb43-4bb2-8766-d011ac260c66" src="https://github.com/user-attachments/assets/7bd56153-b786-4933-b381-ae2295120f6e">
<img width="1443" alt="335791581-1563d8cc-a336-4ca7-ba20-d9552d62081d" src="https://github.com/user-attachments/assets/b6286e5a-ad3b-4f94-967a-670b573c1cdb">
YÖNETİCİ SAYFASI
<img width="1262" alt="335791873-baf27fcd-43ce-4c14-abd9-d1d4a8253832" src="https://github.com/user-attachments/assets/df762460-ba61-433b-9946-5c238348a61a">
<img width="1227" alt="335791875-ee6b1786-68b3-4a8a-b23e-20982c6cda37" src="https://github.com/user-attachments/assets/6e420142-c869-43c2-91a3-9bdef9583217">
<img width="1206" alt="335791882-2ca72547-1226-449a-a0e2-95e565e3c685" src="https://github.com/user-attachments/assets/b46582a4-9301-4194-a299-59956fc27754">
