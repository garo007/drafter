<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'  =>  'Мобильная Разработка'
            ],
            [
                'name'  =>  'Веб-разработка'
            ],
            [
                'name'  =>  'Разработка приложений'
            ],
            [
                'name'  =>  'Интернет-магазин'
            ],
            [
                'name'  =>  'Общественное питание'
            ],
            [
                'name'  =>  'Производство'
            ],
            [
                'name'  =>  'Развлечение'
            ],
            [
                'name'  =>  'Сельское хозяйство'
            ],
            [
                'name'  =>  'Строительство'
            ],
            [
                'name'  =>  'Сфера услуг'
            ],
            [
                'name'  =>  'Торговля'
            ],
            [
                'name'  =>  'Другое'
            ],

        ]);
    }
}
