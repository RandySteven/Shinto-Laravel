<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['Shinto', 'Japan', 'Shrine', 'Temple', 'Anime', 'Tokyo', 'Kyoto', 'Shibuya']);
        $tags->each(function ($tag){
            Tag::create([
                'tag' => $tag,
                'slug' => \Str::slug($tag)
            ]);
        });
    }
}
