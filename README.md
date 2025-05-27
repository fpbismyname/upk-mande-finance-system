## Cara Setup Project

1. setelah di git clone, buka terminal lau ketik 'cd .\upk-mande-finance-system\'
2. salin .env.example, jadi .env
3. ganti bagian ini di .env, hapus semua pagarnya
   --> DB_CONNECTION=mysql, DB_HOST=127.0.0.1, DB_PORT=3306, DB_DATABASE=upk_mande_database, DB_USERNAME=root, DB_PASSWORD=
   ganti dan sesuai sama port nama database settingan xampp
4. Ganti nama website di .env bagian APPNAME jadi 'upk_mande_finance_system'

## Cara install pertama pull project

1. composer install
2. php artisan key:generate
3. npm install

## Cara migrate setup database

1. Buka 1 terminal baru
   a.ketik 'php artisan migrate --seed'

## Cara run website di browser

1. Buka 2 terminal baru
   a. ketik 'npm run dev' lalu enter (Untuk build tailwindnya agar bisa di styling)
   b. ketik 'php artisan serve' lalu enter, lalu masuk ke http://127.0.0.1:8000 dan test webnya di browser

## Cara ganti tampilan halaman

1. Untuk ganti tampilan halaman admin ada di resources/views/page/admin
2. Untuk ganti tampilan halaman user ada di resources/views/page/user

## Akun untuk login

1. Admin
    - email : adminupkmande@gmail.com
    - pass : adminupkmande999
1. User
    - email : budi@gmail.com
    - pass : budifer9921
