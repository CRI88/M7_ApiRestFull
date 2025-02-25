<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Llamamos a nuestros seeders
        $this->call([
            RolesTableSeeder::class,   // Seeder para roles
            UsersTableSeeder::class,   // Seeder para usuarios
            CoursesTableSeeder::class, // Seeder para cursos
            // Agrega más seeders si los tienes...
        ]);
    }
}
