<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id'=> $this->faker->numberBetween(1,10),
            'is_active'=>1,
            'author'=> $this->faker->name,
            'photo'=> 'placeholder.jpg',
            'email'=>$this->faker->safeEmail,
            'body'=>$this->faker->paragraphs(1, true),
        ];
    }
}
