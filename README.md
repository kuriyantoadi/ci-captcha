# ci-captcha

Captcha adalah sebuah keamanan yang memungkinkan hacker tidak dapat melakukan serangan dengan teknik brute force. Dengan adanya tambahan captcha ini user perlu memasukan kode acak terlebih dahulu.

## Petunjuk Instalasi
- Contoh ini menggunakan file codeiginiter 3 dengan versi xampp 5.6 atau php 5.6 untuk versi codeiginiter 4 atau versi php lebih tinggi bisa menyesuaikan.
- Jika menggunakan Linux atau dipasang di Server, lakukan perubahan permission 777 pada directory **/captcha**.


## Petunjuk Code Captcha
Ubah file autoload.php **/application/config/autoload.php**
- `$autoload['libraries'] = array('database', 'session');`
- `$autoload['helper'] = array('url','captcha');`

Tambah File 
- /application/controllers/Komentar.php 
- /application/view/komentar/index.php

Tambah Directory
- /captcha 

## Sumber 
https://codeigniter.com/userguide3/helpers/captcha_helper.html#using-the-captcha-helper

https://www.youtube.com/watch?v=GK-ZSmfvS5k&ab_channel=rajaazian