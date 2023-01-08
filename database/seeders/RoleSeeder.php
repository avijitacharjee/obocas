<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'=>0,
                'name'=>'User',
                'slug'=>'User',
            ],
            [
                'id'=>1,
                'name'=>'Admin',
                'slug'=>'Admin'
            ],
            [
                'id'=>2,
                'name'=>'HotelAdmin',
                'slug'=>'HotelAdmin',
            ],
            [
                'id'=>3,
                'name'=>'Partner',
                'slug'=>'Partner'
            ]
        ];
        Role::truncate();
        foreach($roles as $role){
            Role::create([
                // 'id'=>$role['id'],
                'name'=>$role['name'],
                'slug'=>$role['slug']
            ]);
        }

    }
}
