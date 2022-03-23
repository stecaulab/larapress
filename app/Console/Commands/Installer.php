<?php

namespace App\Console\Commands;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Installer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larapress:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Questo comando lancia installazione iniziale del progetto';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!$this->verification()) {

             $rol     =   $this->createRolUserSuperAdmin();
             $user    =   $this->createUserSuperAdmin();
             $user->roles()->attach($rol);

             $this->line('Utente super Admin e regole installate correttamente');
    
            //Relazione tra user e rolls

        } else {

            $this->error('it is impossible to create a new super admin because one already exists ');

        }
        
        
    }

    private function verification()

    {

        //cerca se gia c e un super admin
        //e ritorna true se la variabile è vuota

        return Rol::find(1);
        

    }

    private function createRolUserSuperAdmin()

    {

        $rol = 'Super Administator';
        return Rol::create([

            'name'   =>    $rol,
            'slug'   =>    $slug = Str::slug($rol, '_'),
            
        ]);
    }

    private function createUserSuperAdmin()
    {

       return  User::create([

            'name'      =>      'SuperAdmin',
            'email'     =>      'cauzzistefano@icloud.com',
            'password'  =>       Hash::make('toor'),
            'status'    =>       '1'
            
        ]);

        

    }
}
