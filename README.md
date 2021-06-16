# Tugas Pra Internship Batch 6 Kampus Indonesia Divisi Backend Developer
  Membuat website sederhana dengan Framework Laravel yang merepresentasikan website Kampus Indonesia

## Pra-Config
  Project ini menggunakan
  * PHP versi 8.0.5
  * Node versi 14.17.0
  * NPM package versi 6.14.13  

## Config
  * buat `.env` dengan meng-copy konten dari `.env.example`
  * Setup virtual host (menggunakan XAMPP)
    * copy code snippet berikut pada file `xampp\apache\conf\extra\httpd-vhosts.conf`
      ```
      <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/pra-intern-kampus-indonesia/public"
        ServerName prainternki.llc
        <Directory "C:/xampp/htdocs/pra-intern-kampus-indonesia/public">
        </Directory>
      </VirtualHost>
      ```
      Silakan ubah directory sesuai dengan letak clone repository ini.
    * Tambahkan `127.0.0.1 prainternki.llc` pada file `C:/Windows/System32/drivers/etc/hosts`
  * Setup database
    * Project Laravel ini menggunakan MySQL
    * Secara default, project ini terhubung dengan DB `pra_intern_ki`
    * Silakan buat DB dengan nama tersebut
    * ATAU buat DB dengan nama lain dan mengubah koneksi DB pada file `.env`
  * Setup mailing untuk reset password
    * Project Laravel ini menggunakan `https://mailtrap.io/` untuk testing mailing
    * Silakan configurasi mailing di `.env`
    <pre>
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=703c8476bf88eb
    MAIL_PASSWORD=bc07f6e91e684b
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="noreply@kampusindonesia.co.id"
    MAIL_FROM_NAME="${APP_NAME}"
    </pre>

### Deployment
  * Jalankan `composer install`
  * Jalankan `npm install` kemudian `npm run dev`
  * Jalankan `php artisan migrate`
  * Jalankan `php artisan db:seed --class=ProvinsiSeeder` jika ingin beberapa Provinsi sudah di-seed
  * Buka `http://prainternki.llc`

### Extra
  * Terdapat fitur blogging yang mengimplementasikan library `Canvas`
  * Jalankan `php artisan canvas:install`
  * Lalu jalankan `php artisan storage:link`
