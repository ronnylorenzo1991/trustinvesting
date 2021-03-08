<?php

namespace Database\Seeders;

use App\Models\SectionType;
use Illuminate\Database\Seeder;

class SectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            0 => [
                'name'        => 'hero',
                'description' => 'image with over text and button',
            ],
            1 => [
                'name'        => 'cards',
                'description' => 'cards for process information',
            ],
            3 => [
                'name'        => 'history',
                'description' => 'description with image and text',
            ],
            4 => [
                'name'        => 'square text',
                'description' => 'Square with text and another elements',
            ],
            5 => [
                'name'        => 'members',
                'description' => 'Square with text and another elements',
            ],
            6 => [
                'name'        => 'footer',
                'description' => 'Footer section. Only at the end',
            ],
        ];

        foreach ($types as $type) {
            SectionType::create([
                'name'        => $type['name'],
                'description' => $type['description'],
            ]);
        }
    }
}
