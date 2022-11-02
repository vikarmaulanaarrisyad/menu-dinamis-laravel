<?php

namespace Database\Seeders;

use App\Models\Submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submenu::create(
            [
                'name' => 'Pembelian',
                'menu_id' => 2,
                'link' => '#',
                'route_name' => 'pembelian.index',
                'icon' => 'fas fa',
                'is_main_submenu' => 1,
            ],
        );

        Submenu::create(
            [
                'name' => 'Penjualan',
                'menu_id' => 2,
                'link' => '#',
                'route_name' => 'penjualan.index',
                'icon' => 'fas fa',
                'is_main_submenu' => 2,
            ],
        );

        Submenu::create(
            [
                'name' => 'Stok',
                'menu_id' => 2,
                'link' => '#',
                'route_name' => 'stok.index',
                'icon' => 'fas fa',
                'is_main_submenu' => 3,
            ],
        );


        Submenu::create(
            [
                'name' => 'Permission',
                'menu_id' => 3,
                'link' => '#',
                'route_name' => 'permission.index',
                'icon' => 'fas fa',
                'is_main_submenu' => 1,
            ],
        );

        Submenu::create(
            [
                'name' => 'Roles',
                'menu_id' => 3,
                'link' => '#',
                'route_name' => 'roles.index',
                'icon' => 'fas fa',
                'is_main_submenu' => 2,
            ],
        );

        Submenu::create(
            [
                'name' => 'User',
                'menu_id' => 3,
                'link' => '#',
                'route_name' => 'stok.index',
                'icon' => 'fas fa',
                'is_main_submenu' => 3,
            ],
        );
    }
}
