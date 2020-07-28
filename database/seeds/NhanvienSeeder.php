<?php

use Illuminate\Database\Seeder;

class NhanvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nhanvien::class, 10)->create();

    }
}
