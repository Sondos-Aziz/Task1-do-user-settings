<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_infos')->insert([
            'id'=> '1',
            'firstName' => 'Sondos ',
            'secondName' => 'AbelAziz ',
            'thirdName' => 'Mohammad ',
            'fourthName' => 'Abu Harb ',
            'idNum' => '0435468 ',
            'functionalNum' => '6548974 ',
            'specialization' => 'software Development ',
            'socialStatus' => 'single ',
            'gender' => '1 ',
            'mobile' => '05951456 ',
            'address' =>'Gaza-alNaser Street',
            'dateOfHiring'=>'2019-05-22',
            'dateBirth'=>'1998-05-17',
            'phone' => '0599831456',
            'email' => 'sondos@gmail.com',
            'image' => 'im1.jpg'
        ]);
    }
}
