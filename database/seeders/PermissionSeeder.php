<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Voer de database seeds uit.
     */
    public function run()
    {
        Permission::create(['name' => 'Rol bekijken']);
        Permission::create(['name' => 'Rol bewerken']);
        Permission::create(['name' => 'Rol aanmaken']);
        Permission::create(['name' => 'Rol verwijderen']);

        Permission::create(['name' => 'Medewerker bekijken']);
        Permission::create(['name' => 'Medewerker bewerken']);
        Permission::create(['name' => 'Medewerker aanmaken']);
        Permission::create(['name' => 'Medewerker verwijderen']);

        Permission::create(['name' => 'Recht bekijken']);
        Permission::create(['name' => 'Recht bewerken']);
        Permission::create(['name' => 'Recht aanmaken']);
        Permission::create(['name' => 'Recht verwijderen']);

        Permission::create(['name' => 'Product bekijken']);
        Permission::create(['name' => 'Product bewerken']);
        Permission::create(['name' => 'Product aanmaken']);
        Permission::create(['name' => 'Product verwijderen']);

        Permission::create(['name' => 'Categorie bekijken']);
        Permission::create(['name' => 'Categorie bewerken']);
        Permission::create(['name' => 'Categorie aanmaken']);
        Permission::create(['name' => 'Categorie verwijderen']);

    }
}