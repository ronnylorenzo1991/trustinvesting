<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = [
            'es' => $this->faker->unique()->sentence(),
            'en' => $this->faker->unique()->sentence(),
            'ch' => $this->faker->unique()->sentence(),
        ];
        $extract = [
            'es' => $this->faker->text(250),
            'en' => $this->faker->text(250),
            'ch' => $this->faker->text(250),
        ];
        $body = [
            'es' => $this->faker->text(2000),
            'en' => $this->faker->text(2000),
            'ch' => $this->faker->text(2000),
        ];

        return [
            'name' => json_encode($name),
            'slug' => Str::slug($name['es']),
            'extract' => json_encode($extract),
            'body' => json_encode($body),
            'status' => $this->faker->randomElement([1,2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
