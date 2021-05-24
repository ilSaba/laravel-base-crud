<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        for ($i=0; $i < count($comics); $i++) {
            $comic = $comics[$i];

            $comic_obg = new Comic();
            $comic_obg->title = $comic['title'];
            $comic_obg->description = $comic['description'];
            $comic_obg->thumb = $comic['thumb'];
            $comic_obg->price = $comic['price'];
            $comic_obg->series = $comic['series'];
            $comic_obg->sale_date = $comic['sale_date'];
            $comic_obg->type = $comic['type'];
            $comic_obg->save();
        }
    }
}
