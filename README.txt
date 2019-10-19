Assalamualaikum wr. wb.

Penjelasan web :
1. Menggunakan XAMPP
2. Menggunakan Framework Laravel versi 5.7

Berikut saya lampirkan cara penggunaan website : 
1. Folder web bisa diletak kan di sembarang path jika sudah menginstall composer
2. silahkan buat database di phpmyadmin dengan nama movie
3. database bisa di import dan bisa dengan menggunakan perintah artisan, file sql sudah saya sediakan dalam folder ini dengan nama movie.sql, jika menggunakan composer, silahkan menggunakan CMD(windows user), masuk ke dalam folder, dan tinggal ketikan perintah "php artisan migrate" untuk membuat tabel database, dan untuk membuat damidata, silahkan ketikan "php artisan db:seed --class=MoviesTableSeeder". jika sudah selesai maka database sudah siap digunakan
4. untuk menjalankan website, dengan menggunakan perintah artisan di CMD, masuk ke folder web, silahkan ketik "php artisan serve", dan untuk mengakses dapat menjalankan dengan memasukan url "http://127.0.0.1:8000/" pada browser masing-masing maka akan muncul halaman HOME.
5. untuk mengakses halaman admin, silahkan klik "login" di pojok kanan atas halaman home. untuk login gunakan "username : admin, Password : 12345". halaman admin dibatasi hak akses nya dengan menggunakan middleware fitur yang disediakan laravel
6. pada halaman admin dapat mengelola data film
7. pada halaman home, ada fitur sortby, saya menggunakan jquery dan ajax untuk fitur sortby, cara penggunaan nya tinggal pilih di selectbox sortby menurut type apa, dan di background ajax akan bekerja memperbarui halaman home sesuai yang dibutuhkan
8. pada halaman home juga ada fitur groupby, disini saya membuat groupby menurut genre. juga menggunakan jquery dan ajax, penggunaan nya cukup mudah yaitu dengan memilih checkbox sesuai yang dibutuhkan dan ajax akan berjalan di background untuk memperbarui halaman
9. fitur comment dan rating, saya juga menggunakan jquery dan ajax.
 
Terimakasih banyak atas perhatiannya, semoga penjelasan ini dapat dimengerti dan website sesuai dengan yang dibutuhkan