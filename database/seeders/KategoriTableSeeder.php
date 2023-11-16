<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tambah data tabel kategori
        DB::table('kategori')->insert(
            [
                [
                    'title' => 'Laravel',
                    'slug' => 'laravel',
                    'description' => 'Laravel CMS',
                    'thumbnail' => 'noimage.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'parent_id' => null,
                ],
                [
                    'title' => 'Laravel Blade',
                    'slug' => 'laravel-blade',
                    'description' => 'Blade Laravel CMS',
                    'thumbnail' => 'noimage.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'parent_id' => 1,
                ],
                [
                    'title' => 'Teh Poci',
                    'slug' => 'teh-poci',
                    'description' => 'CMS Teh Poci',
                    'thumbnail' => 'noimage.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'parent_id' => null,
                ]
            ]
        );
    }
}
