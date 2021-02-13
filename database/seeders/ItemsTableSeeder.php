<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['text' => '🍽  食事中', 'color' => 'orange'],
            ['text' => '☕️  休憩中', 'color' => 'green'],
            ['text' => '👔  就活中', 'color' => 'light-blue'],
            ['text' => '💻  仕事中', 'color' => 'blue'],
            ['text' => '🛠  開発中', 'color' => 'blue-grey'],
            ['text' => '📖  課題中', 'color' => 'lime'],
            ['text' => '✏️  勉強中', 'color' => 'teal'],
            ['text' => '🌙  睡眠中', 'color' => 'purple'],
            ['text' => '💦  多忙中', 'color' => 'cyan'],
            ['text' => '🌴  外出中', 'color' => 'yellow'],
            ['text' => '🙇‍♀️  生理中', 'color' => 'pink'],
            ['text' => '😞  絶望中', 'color' => 'red'],
        ];

        Item::query()->delete();

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
