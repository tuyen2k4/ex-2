<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

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
        DB::table('studend')->insert([
            [
                'id' => 1,
                'name' => 'Phung Van Vu',
                'age' =>41,
                'address' => 'HA NOI',
                'phone' => '4347235575674545',

            ],
            [
                'id' => 2,
                'name' => 'Trinh Van Trung',
                'age' =>21,
                'address' => 'HA NOI',
                'phone' => '464723557574545',

            ],
            [
                'id' => 3,
                'name' => 'Ha Huu Hoang',
                'age' =>41,
                'address' => 'HA NOI',
                'phone' => '4364723557674545',

            ],
            [
                'id' => 4,
                'name' => 'Ngo Manh Son',
                'age' =>41,
                'address' => 'HA NOI',
                'phone' => '4364723575674545',

            ],
            [
                'id' => 5,
                'name' => 'Nguyen Cong Tuyen',
                'age' =>41,
                'address' => 'HA NOI',
                'phone' => '4364235575674545',

            ],

        ]);

    }
}
