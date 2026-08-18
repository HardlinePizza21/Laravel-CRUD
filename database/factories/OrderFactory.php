<?php

namespace Database\Factories;

use App\Models\Order;
use App\Enums\OrderStatus;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $statusOptions = ["traveling", "canceled", "waitingpayment", "arrive"];
        return [
            'status' => fake()->randomElement(OrderStatus::cases())->value,
            'total' => fake()->numberBetween(1000, 100000),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
