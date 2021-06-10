<?php

namespace Database\Factories;

use App\Models\CommentReply;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentReply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'is_active'=>1,
            'author'=> $this->faker->name,
            'photo'=> 'placeholder.jpg',
            'email'=>$this->faker->safeEmail,
            'body'=>$this->faker->paragraphs(1, true),
        ];
    }
}
