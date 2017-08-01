<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DonutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new Carbon();

        // This is a supply of very fresh donuts!  They were baked just today.
        DB::table('donuts')->insert([
            [
                'flavor' => 1,
                'quantity' => 18,
                'baked_at' => $now->toDateTimeString()
            ],
            // This is a supply of kind-of fresh donuts.  They're 1 day old.
            [
                'flavor' => 2,
                'quantity' => 11,
                'baked_at' => $now->subDay()->toDateTimeString()
            ],
            // This is a supply of old donuts.  They're 2 days old.
            [
                'flavor' => 3,
                'quantity' => 6,
                'baked_at' => $now->subDay()->toDateTimeString()
            ],
            // This is a supply of very old donuts.  These hockey pucks are 3 days old.
            [
                'flavor' => 4,
                'quantity' => 2,
                'baked_at' => $now->subDay()->toDateTimeString()
            ]
        ]);
    }
}
