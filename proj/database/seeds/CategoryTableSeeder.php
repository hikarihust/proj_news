<?php

use Illuminate\Database\Seeder;
use App\Models\CategoryModel as MainModel;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category_list = [
            [
                'id'          => 1,
                'name'        => 'Thể thao',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-12 00:00:00',
                'modified_by' => 'quangvu',
                'is_home'     => 1,
                'display'     => 'list',
            ],
            [
                'id'          => 2,
                'name'        => 'Giáo dục',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-12 00:00:00',
                'modified_by' => 'quangvu',
                'is_home'     => 1,
                'display'     => 'grid',
            ],
            [
                'id'          => 3,
                'name'        => 'Sức khỏe',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-15 15:04:33',
                'modified_by' => 'quangvu',
                'is_home'     => 0,
                'display'     => 'list',
            ],
            [
                'id'          => 4,
                'name'        => 'Du lịch',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-15 15:04:30',
                'modified_by' => 'quangvu',
                'is_home'     => 0,
                'display'     => 'grid',
            ],
            [
                'id'          => 5,
                'name'        => 'Khoa học',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-12 00:00:00',
                'modified_by' => 'quangvu',
                'is_home'     => 0,
                'display'     => 'list',
            ],
            [
                'id'          => 6,
                'name'        => 'Số hóa',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-15 15:04:38',
                'modified_by' => 'quangvu',
                'is_home'     => 1,
                'display'     => 'grid',
            ],
            [
                'id'          => 7,
                'name'        => 'Xe - Ô tô',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-15 15:04:36',
                'modified_by' => 'quangvu',
                'is_home'     => 1,
                'display'     => 'list',
            ],
            [
                'id'          => 8,
                'name'        => 'Kinh doanh',
                'status'      => 'active',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'admin',
                'modified'    => '2019-05-15 15:04:36',
                'modified_by' => 'quangvu',
                'is_home'     => 0,
                'display'     => 'list',
            ],
        ];

        foreach ($category_list as $category){
            if (!MainModel::where('name', $category['name'])->exists()){
                DB::table('category')->insert($category);
            }
        }
    }
}
