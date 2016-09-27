<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;

class RangerSeered extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Ranger::class, 10)->create();
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('ranger')->insert([ //,
                'name' => $faker->name,
                'email' => $faker->unique()->email,
            ]);
        }
    }
}
