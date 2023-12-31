<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = Config("comics");
        foreach ($comics as $comic) {
            $newComics = new Comic();
            $newComics->fill($comic);
            $newComics->save();
        }
    
    }
}