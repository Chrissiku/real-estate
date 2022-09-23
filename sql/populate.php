<?php

use App\App;
use Faker\Factory;
use App\Core\Database;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$faker = Factory::create();

$pdo = App::getDatabase()->getInstance();

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("TRUNCATE TABLE user");
$pdo->exec("TRUNCATE TABLE property");
$pdo->exec("TRUNCATE TABLE property_type");
$pdo->exec("TRUNCATE TABLE booking");
$pdo->exec("TRUNCATE TABLE owner");
$pdo->exec("TRUNCATE TABLE tenant");
$pdo->exec("TRUNCATE TABLE piece_detail");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");


$password = password_hash('12345', PASSWORD_BCRYPT);

$pdo->exec("INSERT INTO user SET first_name='jimmy', 
                                last_name='bazele', 
                                username='jim01', 
                                email='jimmy@gmail.com', 
                                user_type=1, password='" . $password ."', 
                                isActive=1
        ");

$pdo->exec("INSERT INTO user SET first_name='chris', 
                                last_name='siku', 
                                username='chris01', 
                                email='chris@gmail.com', 
                                user_type=1, password='" . $password ."', 
                                isActive=0
        ");

for($i = 0; $i < 20; $i++) {
    $pdo->exec("INSERT INTO property SET address='{$faker->address} ' ");
}  

for ($i=1; $i < 20; $i++) { 
    $pdo->exec("INSERT INTO piece_detail SET 
    salons='{$faker->randomDigitNotNull}',
    rooms='{$faker->randomDigitNotNull}', 
    bath_rooms='{$faker->randomDigitNotNull}', 
    swimming_pools='{$faker->randomDigitNotNull}' ");
}

for($i=1; $i < 30; $i++) {
        $fname = trim($faker->lastName);
        $lname = trim($faker->lastName);
        $email = trim("$fname$lname@gmail.com");
        $isActive = rand(0,1);
        
        $pdo->exec("INSERT INTO owner SET first_name='{$fname}', 
        last_name='{$lname}', 
        phone_number='949494930', 
        email='{$email}', 
        password='{$password}', 
        isActive='{$isActive}' ");
}

for ($i=1; $i <= 25; $i++) {
        $fname = trim($faker->lastName);
        $lname = trim($faker->lastName);
        $email = trim("$fname$lname@gmail.com");
        $isActive = rand(0,1); 

        $pdo->exec("INSERT INTO tenant SET 
        first_name='{$fname}',
        last_name='{$lname}',
        phone_number='448493',
        email='{$email}',
        password='{$password}',
        isActive='{$isActive}',
        created_at=NOW() 
        ");
}

for($i=1; $i<=25;$i++) {
        $isActive = rand(0,1);

        $pdo->exec("INSERT INTO property SET
        address='{$faker->address}',
        piece_detail_id='".rand(1,38)."',
        property_type_id='".rand(1,5)."',
        description='Lorem ipsum dolor sit amet consectetur adipisicing elit. A, cum officiis? Praesentium molestias repudiandae tenetur nostrum, vel autem animi nisi veritatis quidem minima deleniti eius veniam minus repellendus porro sapiente cumque id temporibus expedita amet aut in quasi nobis soluta? Consequatur consequuntur culpa vero maiores eius libero. Sapiente voluptatem voluptates labore amet sint dolorum a explicabo voluptatibus animi veritatis.',
        price= '{$faker->numberBetween(100, 5000)}',
        isFree='{$isActive}'
        ");
}

for($i=1;$i<=25;$i++) {
        $isPayed = rand(0,1);

        $pdo->exec("INSERT INTO booking SET
        in_date='{$faker->date()} {$faker->time()}',
        out_date='{$faker->date()} {$faker->time()}',
        property_id ='".rand(1,25)."',
        tenant_id ='".rand(1,25)."',
        isPayed='{$isPayed}'
        ");
}

