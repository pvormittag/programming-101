<?php

use Illuminate\Database\Seeder;

use App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $people = collect([
            'patrik' => Models\Person::create([
                'name' => 'Patrik',
                'email' => 'pvormittag@engrain.com',
                'gender' => 'male',
            ]),
            'courtney' => Models\Person::create([
                'name' => 'Courtney',
                'email' => 'chall@engrain.com',
            ]),
        ]);

        $more_people = factory(Models\Person::class, 100)->create();

        $more_people = factory(Models\Person::class, 50)->create([
            'gender' => 'female',
        ]);
    }
}
