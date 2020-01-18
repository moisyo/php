<?php
// faker-sample3.php
require_once 'vendor/autoload.php';
 
$faker = Faker\Factory::create('ja_JP');
 
$data = [];
 
for ($i = 0; $i < 30; $i++) {
    $data[] = [
        'name'     => $faker->name,            // 名前
        'zip'      => $faker->postcode,        // 郵便番号
        'pref'     => $faker->prefecture,      // 都道府県
        'city'     => $faker->city,            // 市
        'address'  => $faker->streetAddress,   // 住所
        'phone'    => $faker->phoneNumber,     // 電話番号
        'company'  => $faker->company,
    ];
}
 
// 出力
// echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), PHP_EOL;
$data1 = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
print($data1);
file_put_contents("test.json" , $data1);
