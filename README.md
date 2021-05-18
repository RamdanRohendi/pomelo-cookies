# Website E-Commerce Pomelo Cookies

### Dibuat dengan/memakai :
- Laravel v7.3.0
- Laravel UI
- phpmyadmin
- Bootstrap v4.5.0

### Cara me running projek :
> #### Pastikan Telah Terinstall :
> - XAMPP
> - Composer
> - NPM
> - GIT

#### Langkah-langkah :
1. Copy link github ini :
   > https://github.com/RamdanRohendi/pomelo-cookies
2. Di File Manager masuk ke dalam folder **C:\xampp\htdocs**
3. Klik kanan, lalu pilih git bash 

4. Ketik perintah dibawah ini lalu enter :
   > git clone https://github.com/RamdanRohendi/pomelo-cookies

   Untuk meng clone / mendownload projek dari github.
   <br> <br>

5. Ketik :
   > cd pomelo-cookies
   
   Lalu enter, untuk masuk ke folder pomelo-cookies di git-bash nya.
   <br> <br>

6. Ketik kedua perintah berikut, lalu enter :
   > composer install

   > npm install

7. Setelah proses instalasi dari kedua perintah itu selesai, ketikan perintah berikut :
   > cp .env.example .env

8. Buka http://localhost/phpmyadmin/ di browser anda.
9. Masuk ke halaman database
   Dan ketik db_pomelo_cookies untuk nama database nya, lalu klik create
   
10. Setelah databasenya terbuat, ketik
    > php artisan migrate

    Di git bash yang tadi.

11. Ketik :
    > php artisan serve

    Lalu buka http://127.0.0.1:8000/ di browser.

Dan itu dia Langkah-langkah untuk konfigurasi awal dan merunning projeknya.

Kedepannya anda tinggal :
1. Masuk ke folder pomelo-cookies
2. Klik kanan dan pilih git bash
3. Ketik :
   > php artisan serve

   Lalu enter.