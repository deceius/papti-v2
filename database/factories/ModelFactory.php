<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Banner::class, static function (Faker\Generator $faker) {
    return [
        'en_title' => $faker->sentence,
        'en_subtitle' => $faker->sentence,
        'jp_title' => $faker->sentence,
        'jp_subtitle' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Technology::class, static function (Faker\Generator $faker) {
    return [
        'en_title' => $faker->sentence,
        'en_description' => $faker->text(),
        'jp_title' => $faker->sentence,
        'jp_description' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Product::class, static function (Faker\Generator $faker) {
    return [
        'en_name' => $faker->sentence,
        'en_description' => $faker->text(),
        'jp_name' => $faker->sentence,
        'jp_description' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\PresidentMessage::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CompanyHistory::class, static function (Faker\Generator $faker) {
    return [
        'year_date' => $faker->sentence,
        'en_description' => $faker->text(),
        'jp_description' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ProductApplication::class, static function (Faker\Generator $faker) {
    return [
        'en_title' => $faker->sentence,
        'en_description' => $faker->text(),
        'jp_title' => $faker->sentence,
        'jp_description' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CompanyProfile::class, static function (Faker\Generator $faker) {
    return [
        'company_name' => $faker->sentence,
        'date_established' => $faker->sentence,
        'capital' => $faker->sentence,
        'company_address' => $faker->sentence,
        'factory_address' => $faker->sentence,
        'sales_address' => $faker->sentence,
        'email_company' => $faker->sentence,
        'email_hr' => $faker->sentence,
        'email_sales' => $faker->sentence,
        'en_production_line' => $faker->sentence,
        'jp_production_line' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CertificationPolicy::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Recruitment::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Banner::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CompanyProfile::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Product::class, static function (Faker\Generator $faker) {
    return [
        'en_name' => $faker->sentence,
        'en_description' => $faker->text(),
        'jp_name' => $faker->sentence,
        'jp_description' => $faker->text(),
        'product_application_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\PresidentMessage::class, static function (Faker\Generator $faker) {
    return [
        'en_name' => $faker->sentence,
        'jp_name' => $faker->sentence,
        'en_message' => $faker->text(),
        'jp_message' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CertificationPolicy::class, static function (Faker\Generator $faker) {
    return [
        'en_ims' => $faker->text(),
        'jp_ims' => $faker->text(),
        'en_iso' => $faker->text(),
        'jp_iso' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Recruitment::class, static function (Faker\Generator $faker) {
    return [
        'en_header' => $faker->sentence,
        'jp_header' => $faker->sentence,
        'en_details' => $faker->text(),
        'jp_details' => $faker->text(),
        'en_vision' => $faker->text(),
        'jp_vision' => $faker->text(),
        'en_mission' => $faker->text(),
        'jp_mission' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Visitor::class, static function (Faker\Generator $faker) {
    return [
        'country_code' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Visitor::class, static function (Faker\Generator $faker) {
    return [
        'country_code' => $faker->sentence,
        'count' => $faker->sentence,
        
        
    ];
});
