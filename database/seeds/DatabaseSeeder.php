<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PeoplesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);

        //Roles
        $this->call(PermissionTableSeeder::class);        
    }
}
