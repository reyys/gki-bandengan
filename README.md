Anggota :

1. Reynaldo ( reyys ) 535220201 

2. Fuandry ( velosofy ) 535220152

3. Charles ( keokuri )  535220232

Panduan Menjalankan Source Code :
1. Silahkan download source code diatas dalam bentuk .zip atau dapat juga clone repository ini ( membuat folder baru, open terminal dan ketik `git clone https://github.com/reyys/gki-bandengan.git ./` )
2. Pada root project, masukkan file `.env` yang telah dilampirkan pada assignment
3. Buka terminal dan ketik `npm install`
4. Setelah instalasi modul package.json selesai, langkah selanjutnya adalah ketik `composer install` untuk menginstall dependency yang diperlukan untuk laravel
5. Setelah itu dapat membuat tabel pada database dengan command `php artisan migrate`
6. Langkah opsional : Dapat menjalankan `php artisan db:seed` untuk inisialisasi data
7. Kemudian jalankan program dengan mengetik `php artisan serve`
8. Kemudian dapat membuka terminal baru / split terminal, dan menjalankan command terakhir yaitu : `npm run dev` untuk menjalankan vite agar styling css dapat bekerja
9. Setelah itu landing page akan muncul pada `http://localhost:8000/` 
