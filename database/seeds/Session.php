<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
