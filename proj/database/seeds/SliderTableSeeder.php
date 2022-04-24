<?php

use Illuminate\Database\Seeder;
use App\Models\SliderModel as MainModel;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider_list = [
            [
                'id'          => 1,
                'name'        => 'Khóa học lập trình Frontend Master',
                'description' => 'Khóa học sẽ giúp bạn trở thành một chuyên gia Frontend với đầy đủ các kiến thức về HTML, CSS, JavaScript, Bootstrap, jQuery, chuyển PSD thành HTML ...',
                'link'        => 'https://zendvn.com/khoa-hoc-lap-trinh-frontend-master/',
                'thumb'       => 'rEpDUQCxe4.jpeg',
                'created'     => '2019-04-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-04-24 13:28:03',
                'modified_by' => 'quangvu',
                'status'      => 'active'
            ],
            [
                'id'          => 2,
                'name'        => 'Học lập trình trực tuyến',
                'description' => 'Học trực tuyến giúp bạn tiết kiệm chi phí, thời gian, cập nhật được nhiều kiến thức mới nhanh nhất và hiệu quả nhất',
                'link'        => 'https://zendvn.com/',
                'thumb'       => 'K6B1O6UNCb.jpeg',
                'created'     => '2019-04-18 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-04-24 13:28:06',
                'modified_by' => 'quangvu',
                'status'      => 'active'
            ],
            [
                'id'          => 3,
                'name'        => 'Ưu đãi học phí',
                'description' => 'Tổng hợp các trương trình ưu đãi học phí hàng tuần, hàng tháng đến tất các các bạn với các mức giảm đặc biệt 50%, 70%,..',
                'link'        => 'https://zendvn.com/uu-dai-hoc-phi-tai-zendvn/',
                'thumb'       => 'LWi6hINpXz.jpeg',
                'created'     => '2019-04-24 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-04-24 13:28:09',
                'modified_by' => 'quangvu',
                'status'      => 'active'
            ],
        ];

        foreach ($slider_list as $slider){
            if (!MainModel::where('name', $slider['name'])->exists()){
                DB::table('slider')->insert($slider);
            }
        }
    }
}
