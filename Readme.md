# KawalCorona

Class wrapper untuk mengambil data dari RestApi api.kawalcorona.com

## Cara Install
```
composer require pravodev/kawalcorona-laravel
```

Jika tidak menggunakan auto-discovery, tambahkan ServiceProvider ke array providers di config/app.php
```
Pravodev\KawalCoronaLaravel\ServiceProvider::class
```
dan tambahkan facade ke array aliases di file config/app.php
```
'KawalCorona' => Pravodev\KawalCoronaLaravel\Facades\KawalCorona::class
```
## Cara Penggunaan

```
<?php

// pake facades
$data_provinsi = KawalCorona::getProvinces();


// tanpa facades
use Pravodev\KawalCoronaLaravel\KawalCorona;

$corona = new KawalCorona;
$corona->getProvinces();

```

secara default, data yang diambil akan dicache selama 1 jam.

Untuk mengubah waktu lama cachenya :
```
php artisan vendor:publish --provider="Pravodev\KawalCoronaLaravel\ServiceProvider"

```

ubah value remember di config/kawalcorona.php 

```
return [
    'remember' => 3600
]
```

## List method yang tersedia
| Method         | Deskripsi                                                     |
|----------------|---------------------------------------------------------------|
| getProvinces() | Untuk mengambil data kasus di beberapa provinsi di Indonesia. |
| getIndonesia() | Mengambil total kasus se-Indonesia.                           |
| getPositif()   | Mengambil total yang positif di seluruh dunia.                |
| getSembuh()    | Mengambil total yang sembuh di seluruh dunia.                 |
| getMeninggal() | Mengambil total yang meninggal di seluruh dunia.              |
