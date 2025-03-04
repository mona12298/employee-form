<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'age' => $this->faker->numberBetween(18,60),
            'joined_date' => $this->faker->dateTimeBetween('-30 years', 'today')->format('Y-m-d'),
            'department'  => $this->faker->randomElement(['営業', '開発', '総務', '人事']),

        ];
    }
}
