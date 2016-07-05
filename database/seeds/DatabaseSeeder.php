<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       $this->call('Lang');
        $this->call('Session');

    }
}
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
class Session extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sessions')->insert([
            array( 'lang' => 'eng'),
            array( 'lang' => 'vn')
        ]);
    }
}

