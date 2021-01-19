<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' =>Admin::factory(),
            'category_id' => $this->faker->numberBetween(1, 10),
            'company_name' => $this->faker->company,
            'company_pref'   => $this->faker->prefecture,
            'company_description'=> $this->faker->realText(100),
            'company_image'   => 'https://source.unsplash.com/random',
            'company_tel'   => $this->faker->phoneNumber,
        ];
    }
}
