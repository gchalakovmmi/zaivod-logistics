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
$db->query("INSERT INTO 'LANGUAGES' ('ISO_CODE', 'NAME') VALUES ('UR', 'ﺎﻔﻏﺎﻨﻳ')");

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


// Urdu
// Navbar
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-home', 'گھر')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-services', 'سروسز')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-services-transportation', ' سامان کی نقل و حمل')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-services-vehicle', 'گاڑیوں کی تجارت')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-about-us', 'ہمارے بارے میں')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-find-us', 'ہمہیں کہاں تلاش کریں؟')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'navbar-contacts', ' رابطہ کرنا')");

// Slide Labels
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'label-slide1-heading', 'آپ کو بڑھنے میں مدد')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'label-slide1-paragraph', 'ہم آپ کو بہترین فراہم کرنے کے لئے quyết شدہ ہیں تاکہ ہم ایک ساتھ بڑھ سکیں.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'label-slide2-heading', 'آپ کو بڑھنے میں مدد')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'label-slide2-paragraph', 'ہم آپ کو بہترین فراہم کرنے کے لئے quyết شدہ ہیں تاکہ ہم ایک ساتھ بڑھ سکیں.')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'label-slide3-heading', 'آپ کو بڑھنے میں مدد')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'label-slide3-paragraph', 'ہم آپ کو بہترین فراہم کرنے کے لئے quyết شدہ ہیں تاکہ ہم ایک ساتھ بڑھ سکیں.')");

// Strip and Top Paragraph
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'strip-heading', 'عالمی تجارت میں آپ کا ساتھی')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'heading-top-paragraph-bottom-paragraph', 'زایوڈ لاگسٹکس ایک نقل و حمل کی کمپنی ہے جو یورپ اور ایشیا بھر میں مختلف سامان کی نقل و حمل میں مہارت رکھتی ہے۔ ہمارے وسیع نیٹ ورک اور ماہر علم کے ساتھ، ہم قابل اعتماد، لچکدار اور مسابقتی حل فراہم کرتے ہیں جو ہماری موکلوں کو اپنے مقاصد حاصل کرنے اور اپنی کاروباریں بڑھانے میں مدد کرتے ہیں۔')");

// Find Us
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'find-us-heading', 'ہم کو کہاں تلاش کریں؟')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'find-us-paragraph', 'ہم خوبصورت گاؤں وویوڈینوو میں واقع ہیں۔ یہاں آپ ہماری بیس... کو تلاش کر سکتے ہیں.')");

// Services
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'services-heading', 'ہم کیا پیش کرتے ہیں')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'services-paragraph', 'زاائد لاگسٹکس میں، ہم اپنی تمام لاگسٹک ضروریات کے لئے جامع حل پیش کرتے ہیں۔ ہماری سروسز میں سامان کی نقل و حمل شامل ہے، یقینی بناتے ہوئے کہ آپ کے مصنوعات محفوظ طریقے سے اور وقت پر پہنچائی جائیں۔ ہم گاڑیوں کی تجارت میں بھی مہارت رکھتے ہیں، جو گاڑیوں کی خریداری یا فروخت کے لئے مختلف آپشنز پیش کرتے ہیں۔')");

// Cards
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'card1-heading', 'سامان کی نقل و حمل')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'card1-paragraph', ' یورپ اور ایشیا بھر میں ہمارے سروسز کے ساتھ محفوظ طریقے سے سامان کی نقل و حمل.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'card2-heading', 'گاڑیوں کی ریٹیل')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'card2-paragraph', 'ہمارے پاس سے ٹرک اور کars کار کی chất کی خریداری کریں.')");

// Form
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-heading', 'ہم سے رابطہ کریں')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-paragraph', 'ہم اپنے آئندہ کام کے بارے میں آپ کے تمام سوالات کا جواب دینے سے خوش ہوں گے۔  آپ ہمیں <b>.info@zaivodelogistics.com</b> پر لکھ سکتے ہیں یا نیچے دیئے گئے فارم کو بھر سکتے ہیں.')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-label-company', 'کمپنی کا نام')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-label-first-name', 'پہلا نام')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-label-last-name', 'آخری نام')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-label-email', 'ای میل')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-label-phone', 'فون')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-label-message', 'پیغام')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'form-submit', 'Изпрати')");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('UR', 'footer-copyright', '© 2024 Zaivod Logistics, Ltd.')");


$db->exec("COMMIT");
