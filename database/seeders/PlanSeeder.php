<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Premium Plan',
                'slug' => 'premium-plan',
                'stripe_plan' => 'price_1MFcI1CKXM38JzbHNehvEi2s',
                'price' => 10,
                'description' => 'Allows you to create posts',
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
