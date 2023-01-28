<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //////-- Here we can put many users by changing 1 To any number we want'  --//////
        
        // User::factory(1)->create(); //
        /**
         * Admin
         * role_id = 1
         */
        User::create([
            'first_name' => 'Mohamed',
            'last_name' => 'Ramadan',
            'role_id' => User::TYPEADMIN,
            'ssn_id' => '112352954859664',
            'gender' => 1,
            'mobile' => '01112223321',
            'email' => 'moservices11@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        /**
         * bikers
         * role_id = 2
         */
        User::create([
            'first_name' => 'Daniel',
            'last_name' => 'Matthew',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859661',
            'gender' => 1,
            'mobile' => '01112223322',
            'email' => 'daniel-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Betty',
            'last_name' => 'Mark',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859662',
            'gender' => 2,
            'mobile' => '01112223323',
            'email' => 'betty-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Joseph',
            'last_name' => 'Steven',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859663',
            'gender' => 1,
            'mobile' => '01112222343',
            'email' => 'joseph-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Matthew',
            'last_name' => 'Donald',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859668',
            'gender' => 1,
            'mobile' => '01112223344',
            'email' => 'matthew-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Nancy',
            'last_name' => 'Paul',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859665',
            'gender' => 2,
            'mobile' => '01112223345',
            'email' => 'nancy-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Linda',
            'last_name' => 'Thomas',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859666',
            'gender' => 2,
            'mobile' => '01112223346',
            'email' => 'linda-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Edward',
            'last_name' => 'Donald',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859667',
            'gender' => 1,
            'mobile' => '01112223347',
            'email' => 'edward-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Stephen',
            'last_name' => 'Eric',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859688',
            'gender' => 1,
            'mobile' => '01112223348',
            'email' => 'stephen-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Larry',
            'last_name' => 'big',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859669',
            'gender' => 1,
            'mobile' => '01112223349',
            'email' => 'larry-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Gregory',
            'last_name' => 'Jack',
            'role_id' => User::TYPEBIKER,
            'ssn_id' => '112352954859610',
            'gender' => 1,
            'mobile' => '01112223310',
            'email' => 'gregory-bk@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        /**
         * Senders
         * role_id = 3
         */
        User::create([
            'first_name' => 'Mohamed',
            'last_name' => 'salah',
            'role_id' => User::TYPESENDER,
            'gender' => 1,
            'mobile' => '01112223331',
            'email' => 'msalah2023@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Mary',
            'last_name' => 'zee',
            'role_id' => User::TYPESENDER,
            'gender' => 2,
            'mobile' => '01112223332',
            'email' => 'mary2023@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'James',
            'last_name' => 'Robert',
            'role_id' => User::TYPESENDER,
            'gender' => 1,
            'mobile' => '01112223333',
            'email' => 'james2023@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Patricia',
            'last_name' => 'Jose',
            'role_id' => User::TYPESENDER,
            'gender' => 2,
            'mobile' => '01112223334',
            'email' => 'parricia2023@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'first_name' => 'Jennifer',
            'last_name' => 'James',
            'role_id' => User::TYPESENDER,
            'gender' => 2,
            'mobile' => '01112223335',
            'email' => 'jennifer2023@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
}