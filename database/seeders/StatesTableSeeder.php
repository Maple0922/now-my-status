<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => 'Futo',
                'feel' => 5,
                'state' => 3,
                'message' => 'こんにちは'
            ],
            [
                'name' => 'Kana',
                'feel' => 8,
                'state' => 4,
                'message' => 'こんばんは'
            ],
        ];

        State::query()->delete();

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
