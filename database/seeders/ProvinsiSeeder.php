<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(base_path() . '/sql/provinsi.csv', 'r');
        $payload = [];

        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $payload[] = [
                'nama_provinsi' => $data[0],
            ];
        }
        fclose($file);

        $acc = 0;
        foreach (array_chunk($payload, 1000) as $p) {
            DB::table('provinsis')->insert($p);
            $acc += count($p);
            $this->command->line('Processed ' . $acc . ' rows');
        }
    }
}
