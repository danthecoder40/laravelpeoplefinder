<?php

use Faker\Generator as Faker;


$factory->define(App\Person::class,function (Faker $faker)){


return[

'first_name'=>$faker->firstName,
'lastname_name'=>$faker->LastName,
'email'=>$faker->safeEmail,
'phone'=>$faker->phonNumber,
'city'=>$faker->city,



];





});