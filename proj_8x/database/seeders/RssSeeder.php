<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rss_list = [
            [
                'id'          => 1,
                'name'        => 'Thế Giới VNExpress',
                'status'      => 'active',
                'link'        => 'https://vnexpress.net/rss/the-gioi.rss',
                'ordering'    => 1,
                'source'      => 'vnexpress',
                'created'     => '2021-07-11 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2021-07-12 00:00:00',
                'modified_by' => 'admin',
            ],
            [
                'id'          => 2,
                'name'        => 'Thế Giới TuoiTre',
                'status'      => 'inactive',
                'link'        => 'https://tuoitre.vn/rss/the-gioi.rss',
                'ordering'    => 2,
                'source'      => 'tuoitre',
                'created'     => '2021-07-11 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2021-07-12 00:00:00',
                'modified_by' => 'admin',
            ],
            [
                'id'          => 4,
                'name'        => 'Thời sự VNEx',
                'status'      => 'inactive',
                'link'        => 'https://vnexpress.net/rss/thoi-su.rss',
                'ordering'    => 4,
                'source'      => 'vnexpress',
                'created'     => '2021-07-11 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2021-07-12 00:00:00',
                'modified_by' => 'admin',
            ],
        ];

        foreach ($rss_list as $rss){
            if (!DB::table('rss')->where('name', $rss['name'])->exists()){
                DB::table('rss')->insert($rss);
            }
        }
    }
}
