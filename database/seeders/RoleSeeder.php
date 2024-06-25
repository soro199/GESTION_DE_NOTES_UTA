<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
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
        $admin= Role::create([
            'libelle_role'=>"Administrateur",

        ]);
        $Enseignant= Role::create([
            'libelle_role'=>"Enseignant",

        ]);
        $et= Role::create([
            'libelle_role'=>"Etudiant",

        ]);
        $parent= Role::create([
            'libelle_role'=>"Parent",

        ]);
    }
}
