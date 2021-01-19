<?php

namespace Database\Factories;

use App\Models\Cast;
use Illuminate\Database\Eloquent\Factories\Factory;

class CastFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cast::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' =>$this->faker->numberBetween(1,1000),
            'cast_name' => $this->faker->firstNameFemale,
            'cast_age' => $this->faker->numberBetween(18,40),
            'cast_description'   => $this->faker->realText(100),
            'cast_image'   => 'https://source.unsplash.com/random',
        ];
    }
}
