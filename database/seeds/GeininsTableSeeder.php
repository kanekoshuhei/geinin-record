<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Geinin;

class GeininsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $geinin = new Geinin;
        $geinin->name = '';
        $geinin->office = '';
        $geinin->save();
    }
}
