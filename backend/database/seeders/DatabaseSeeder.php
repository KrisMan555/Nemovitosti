<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Constraint\Count;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OwnershipTypeSeeder::class,
            EstateSubTypeSeeder::class,
            EstateConditionSeeder::class,
            BuildingMaterialTypeSeeder::class,
            BuildingConsuptionTypeSeeder::class,
            EstateAdditionalEquipmentSeeder::class,
            EstateTypeSeeder::class,
            EstateRoomTypeSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            CountySeeder::class,
        ]);
    }
}
