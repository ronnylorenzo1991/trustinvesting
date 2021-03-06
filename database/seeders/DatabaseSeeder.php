<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SectionType;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('images/posts');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(10)->create();
        $this->call(PostSeeder::class);
        $this->call(SectionTypeSeeder::class);
    }
}
