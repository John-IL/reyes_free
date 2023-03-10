<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artist;
use App\Models\ArtistType;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsTag;
use App\Models\NewsTagsDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArtistTypeSeeder::class);


        NewsCategory::factory(10)->create();
        NewsTag::factory(10)->create();
        News::factory(30)->create();
        NewsTagsDetail::factory(10)->create();
        Artist::factory(10)->create();
    }
}
