<?php

use Illuminate\Database\Seeder;

class Map extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('maps')->insert([
            array('name'=>'Hanoi','address'=>'Vietnam','lat'=>21.0227731,'lng'=>105.801944,'type'=>'capital'),
            array('name'=>'Ho Chi Minh','address'=>'Vietnam','lat'=>10.769,'lng'=>106.4141621,'type'=>'city'),
            array('name'=>'Bangkok','address'=>'Thailand','lat'=>13.7251096,'lng'=>100.3529108,'type'=>'capital'),
            array('name'=>'Texas','address'=>'United States','lat'=>31.1006782,'lng'=>-104.5712519,'type'=>'state')

        ]);
    }
}
