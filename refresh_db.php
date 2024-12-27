<?php
$db = new SQLite3('db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

$db->query('
CREATE TABLE IF NOT EXISTS "LANGUAGES" (
	"ISO_CODE" VARCHAR(2) PRIMARY KEY NOT NULL,
	"NAME" VARCHAR(50) NOT NULL UNIQUE
)');
$db->query('
CREATE TABLE IF NOT EXISTS "PHRASES" (
	"ID" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
	"LANGUAGE_ISO_CODE" VARCHAR(2) NOT NULL,
	"KEY" VARCHAR(100) NOT NULL UNIQUE,
	"VALUE" TEXT NOT NULL,

	FOREIGN KEY (LANGUAGE_ISO_CODE) REFERENCES LANGUAGES(ISO_CODE)
)');

$db->exec("BEGIN");
$db->query("DELETE FROM 'LANGUAGES'");

$db->query("INSERT INTO 'LANGUAGES' ('ISO_CODE', 'NAME') VALUES ('EN', 'English')");
$db->query("INSERT INTO 'LANGUAGES' ('ISO_CODE', 'NAME') VALUES ('BG', 'Български')");
$db->query("INSERT INTO 'LANGUAGES' ('ISO_CODE', 'NAME') VALUES ('PS', 'پښتو')");

$db->exec("COMMIT");


$db->exec("BEGIN");
$db->query("DELETE FROM 'PHRASES'");


// English
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-home', 'Home')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-services', 'Services')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-services-transportation', 'Transportation of Goods')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-services-vehicle', 'Vehicle Trading')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-about-us', 'About Us')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-find-us', 'Find Us')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'navbar-contacts', 'Contacts')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide1-heading', 'Helping you grow')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide1-paragraph', 'We are determined to provide you with the best so we can grow together.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide2-heading', 'Helping you grow')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide2-paragraph', 'We are determined to provide you with the best so we can grow together.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide3-heading', 'Helping you grow')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide3-paragraph', 'We are determined to provide you with the best so we can grow together.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'strip-heading', 'Your Partner in Global Trade')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'heading-top-paragraph-bottom-paragraph', 'Zaivod Logistics is a transportation company that specializes in hauling a wide range of goods across Europe and Asia. With our extensive network and expert knowledge, we provide reliable, flexible, and cost-effective solutions that help our clients achieve their goals and grow their businesses.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'find-us-heading', 'Where Can You Find Us?')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'find-us-paragraph', 'We are situated in the beautiful village named Voivodinovo. Here you can find our base ... .')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'services-heading', 'What We Offer')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'services-paragraph', 'At Zaivod Logistics, we provide comprehensive solutions for all your logistics needs. Our services include the reliable transportation of goods, ensuring your products reach their destination safely and on time. Additionally, we specialize in vehicle trading, offering a wide range of options for those looking to buy or sell vehicles. Whether you are a business looking to transport goods or an individual seeking a new vehicle, we have got you covered.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'card1-heading', 'Transportation of Goods')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'card1-paragraph', 'Deliver goods all over Europe and Asia safely with our services.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'card2-heading', 'Vehicle Retail')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'card2-paragraph', 'Buy quality Trucks and Cars from us.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-heading', 'Get in touch with Us')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-paragraph', 'We would love to answer all your questions regarding our future work together. You can write to us at <b>info@zaivodelogistics.com</b> or directly
in the form below.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-label-company', 'Company Name')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-label-first-name', 'First Name')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-label-last-name', 'Last Name')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-label-email', 'Email')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-label-phone', 'Phone')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-label-message', 'Message')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'form-submit', 'Send')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'footer-copyright', '© 2024 Zaivod Logistics, Ltd.')");




// Bulgarian
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-home', 'Начало')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-services', 'Услуги')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-services-transportation', 'Транспортиране на стоки')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-services-vehicle', 'Търговия с превозни средства')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-about-us', 'За нас')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-find-us', 'Намерете ни')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'navbar-contacts', 'Контакти')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'label-slide1-heading', 'Помагаме ви да растете')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'label-slide1-paragraph', 'Ние сме решени да предоставим на вас най-доброто, за да можем да растем заедно.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'label-slide2-heading', 'Помагаме ви да растете')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'label-slide2-paragraph', 'Ние сме решени да предоставим на вас най-доброто, за да можем да растем заедно.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'label-slide3-heading', 'Помагаме ви да растете')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'label-slide3-paragraph', 'Ние сме решени да предоставим на вас най-доброто, за да можем да растем заедно.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'strip-heading', 'Вашият партньор в международната търговия')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'heading-top-paragraph-bottom-paragraph', '„Зайвод Лоджистикс“ е транспортна компания, специализирана в превозването на широк спектър стоки из целия свят. С нашата обширна мрежа и експертни знания, ние предлагаме надеждни, гъвкави и икономически ефективни решения, които помагат на нашите клиенти да постигнат целите си и да развият бизнеса си.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'find-us-heading', 'Къде можем да ни намерите?')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'find-us-paragraph', 'Ние сме базирани в красивото село Воиводиново. Тук можете да видите седалището ни...')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'services-heading', 'Какво предлагаме')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'services-paragraph', 'В „Зайвод Лоджистикс“ предлагаме обширни решения за всички ваши нужди от логистика. Нашите услуги включват надежно превозване на стоки, което гарантира, че продуктите ви ще достигнат до дестинацията си сигурно и навреме. Освен това, ние специализирани в търговия с превозни средства и предлагаме широка гама от варианти за тези, които търсят да купят или продадат превозни средства. Независимо дали сте бизнес, търгуващ продуктите си, или физическо лице, търсещо ново превозно средство, ние ви обслужваме.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'card1-heading', 'Превозване на стоки')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'card1-paragraph', 'Предоставяме сигурно превозване на стоки в целия свят с нашите услуги.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'card2-heading', 'Търговия с превозни средства')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'card2-paragraph', 'Купете качествени камиони и автомобили от нас.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-heading', 'Свържете се с нас')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-paragraph', 'Ние бихме искали да отговорим на всички ваши въпроси относно нашата бъдеща работа заедно. Можете да пишете до нас на адрес info@zaivodelogistics.com или пряко във формата долу.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-label-company', 'Име на компанията')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-label-first-name', 'Първо име')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-label-last-name', 'Фамилия')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-label-email', 'Имейл')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-label-phone', 'Телефон')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-label-message', 'Съобщение')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'form-submit', 'Изпрати')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('BG', 'footer-copyright', '© 2024 Zaivod Logistics, Ltd.')");


$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-home', 'کور')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-services', 'خدمات')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-services-transportation', 'ټوکر پرواز')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-services-vehicle', 'ماشینونو تیجارت')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-about-us', 'موږ پورې')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-find-us', 'موځ پيدا کړی')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'navbar-contacts', 'تماسونه')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'label-slide1-heading', 'ستاسو وده مرسته کوو')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'label-slide1-paragraph', 'موږ له ستاسو سره غوره شی څاري کوو ترڅو موږ یوځای ووزی.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'label-slide2-heading', 'ستاسو وده مرسته کوو')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'label-slide2-paragraph', 'موږ له ستاسو سره غوره شی څاري کوو ترڅو موږ یوځای ووزی.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'label-slide3-heading', 'ستاسو وده مرسته کوو')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'label-slide3-paragraph', 'موږ له ستاسو سره غوره شی څاري کوو ترڅو موږ یوځای ووزی.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'strip-heading', 'ستاسو شریکه په نړیوال تجارت کې')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'heading-top-paragraph-bottom-paragraph', 'زیاود لوجستیکونه د یو ټرانسپورټ کمپنۍ په توګه دی چې په اروپا او آسيا کې یو ځانګړی لېږد لري. موږ د خپل مشهور شبکې او ځیرک معلوماتو سره، موږ باور وړ، لیکونکي او économیکونکو حلونه وړاندې کوو ترڅو ستاسو مشتریو ته د خپل لاملونو او وده کولو مرسته وکړي.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'find-us-heading', 'ستاسو موځ پيدا کړی')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'find-us-paragraph', 'موږ په ښکلی کلي کې يوځای ده چې په وویوودینوو کې ده. دلته تاسو کولی شئ موږ د بنسټ وکړی.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'services-heading', 'موږ څه وړاندې کوو')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'services-paragraph', 'په زایووډ لوجستیکونو کې، موږ د تاسو د لوجستیک لپاره ټول حلونه وړاندې کوو. زمونږ خدمتونو کې د عاجلو توکو لېږد، د تاسو د محصولاتو لپاره د خوندي او پورې تګ راتګضامن دی، او د ماشینونو د تیجارت لپاره هم ځانګړی کړی ده. له یو کاروبار څخه چې توکي لېږدوي تر یو فرد پورې چې یو نوې ماشین غواړي، موږ تاسو پورې ورسئ.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'card1-heading', 'ټوکر پرواز')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'card1-paragraph', 'ټول توکي په اروپا او آسيا کې د موږ له خدمت څخه خوندي لېږد کړی.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'card2-heading', 'ماشینونو تیجارت')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'card2-paragraph', 'له موږ څخه د calidad ټرک او ماشینونه واخلی.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-heading', 'له موږ سره اړیکه ونیسی')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-paragraph', 'زه موږ وفادار او که تاسو موږ ته خپل پوښتنې ورسوئ. تاسو کولی شئ موږ ته د <b>info@zaivodelogistics.com</b> یا لاندې څخه لیک وکړی.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-label-company', 'د شرکت نوم')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-label-first-name', 'لومړی نوم')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-label-last-name', 'وروستی نوم')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-label-email', 'ایمیل')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-label-phone', 'تلفون')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-label-message', 'پیغام')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'form-submit', 'لیږل')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('PS', 'footer-copyright', ' ۲۰۲۴ زایووډ لوجستیکونه، لتد.')");


$db->exec("COMMIT");
