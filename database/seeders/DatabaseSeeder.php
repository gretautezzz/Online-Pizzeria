<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Dramblys',
        'email' => 'dramb@gmail.com',
        'password' => Hash::make('1234'),
      ]);

      //Cats lentele
      $cats = ['Snacks', 'Desserts', 'Drinks', 'Other', 'Pizzas'];

      foreach($cats as $cat) {

      DB::table('cats')->insert([
        'title' => $cat,
      ]);
     } 
    }
}
