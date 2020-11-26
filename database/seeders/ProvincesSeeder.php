<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [1, 'Thành phố Hà Nội', '01'],
            [2, 'Tỉnh Hà Giang', '02'],
            [3, 'Tỉnh Cao Bằng', '04'],
            [4, 'Tỉnh Bắc Kạn', '06'],
            [5, 'Tỉnh Tuyên Quang', '08'],
            [6, 'Tỉnh Lào Cai', '10'],
            [7, 'Tỉnh Điện Biên', '11'],
            [8, 'Tỉnh Lai Châu', '12'],
            [9, 'Tỉnh Sơn La', '14'],
            [10, 'Tỉnh Yên Bái', '15'],
            [11, 'Tỉnh Hoà Bình', '17'],
            [12, 'Tỉnh Thái Nguyên', '19'],
            [13, 'Tỉnh Lạng Sơn', '20'],
            [14, 'Tỉnh Quảng Ninh', '22'],
            [15, 'Tỉnh Bắc Giang', '24'],
            [16, 'Tỉnh Phú Thọ', '25'],
            [17, 'Tỉnh Vĩnh Phúc', '26'],
            [18, 'Tỉnh Bắc Ninh', '27'],
            [19, 'Tỉnh Hải Dương', '30'],
            [20, 'Thành phố Hải Phòng', '31'],
            [21, 'Tỉnh Hưng Yên', '33'],
            [22, 'Tỉnh Thái Bình', '34'],
            [23, 'Tỉnh Hà Nam', '35'],
            [24, 'Tỉnh Nam Định', '36'],
            [25, 'Tỉnh Ninh Bình', '37'],
            [26, 'Tỉnh Thanh Hóa', '38'],
            [27, 'Tỉnh Nghệ An', '40'],
            [28, 'Tỉnh Hà Tĩnh', '42'],
            [29, 'Tỉnh Quảng Bình', '44'],
            [30, 'Tỉnh Quảng Trị', '45'],
            [31, 'Tỉnh Thừa Thiên Huế', '46'],
            [32, 'Thành phố Đà Nẵng', '48'],
            [33, 'Tỉnh Quảng Nam', '49'],
            [34, 'Tỉnh Quảng Ngãi', '51'],
            [35, 'Tỉnh Bình Định', '52'],
            [36, 'Tỉnh Phú Yên', '54'],
            [37, 'Tỉnh Khánh Hòa', '56'],
            [38, 'Tỉnh Ninh Thuận', '58'],
            [39, 'Tỉnh Bình Thuận', '60'],
            [40, 'Tỉnh Kon Tum', '62'],
            [41, 'Tỉnh Gia Lai', '64'],
            [42, 'Tỉnh Đắk Lắk', '66'],
            [43, 'Tỉnh Đắk Nông', '67'],
            [44, 'Tỉnh Lâm Đồng', '68'],
            [45, 'Tỉnh Bình Phước', '70'],
            [46, 'Tỉnh Tây Ninh', '72'],
            [47, 'Tỉnh Bình Dương', '74'],
            [48, 'Tỉnh Đồng Nai', '75'],
            [49, 'Tỉnh Bà Rịa - Vũng Tàu', '77'],
            [50, 'Thành phố Hồ Chí Minh', '79'],
            [51, 'Tỉnh Long An', '80'],
            [52, 'Tỉnh Tiền Giang', '82'],
            [53, 'Tỉnh Bến Tre', '83'],
            [54, 'Tỉnh Trà Vinh', '84'],
            [55, 'Tỉnh Vĩnh Long', '86'],
            [56, 'Tỉnh Đồng Tháp', '87'],
            [57, 'Tỉnh An Giang', '89'],
            [58, 'Tỉnh Kiên Giang', '91'],
            [59, 'Thành phố Cần Thơ', '92'],
            [60, 'Tỉnh Hậu Giang', '93'],
            [61, 'Tỉnh Sóc Trăng', '94'],
            [62, 'Tỉnh Bạc Liêu', '95'],
            [63, 'Tỉnh Cà Mau', '96']
        );
        foreach($data as $key => $value){
            DB::table('provinces')->insert([
                'province_id' => $value[0],
                'province_name' => $value[1],
                'gso_id' => $value[2],
            ]);
        }
       
    }
}
