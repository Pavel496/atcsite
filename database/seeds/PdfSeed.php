<?php

use Illuminate\Database\Seeder;

class PdfSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => null, 'information' => null, 'file' => '/tmp/phpx7cvbF', 'created_by_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Pdf::create($item);
        }
    }
}
