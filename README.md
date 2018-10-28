<p align="center">
    <h1 align="center">IPP Dashboard</h1>
    <br>
</p>

PEMASANGAN
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

### Pemasangan dengan Push GIT

pull repository ini kemudian buka pada CMD.
menggunakan perintah
```php
yii serve
```
kemudian server akan berjalan sesuai template yang ada.


KONFIGURASI DB
-------------

### Basis Data
Basis data yang digunakan selama pengembangan adalah MySQL 5.7.24

Buatlah pada server basis data basis data yang baru. Selama pengembangan basis data diberi nama :
```php
tugaskita
```

Kemudian pada file `config/db.php` ubah seperti berikut ini:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=tugaskita',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

kemudian buka direktori ini pada aplikasi Command Line. Kemudian lakukan migrasi basis data menggunakan perintah :
```php
yii migrate/up
```

kemudian basis data akan diinisialisasi langsung kedalam Basis Data yang ada
