<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class Lang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
          DB::table('langs')->insert([
              array( 'key' => 'home', 'eng' => 'Home Page','vn'  => 'Trang chu'),
              array( 'key' => 'error', 'eng' => 'Not page','vn'  => 'Loi trang')

            ]);



    }


}
