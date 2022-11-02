<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(
            [
                'name' => 'Dashboard',
                'link' => '#',
                'route_name' => 'dashboard',
                'icon' => 'fas fa-university',
                'is_main_menu' => 0,
            ],
        );

        Menu::create(
            [
                'name' => 'Master Data',
                'link' => '#',
                'route_name' => '#',
                'icon' => 'fas fa-dashboard',
                'is_main_menu' => 0,
            ],
        );

        
        Menu::create(
            [
                'name' => 'Manajement User',
                'link' => '#',
                'route_name' => '#',
                'icon' => 'fas fa-users',
                'is_main_menu' => 0,
            ],
        );
        
        Menu::create(
            [
                'name' => 'Logout',
                'link' => '#',
                'route_name' => 'logout',
                'icon' => 'fas fa-sign-out',
                'is_main_menu' => 0,
            ],
        );
    }
}
