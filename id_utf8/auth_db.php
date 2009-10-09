<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdescription'] = 'Metode ini menggunakan tabel database eksternal untuk memeriksa apakah nama pengguna dan password yang dimasukkan adalah sah. Jika keanggotaan adalah keanggotaan baru, maka informasi dari field-field yang lain juga bisa dikopi ke Moodle.';
$string['auth_dbextrafields'] = 'Field-field ini adalah pilihan. Anda dapat memilih untuk memasukkan lebih dulu beberapa field-field pengguna dari Moodle dengan informasi dari <b>field-field database eksternal</b> yang Anda tentukan disini. <br />Jika Anda kosongkan, maka aturan default yang akan digunakan.<br />Pada kasus lainnya, pengguna akan dapat mengedit semua field-field ini setelah mereka login.';
$string['auth_dbfieldpass'] = 'Nama dari field yang berisi password';
$string['auth_dbfielduser'] = 'Nama dari field yang berisi nama pengguna';
$string['auth_dbhost'] = 'Komputer yang meng-host server database.';
$string['auth_dbname'] = 'Nama database itu sendiri';
$string['auth_dbpass'] = 'Password sama dengan nama pengguna di atas';
$string['auth_dbpasstype'] = 'Tentukan format yang akan digunakan oleh field password. Enkripsi MD5 sangat berguna untuk berhubungan dengan aplikasi web lainnya seperti PostNuke';
$string['auth_dbtable'] = 'Nama dari tabel pada database';
$string['auth_dbtitle'] = 'Gunakan database eksternal';
$string['auth_dbtype'] = 'Jenis database (Lihat <a href=\"../lib/adodb/readme.htm#drivers\">Dokumentasi ADOdb</a> untuk penjelasannya)';
$string['auth_dbuser'] = 'Nama pengguna yang mempunyai akses pembacaan ke database';