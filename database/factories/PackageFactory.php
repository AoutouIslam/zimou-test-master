<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\PackagesStatuses;
use App\Models\DeliveryTypes;
use App\Models\Commune;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $start_date =  date('2019-11-20 10:39:00');
        $end_date =  date('2023-01-5 00:39:00');

        $packages_status_ids = PackagesStatuses::pluck('id');
        $delivery_types_ids = DeliveryTypes::pluck('id');
        $commune_ids = Commune::pluck('id');
        return [
            //
        
            'uuid' => fake()->uuid(),  
            'tracking_code' => Str::random(10),
            'commune_id' => fake()->randomElement($commune_ids),
            'delivery_type_id'  => fake()->randomElement($delivery_types_ids),
            'status_id' => fake()->randomElement($packages_status_ids), 
            'address' => fake()->address(),
            'can_be_opened' => fake()->boolean(),
            'name' => fake()->name(), 
            'client_first_name' => fake()->firstName(),
            'client_last_name' => fake()->lastName(),
            'client_phone' => fake()->unique->phoneNumber(),
           // 'client_phone2' => fake()->unique->phoneNumber(),
            'cod_to_pay' => fake()->numberBetween(2300,21000),
            'commission' => fake()->numberBetween(300,4500),
            'status_updated_at' => fake()->dateTimeBetween($start_date,$end_date) ,
            'delivered_at' => fake()->dateTimeBetween($start_date,$end_date),
            'delivery_price' => fake()->numberBetween(500,1300),
            'extra_weight_price' => fake()->numberBetween(0,1300),
            'free_delivery' => fake() ->boolean(),
            'partner_cod_price' => fake()->numberBetween(0,1300),
            'partner_delivery_price' => fake()->numberBetween(0,1300),
            'partner_return' => fake()->numberBetween(0,1300),
            'price' => fake()->numberBetween(0,1300),
            'price_to_pay' => fake()->numberBetween(1900,3500),
            'return_price' => fake()->numberBetween(200,550),
            'total_price' => fake()->numberBetween(1900,35000),
            'weight' => fake()->numberBetween(100,4500)
        
        ];
    }
}
