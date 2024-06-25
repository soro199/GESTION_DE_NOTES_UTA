<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Administration;
use App\Models\Parents;
use App\Models\Etudiant;
use App\Models\Enseignant;
use App\Models\Module;
use App\Models\EnseignantModule;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\TypeNote;
use App\Models\Note;



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AdministrationSeeder::class,
            ParentSeeder::class,
            Etudiantseeder::class,
            EnseignantSeeder::class,
            ModuleSeeder::class,
            EnseignantModuleSeeder::class,
            NiveauSeeder::class,
            FiliereSeeder::class,
            TypeNoteSeeder::class,
            NoteSeeder::class,


        ]);
    }

}
