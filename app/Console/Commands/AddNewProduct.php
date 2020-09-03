<?php

namespace App\Console\Commands;

use App\Category;
use App\Product;
use Illuminate\Console\Command;

class AddNewProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new product';


    /**
     * Execute the console command.
     *
     * @return string
     */
    public function handle()
    {
        $name = $this->ask('What is the product\'s name?');
        $description = $this->ask('Enter product description');
        $price = $this->ask('What is this product\'s price?');

        if ($this->confirm('Create this product: ' . $name . '?')) {
            Product::create([
                'name' => $name,
                'category_id' => Category::inRandomOrder()->first()->id,
                'description' => $description,
                'price' => $price,
            ]);

            return $this->info('Product created successfully');
        }
        $this->warn('Product was not created');
    }
}
