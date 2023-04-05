Nama                    : LAKSONO PRASETYO
Perguruan Tinggi        : UNIVERSITAS BRAWIJAYA
Stack yang Digunakan    : PHP, PHPMYADMIN, BOOSTRAP
Cara menjalankan        :

A. Pendahuluan
    1. Buka lakukan clone repositori ini.
    2. Buka XAMPP Control Panel
    3. Jalankan Apache dan Mysql.
    4. Buka web browser dan masukkan link "localhost/phpmyadmin".
    5. Buat database baru pada PHPMYADMIN.
    6. Buka file repositori ini pada text editor yang Anda gunakan pada device Anda.
    7. Atur file nama, user, serta password PHPMYADMIN anda pada file .env.
    8. Buka terminal pada project ini dan jalankan perintah "php artisan serve".
    6. Buka web browser dan masukkan link "localhost:8000".

B. Akses Tanpa Login
    1. Buka web browser dan masukkan link "localhost:8000".
    2. Tekan item - item yang tersedia pada navbar ex: "kontak kami", "login".
    
C. Login dan Register
    1. Tekan item login pada navbar.
    2. Bila Anda belum punya akun silahkan tekan tulisan "daftar di sini"
       2.1 Masukkan data diri pribadi Anda pada halaman register dan tekan tombol "register".
       2.2 Jika proses register berhasil maka Anda akan kembali ke halaman utama dalam posisi login.
    3. Bila Anda sudah memiliki akun silahkan masukkan email dan password yang telah Anda daftarkan sebelumnya dan tekan tombol "login".
    4. Bila Anda berhasil login maupun regiser, Anda akan dialihkan ke halaman utama dengan tombol login pada navbar berubah menjadi tombol dropdown dengan ikon orang.
D. Edit profli.
    1. Tean tombol drop down dengan ikon orang pada navbar, lalu tekan baris yang bertuliskan nama Anda (username yang telah didaftarkan).
    2. Anda akan dialuhkan ke halaman 'dit profile' yang menampilkan data diri pribadi Anda
    4. Lakukan perubahan data (meliputi : nama, email, foto) pada halaman tersebut lalu tekan tombol "ubah data".
    5. Anda dapat menghapus foto profile Anda dengan cara tekan tombol hapus.
       5.1 Tombol "hapus" akan muncul bila foto profil Anda terisi.
       5.2 Jika foto profil Anda kosong, maka akan digantikan dengan ikon orang.
E. CRUD kategori
    1 READ
        1.1 Tekan tombol drop down dengan ikon orang pada navbar, lalu tekan baris yang bertuliskan "data".
        2.1 Tekan tombol "kategori" yang berada di sebelah kanan tombol "produk".
    2. CREATE
        2.1 Tekan tombol "tambah"
        2.2 Masukkan nama kategori yang Anda inginkan lalu tekan tombol "tambahkan"
    3. UPDATE
        3.1 Tekan tombol "ubah" pada baris data yang ingin Anda ubah nama kategorinya.
        3.2 Masukkan nama kategori yang Anda inginkan lalu tekan tombol "ubah".
    4. DELETE
        4.1 Tekan tombol "hapus" pada baris data yang ingin Anda hapus kategorinya.
F. CRUD Produk
    1 READ
        1.1 Tekan tombol drop down dengan ikon orang pada navbar, lalu tekan baris yang bertuliskan "data".
        2.1 Tekan tombol "produk" yang berada di sebelah kiri tombol "kategori".
    2. CREATE
        2.1 Tekan tombol "tambah"
        2.2 Masukkan data produk pada form yang Anda inginkan lalu tekan tombol "tambahkan"
    3. UPDATE
        3.1 Tekan tombol "ubah" pada baris data yang ingin Anda ubah data produknya.
        3.2 Masukkan perubahan data produk yang Anda inginkan lalu tekan tombol "ubah".
    4. DELETE
        4.1 Tekan tombol "hapus" pada baris data yang ingin Anda hapus produknya.
G. Logout
    1. Tekan tombol drop down dengan ikon orang pada navbar, lalu tekan baris yang bertuliskan "logout".

Catatan :
1. User yang tidak melakukan login terlebih dahulu maka tidak akan dapat emngakses beberapa endpoint berikut :
    '/logout'               -> untuk logout user.
    '/update'               -> untuk mengubah data pada user.
    '/edit'                 -> untuk berpindah kehalamaan edit user.
    '/deletePhoto'          -> untuk menghapus foto profil user.
    '/product'              -> untuk menampilkan halaman produk pada database.
    '/product/add'          -> untuk menambahkan produk baru.
    '/product/edit/{id}'    -> untuk mengubah data pada produk.
    '/product/delete/{id}'  -> Untuk menghapus produk.
    '/category'             -> untuk menampilkan halaman kategori pada database.
    '/category/add'         -> untuk menambahkan kategori baru.
    '/category/edit/{id}'   -> untuk memperbarui data pada kategori.
    '/category/delete/{id}' -> untuk menghapus kategori.
2. Jika user tidak melakukan login maka user hanya dapat mengakses beberapa endpoint berikut :
    '/'                     -> untuk menampilkan homepage
    'ourContact'            -> untuk menampilkan halaman 'kontak kami'
    'register'              -> untuk menampilkan halaman register.
    'login'                 -> untuk berpindah ke halaman login.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
