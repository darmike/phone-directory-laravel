<?php

    namespace Database\Seeders;

    use App\Models\PhoneBook;
    use Illuminate\Database\Seeder;

    class PhonebookSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(): void
        {
            PhoneBook::factory()->count(100)->create();
        }
    }
