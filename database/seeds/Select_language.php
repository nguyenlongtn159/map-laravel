<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class Select_language extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('select_languages')->insert([
            array( 'lang' => 'eng'),
            array( 'lang' => 'vn')
        ]);
    }
}
