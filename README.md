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

### Deployment
  * Jalankan `composer install`
  * Jalankan `npm install` kemudian `npm run dev`
  * Jalankan `php artisan migrate`
  * Buka `http://prainternki.llc`
