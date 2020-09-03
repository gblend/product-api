<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class AddNewCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {name} {photo_url=N\A}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a product category';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $category = Category::create([
            'name' => $this->argument('name'),
            'photo' => $this->argument('photo_url'),
        ]);
        $this->info('Added: '.$category->name);
    }
}
