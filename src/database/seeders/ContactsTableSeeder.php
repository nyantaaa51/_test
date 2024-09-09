<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
    'id' => '1',
    'category_id' => '1'
    'first_name' => 'tony',
    'last_name' => 'tony',
    'gender' => '1'
    'email' => 'tony@gmail.com',
    'tell' => 1111,
    'address' => 'American'
    'building' => 'tony',
    'detail' => 'tony',

   ];
   DB::table('cotancts')->insert($param);
   $param = [
    'first_name' => 'tony',
    'last_name' => 'tony',
    'gender' => 'tony',
    'email' => 'tony',
    'tell' => 35,
    'address' => 'American'
    'building' => 'tony',
    'categories' => 'tony',
    'detail' => 'tony',
   ];
   
   DB::table('contacts')->insert($param);
    }

}
