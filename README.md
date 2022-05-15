## Laravel + UIkit + CRUD jQuery & Ajax

- Menggunakan front-end framework <https://getuikit.com>
- CRUD JQuery Ajax.
- Pagination.
- Pencarian.
- Sweet Alert.

## Instalasi

### Clone / Download this repository

```shell
git clone https://github.com/XaRhezX/crud.git
```

Setelah clone / download repositori ini, langkah selanjutnya adalah menginstal semua ketergantungan yang diperlukan oleh laravel dan laravel-mix.

```shell
composer install && npm install && npm run dev
```

### Next Step

Sebelum kita memulai server web, pastikan kita sudah membuat kunci aplikasi, konfigurasikan file `.env` dan lakukan migrasi.

```shell
# create copy of .env
cp .env.example .env
# create laravel key
php artisan key:generate
# laravel migrate & seed some data
php artisan migrate:fresh --seed
# Storage Link
php artisan storage:link
```

### Default User

```shell
Login : dev@root.test
Pass  : dev@root.test
```

### Laravel Sail (Optional)

```shell
./sail up
./sail artisan key:generate
./sail artisan migrate:fresh --seed
./sail artisan storage:link
```

## License

This repo is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
