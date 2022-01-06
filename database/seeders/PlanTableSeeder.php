<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'                  => 'Monthly Plan',
            'slug'                  => 'monthly-plan',
            'stripe_name'           => 'monthly',
            'stripe_product_id'     => 'prod_KHQ2poPAl1mUAq',
            'stripe_price_id'       => 'price_1JcrCqHn1ZP9v84gXkov0jiR',
            'price'                 => 2,
            'abbreviation'          => '/month',
        ]);

        Plan::create([
            'name'                  => 'Yearly Plan',
            'slug'                  => 'yearly-plan',
            'stripe_name'           => 'yearly',
            'stripe_product_id'     => 'prod_KHQ3UvIHi7kRjK',
            'stripe_price_id'       => 'price_1JcrDOHn1ZP9v84ggS46ozMa',
            'price'                 => 20,
            'abbreviation'          => '/yearly',
        ]);
    }
}
