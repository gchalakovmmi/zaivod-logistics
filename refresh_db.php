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
$db->query("INSERT INTO 'LANGUAGES' ('ISO_CODE', 'NAME') VALUES ('PS', 'ﭖښﺕﻭ')");

$db->exec("COMMIT");


$db->exec("BEGIN");
$db->query("DELETE FROM 'PHRASES'");

$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide1-heading', 'Helping you grow')");
$db->query("INSERT INTO 'PHRASES' ('LANGUAGE_ISO_CODE', 'KEY', 'VALUE') VALUES ('EN', 'label-slide1-paragraph', 'We are determined to provide you with the best so we can grow together.')");
$db->exec("COMMIT");
