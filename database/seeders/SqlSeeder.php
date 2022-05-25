<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('preparing files to be seeded');
        $this->command->info('disabling all foreign key constraints');


        Schema::disableForeignKeyConstraints();

        $this->command->info('truncating existing tables...');

        DB::table('countries')->truncate();

        DB::table('states')->truncate();

        DB::table('cities')->truncate();

        $this->command->info('enabling all foreign key constraints');

        Schema::enableForeignKeyConstraints();

        $this->command->info('getting the sql file for countries');

        $countries = public_path('sql/countries.sql');

        $this->command->info('getting the sql file for states');

        $states = public_path('sql/states.sql');

        $this->command->info('getting the sql file for cities');

        $cities = public_path('sql/cities.sql');


        $this->command->info('reading all file contents');

        $countries_sql = file_get_contents($countries);

        $states_sql = file_get_contents($states);

        $cities_sql = file_get_contents($cities);

        $this->command->info('seeding data, please wait');

        DB::unprepared($countries_sql);
        DB::unprepared($states_sql);
        DB::unprepared($cities_sql);

        $this->command->info('seeding complete...');
    }
}
