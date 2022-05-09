<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article_list = [
            [
                'id'          => 4,
                'category_id' => 1,
                'name'        => 'Liverpool chỉ được nâng Cup phiên bản nếu vô địch hôm nay',
                'content'     => '<p>Đội b&oacute;ng th&agrave;nh phố cảng sẽ kh&ocirc;ng n&acirc;ng Cup nguy&ecirc;n bản nếu vượt mặt Man City ở v&ograve;ng cuối Ngoại hạng Anh.</p>\r\n\r\n<p>Liverpool k&eacute;m Man City một điểm trước khi tiếp Wolverhampton tr&ecirc;n s&acirc;n nh&agrave; Anfield v&agrave;o ng&agrave;y Chủ Nhật. Ở trận đấu c&ugrave;ng giờ, Man City sẽ l&agrave;m kh&aacute;ch tới s&acirc;n Brighton v&agrave; biết một chiến thắng sẽ gi&uacute;p họ bảo vệ th&agrave;nh c&ocirc;ng ng&ocirc;i v&ocirc; địch. Kể từ khi c&aacute;c trận v&ograve;ng cuối Ngoại hạng Anh sẽ chơi đồng loạt c&ugrave;ng l&uacute;c, ban tổ chức phải đặt một chiếc cup phi&ecirc;n bản giống thật tại Anfield ph&ograve;ng trường hợp Liverpool v&ocirc; địch. Chiếc cup giả n&agrave;y thường được d&ugrave;ng trong c&aacute;c sự kiện quảng b&aacute; của Ngoại hạng Anh.&nbsp;</p>',
                'status'      => 'active',
                'thumb'       => 'L3Yuzln8II.png',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-04-29',
                'type'        => 'feature',
            ],
            [
                'id'          => 5,
                'category_id' => 1,
                'name'        => 'Bottas giành pole chặng thứ ba liên tiếp',
                'content'     => '<p>Tay đua Phần Lan đ&aacute;nh bại đồng đội Lewis Hamilton ở v&ograve;ng ph&acirc;n hạng GP T&acirc;y Ban Nha h&ocirc;m 11/5.</p>\r\n\r\n<p>Valtteri Bottas nhanh hơn Hamilton 0,634 gi&acirc;y v&agrave; nhanh hơn người về thứ ba&nbsp;Sebastian Vettel 0,866 gi&acirc;y. Tay đua của Red Bull&nbsp;Max Verstappen nhanh thứ tư, trong khi&nbsp;Charles Leclerc về thứ năm.</p>',
                'status'      => 'active',
                'thumb'       => 'iQ1RXPioFZ.jpeg',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-04-28',
                'type'        => 'feature',
            ],
            [
                'id'          => 6,
                'category_id' => 1,
                'name'        => 'HLV Cardiff: \'Man Utd sẽ không vô địch trong 10 năm tới\'',
                'content'     => '<p>Neil Warnock tỏ ra nghi ngờ về tương lai của Man Utd dưới thời HLV Solskjaer.</p>\r\n\r\n<p>&quot;Một số người nghĩ Man Utd cần từ hai đến ba kỳ chuyển nhượng nữa để gi&agrave;nh danh hiệu&quot;, HLV Neil Warnock chia sẻ. &quot;T&ocirc;i th&igrave; nghĩ c&oacute; thể l&agrave; 10 năm. T&ocirc;i kh&ocirc;ng thấy học&oacute; khả năng bắt kịp hai CLB h&agrave;ng đầu trong khoảng bốn hay năm năm tới&quot;.</p>\r\n\r\n<p>Lần cuối Man Utd v&ocirc; địch l&agrave; m&ugrave;a 2012-2013 dưới thời HLV Sir Alex Ferguson. Kể từ đ&oacute; đến nay, &quot;Quỷ đỏ&quot; kh&ocirc;ng c&ograve;n duy tr&igrave; được vị thế ứng cử vi&ecirc;n v&ocirc; địch h&agrave;ng đầu.&nbsp;</p>',
                'status'      => 'active',
                'thumb'       => 'ReChSfB95C.jpeg',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-30',
                'type'        => 'feature',
            ],
            [
                'id'          => 7,
                'category_id' => 2,
                'name'        => 'Đại học Anh đưa khóa học hạnh phúc vào chương trình giảng dạy',
                'content'     => '<p>Kh&oacute;a học diễn ra trong 12 tuần, sinh vi&ecirc;n năm nhất Đại học Bristol sẽ được kh&aacute;m ph&aacute; hạnh ph&uacute;c l&agrave; g&igrave; v&agrave; l&agrave;m thế n&agrave;o để đạt được n&oacute;.</p>\r\n\r\n<p>Đại học Bristol (Anh) quyết định đưa kh&oacute;a học hạnh ph&uacute;c v&agrave;o giảng dạy từ th&aacute;ng 9 năm nay nhằm giảm thiểu t&igrave;nh trạng tự tử ở sinh vi&ecirc;n, sau khi 12 sinh vi&ecirc;n ở một trường kh&aacute;c quy&ecirc;n sinh trong ba năm qua. Gi&aacute;o sư Bruce Hood, nh&agrave; t&acirc;m l&yacute; học chuy&ecirc;n nghi&ecirc;n cứu về c&aacute;ch thức hoạt động của bộ n&atilde;o v&agrave; con người, sẽ giảng dạy m&ocirc;n học mới n&agrave;y.</p>',
                'status'      => 'active',
                'thumb'       => 'hoyOyXJrzx.png',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-05',
                'type'        => 'feature',
            ],
            [
                'id'          => 8,
                'category_id' => 5,
                'name'        => '11 cách đơn giản dạy trẻ quản lý thời gian',
                'content'     => '<p>Phụ huynh h&atilde;y tạo cảm gi&aacute;c vui vẻ, hướng dẫn trẻ thiết lập những ưu ti&ecirc;n h&agrave;ng ng&agrave;y để ch&uacute;ng c&oacute; thể tự quản l&yacute; thời gian hiệu quả.</p>\r\n\r\n<p>&quot;Nhanh l&ecirc;n&quot;, &quot;Con c&oacute; biết mấy giờ rồi kh&ocirc;ng&quot;, &quot;Điều g&igrave; l&agrave;m con mất nhiều thời gian như vậy&quot;..., l&agrave; những c&acirc;u n&oacute;i quen thuộc của phụ huynh để nhắc nhở con về kh&aacute;i niệm thời gian. Thay v&igrave; n&oacute;i những c&acirc;u tr&ecirc;n, phụ huynh c&oacute; thể dạy con c&aacute;ch quản l&yacute; giờ giấc ngay từ khi ch&uacute;ng c&ograve;n nhỏ.</p>',
                'status'      => 'active',
                'thumb'       => 'Phe2pSOC5Q.jpeg',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-07-30',
                'type'        => 'normal',
            ],
            [
                'id'          => 9,
                'category_id' => 3,
                'name'        => 'Vì sao không hút thuốc vẫn bị ung thư phổi?',
                'content'     => '<p>D&ugrave; kh&ocirc;ng h&uacute;t thuốc, bạn vẫn c&oacute; nguy cơ ung thư phổi do h&iacute;t phải kh&oacute;i thuốc, tiếp x&uacute;c với kh&iacute; radon hoặc sống trong m&ocirc;i trường &ocirc; nhiễm.&nbsp;</p>\r\n\r\n<p>Người kh&ocirc;ng h&uacute;t thuốc vẫn c&oacute; thể bị ung thư phổi.&nbsp;Tr&ecirc;n&nbsp;<em>Journal of the Royal Society of Medicine</em>,&nbsp;c&aacute;c nh&agrave; khoa học từ&nbsp;Hiệp hội Ung thư Mỹ cho biết 20% bệnh nh&acirc;n ung thư phổi kh&ocirc;ng bao giờ h&uacute;t thuốc.&nbsp;Nghi&ecirc;n cứu 30 năm tr&ecirc;n 1,2 triệu người của tổ chức n&agrave;y cũng chỉ ra số người kh&ocirc;ng h&uacute;t thuốc bị ung thư phổi đang gia tăng. Hầu hết bệnh nh&acirc;n chỉ được chẩn đo&aacute;n khi đ&atilde; bước sang giai đoạn nghi&ecirc;m trọng kh&ocirc;ng thể điều trị.&nbsp;</p>',
                'status'      => 'active',
                'thumb'       => 'tPa7bgOesm.png',
                'created'     => '2019-05-04 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-08-30',
                'type'        => 'normal',
            ],
            [
                'id'          => 11,
                'category_id' => 5,
                'name'        => 'Phát hiện bụt mọc cổ thụ hơn 2.600 tuổi ở Mỹ',
                'content'     => '<p>Ph&aacute;t hiện mới gi&uacute;p bụt mọc trở th&agrave;nh một trong những c&acirc;y sinh sản hữu t&iacute;nh gi&agrave; nhất thế giới, vượt xa ước t&iacute;nh trước đ&acirc;y của c&aacute;c chuy&ecirc;n gia.</p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa học ph&aacute;t hiện một c&acirc;y bụt mọc &iacute;t nhất đ&atilde; 2.624 tuổi ở v&ugrave;ng đầm lầy s&ocirc;ng Black, bang Bắc Carolina, Mỹ, theo nghi&ecirc;n cứu đăng tr&ecirc;n tạp ch&iacute;&nbsp;<em>Environmental Research Communications</em>&nbsp;h&ocirc;m 9/5.&nbsp;</p>\r\n\r\n<p>Nh&oacute;m nghi&ecirc;n cứu bắt gặp bụt mọc cổ thụ n&agrave;y trong l&uacute;c nghi&ecirc;n cứu v&ograve;ng tuổi của c&acirc;y để t&igrave;m hiểu về lịch sử kh&iacute; hậu tại miền đ&ocirc;ng nước Mỹ. Ngo&agrave;i thể hiện tuổi thọ, độ rộng v&agrave; m&agrave;u sắc của v&ograve;ng tuổi tr&ecirc;n th&acirc;n c&acirc;y c&ograve;n cho biết mức độ ẩm ướt hay kh&ocirc; hạn của năm tương ứng.</p>',
                'status'      => 'active',
                'thumb'       => 'a09zB7BiwV.jpeg',
                'created'     => '2019-05-12 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-12',
                'type'        => 'normal',
            ],
            [
                'id'          => 12,
                'category_id' => 6,
                'name'        => 'Apple có thể không nâng cấp iOS 13 cho iPhone SE, 6',
                'content'     => '<p>Những mẫu iPhone ra mắt từ 2014 v&agrave; iPhone SE c&oacute; thể kh&ocirc;ng được l&ecirc;n đời hệ điều h&agrave;nh iOS 13 ra mắt th&aacute;ng 6 tới.</p>\r\n\r\n<p>Theo&nbsp;<em>Phone Arena</em>, hệ điều h&agrave;nh iOS 13 sắp tr&igrave;nh l&agrave;ng tại hội nghị WWDC 2019 sẽ kh&ocirc;ng hỗ trợ một loạt iPhone đời cũ của Apple. Trong đ&oacute;, đ&aacute;ng ch&uacute; &yacute; l&agrave; c&aacute;c mẫu iPhone vẫn c&ograve;n được nhiều người d&ugrave;ng sử dụng như iPhone 6, 6s Plus hay SE.&nbsp;</p>',
                'status'      => 'active',
                'thumb'       => '9jOZGc7BJK.png',
                'created'     => '2019-05-12 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-10',
                'type'        => 'normal',
            ],
            [
                'id'          => 13,
                'category_id' => 7,
                'name'        => 'Hình dung về Honda Jazz thế hệ mới',
                'content'     => '<p>Thế hệ thứ tư của mẫu hatchback Honda tiết chế bớt những đường n&eacute;t g&acirc;n guốc, thể thao để thay bằng n&eacute;t trung t&iacute;nh, hợp mắt người d&ugrave;ng hơn.&nbsp;</p>\r\n\r\n<p>Những h&igrave;nh ảnh đầu ti&ecirc;n về Honda Jazz (Fit tại Nhật Bản) thế hệ mới bắt đầu xuất hiện tr&ecirc;n đường thử. D&ugrave; chưa phải thiết kế ho&agrave;n chỉnh, thay đổi của mẫu hatchback cỡ B cho thấy những đường n&eacute;t trung t&iacute;nh m&agrave; xe sắp sở hữu. Điều n&agrave;y tr&aacute;i ngược với tạo h&igrave;nh g&acirc;n guốc, thể thao ở thế hệ thứ ba hiện tại của Jazz.&nbsp;</p>',
                'status'      => 'active',
                'thumb'       => 'g2c7mYXBPW.png',
                'created'     => '2019-05-12 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-12',
                'type'        => 'normal',
            ],
            [
                'id'          => 14,
                'category_id' => 1,
                'name'        => 'Hà Nội vào vòng knock-out AFC Cup',
                'content'     => '<p>ĐKVĐ V-League đ&aacute;nh bại&nbsp;Tampines Rovers 2-0 v&agrave;o chiều 15/5 để đứng đầu bảng F.</p>\r\n\r\n<p>Tiếp đối thủ đến từ Singapore trong t&igrave;nh thế buộc phải thắng để tự quyết v&eacute; đi tiếp, H&agrave; Nội đ&atilde; c&oacute; trận đấu dễ d&agrave;ng. C&oacute; thể n&oacute;i, kết quả của trận đấu được định đoạt trong hiệp một khi Oseni v&agrave; Th&agrave;nh Chung lần lượt ghi b&agrave;n cho đội chủ nh&agrave;. Trong khi đ&oacute;, Tampines Rovers phải trả gi&aacute; cho lối chơi th&ocirc; bạo khi Yasir Hanapi nhận thẻ v&agrave;ng thứ hai rời s&acirc;n. Tiền vệ n&agrave;y bị trừng phạt bởi pha đ&aacute;nh nguội với Th&agrave;nh Chung ở đầu trận, sau đ&oacute; l&agrave; t&igrave;nh huống phạm lỗi &aacute;c &yacute; với Đ&igrave;nh Trọng.</p>',
                'status'      => 'active',
                'thumb'       => 'e7YyFZJCc8.jpeg',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-10',
                'type'        => 'feature',
            ],
            [
                'id'          => 15,
                'category_id' => 1,
                'name'        => 'Man City vẫn dự Champions League mùa 2019-2020',
                'content'     => '<p>Việc điều tra vi phạm luật c&ocirc;ng bằng t&agrave;i ch&iacute;nh của chủ s&acirc;n Etihad chưa thể ho&agrave;n th&agrave;nh trong v&ograve;ng một năm tới.</p>\r\n\r\n<p><em>Sports Mail</em>&nbsp;(Anh)&nbsp;cho biết, &aacute;n phạt cấm tham dự Champions League một m&ugrave;a với Man City, do vi phạm luật c&ocirc;ng bằng t&agrave;i ch&iacute;nh (FFP), chỉ được đưa ra sớm nhất v&agrave;o m&ugrave;a 2020-2021.</p>\r\n\r\n<p>Trong bức thư ngỏ gửi tới truyền th&ocirc;ng Anh, Man City viết: &quot;Ch&uacute;ng t&ocirc;i hợp t&aacute;c một c&aacute;ch thiện ch&iacute; với Tiểu ban kiểm so&aacute;t t&agrave;i ch&iacute;nh c&aacute;c CLB của UEFA (CFCB). CLB tin tưởng v&agrave;o sự độc lập v&agrave; cam kết của CFCB h&ocirc;m 7/3, rằng sẽ kh&ocirc;ng kết luận g&igrave; trong thời gian điều tra&quot;.</p>',
                'status'      => 'active',
                'thumb'       => 'exzJEG4WDU.jpeg',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-10',
                'type'        => 'feature',
            ],
            [
                'id'          => 16,
                'category_id' => 1,
                'name'        => 'Những câu đố giúp rèn luyện trí não',
                'content'     => '<p>Bạn cần quan s&aacute;t, suy luận logic v&agrave; c&oacute; vốn từ vựng tiếng Anh để giải quyết những c&acirc;u đố dưới đ&acirc;y.</p>\r\n\r\n<p>C&acirc;u 1:&nbsp;Mike đến một buổi phỏng vấn xin việc. Anh đ&atilde; g&acirc;y ấn tượng với gi&aacute;m đốc về những kỹ năng v&agrave; kinh nghiệm của m&igrave;nh. Tuy nhi&ecirc;n, để quyết định c&oacute; nhận Mike hay kh&ocirc;ng, nữ gi&aacute;m đốc đưa ra một c&acirc;u đố h&oacute;c b&uacute;a v&agrave; y&ecirc;u cầu Mike trả lời trong 30 gi&acirc;y.</p>\r\n\r\n<p>Nội dung c&acirc;u đố: H&atilde;y đưa ra 30 từ tiếng Anh kh&ocirc;ng c&oacute; chữ &quot;a&quot; xuất hiện trong đ&oacute;?&nbsp;</p>\r\n\r\n<p>Mike dễ d&agrave;ng giải quyết c&acirc;u đố. Theo bạn anh ấy n&oacute;i những từ tiếng Anh n&agrave;o để kịp trả lời trong 30 gi&acirc;y?</p>',
                'status'      => 'active',
                'thumb'       => 'TpcocqUjob.png',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-10',
                'type'        => 'feature',
            ],
            [
                'id'          => 17,
                'category_id' => 3,
                'name'        => 'Cách nhận biết mật ong nguyên chất và pha trộn',
                'content'     => '<p>Mật ong nguy&ecirc;n chất sẽ kh&ocirc;ng thấm qua tờ giấy, lắng xuống đ&aacute;y ly nước v&agrave; bị kiến ăn, kh&aacute;c với mật ong bị pha trộn tạp chất.</p>\r\n\r\n<p>Dược sĩ V&otilde; H&ugrave;ng Mạnh, Trưởng khoa Dược Bệnh viện Y học d&acirc;n tộc cổ truyền B&igrave;nh Định, cho biết thị trường c&oacute; nhiều loại mật ong bị pha trộn, chỉ nh&igrave;n bề ngo&agrave;i hay ngửi m&ugrave;i chưa chắc ph&acirc;n biệt được.</p>\r\n\r\n<p>Theo dược sĩ H&ugrave;ng, một c&aacute;ch ph&acirc;n biệt thật giả l&agrave; lấy cọng h&agrave;nh tươi nh&uacute;ng v&agrave;o lọ mật ong, lấy ra chừng v&agrave;i ph&uacute;t. Cọng l&aacute; h&agrave;nh sẽ chuyển từ m&agrave;u xanh l&aacute; sang sậm nếu mật ong thật. Ngo&agrave;i ra, c&oacute; thể nhỏ giọt mật v&agrave;o nơi c&oacute; kiến, nếu kiến kh&ocirc;ng bu giọt mật th&igrave; cũng l&agrave; mật ong thật.</p>\r\n\r\n<p>Ng&agrave;y nay, nhiều người đặt mật ong v&agrave;o ngăn đ&aacute; tủ lạnh, sau 24 giờ m&agrave; kh&ocirc;ng c&oacute; hiện tượng đ&ocirc;ng đ&aacute; th&igrave; l&agrave; mật thật.</p>',
                'status'      => 'active',
                'thumb'       => 'xvEqmF5uyJ.png',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-10',
                'type'        => 'normal',
            ],
            [
                'id'          => 18,
                'category_id' => 4,
                'name'        => 'Nhiều tour mùa hè giảm giá hàng chục triệu đồng',
                'content'     => '<p>C&aacute;c tour trong v&agrave; ngo&agrave;i nước đều được giảm gi&aacute; mạnh để k&iacute;ch cầu du lịch trong dịp h&egrave;, nhiều chương tr&igrave;nh khuyến m&atilde;i l&ecirc;n đến h&agrave;ng chục triệu đồng.</p>\r\n\r\n<p>Sau khi so s&aacute;nh tiền v&eacute; m&aacute;y bay, ph&ograve;ng kh&aacute;ch sạn ở Bali để chuẩn bị cho kỳ nghỉ h&egrave; của gia đ&igrave;nh, anh Sơn (ngụ quận 2, TP HCM) quyết định chuyển sang mua tour trọn g&oacute;i v&igrave; tiết kiệm hơn.</p>',
                'status'      => 'active',
                'thumb'       => 'd2ABCeBzoR.jpeg',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-15',
                'type'        => 'feature',
            ],
            [
                'id'          => 19,
                'category_id' => 7,
                'name'        => 'BMW i8 Roadster - xe mui trần dẫn đường ở Formula E',
                'content'     => '<p>Dịp cuối tuần qua, BMW giới thiệu chiếc xe dẫn đường, l&agrave;m nhiệm vụ đảm bảo an to&agrave;n tại giải đua xe Formula E. Giải đua tương tự giải F1, nhưng to&agrave;n bộ xe đua sử dụng động cơ điện.</p>\r\n\r\n<p>i8 Roadster Safety Car dựa tr&ecirc;n chiếc i8 Roadster ti&ecirc;u chuẩn, nhưng c&oacute; những thay đổi để trở th&agrave;nh chiếc xe dẫn đường chuy&ecirc;n dụng. Ngoại h&igrave;nh c&oacute; một số đặc điểm ấn tượng hơn so với nguy&ecirc;n bản. K&iacute;nh chắn gi&oacute; kiểu d&agrave;nh cho xe đua, trọng t&acirc;m hạ thấp 15 mm.</p>',
                'status'      => 'active',
                'thumb'       => '9fbeUKTBpU.png',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-10',
                'type'        => 'normal',
            ],
            [
                'id'          => 20,
                'category_id' => 3,
                'name'        => 'Tia cực tím tại Hà Nội ở mức \'nguy hiểm\'',
                'content'     => '<p>Chỉ số tia UV tại H&agrave; Nội ng&agrave;y 18-19/5 l&ecirc;n tới 11, mức được đ&aacute;nh gi&aacute; l&agrave; &quot;nguy hiểm&quot; dễ khiến da, mắt bị bỏng nhiệt.</p>\r\n\r\n<p>H&agrave; Nội đang trải qua đợt nắng n&oacute;ng gay gắt. Theo Trung t&acirc;m Dự b&aacute;o Kh&iacute; tượng Thủy văn Quốc gia, nhiệt độ cao nhất ở H&agrave; Nội ng&agrave;y 18/5 dao động trong khoảng 37 đến 39 độ C, c&oacute; nơi tr&ecirc;n 39 độ.&nbsp;Trang&nbsp;<em>World Weather Online</em>&nbsp;của Anh dự b&aacute;o chỉ số tia cực t&iacute;m tại H&agrave; Nội hai ng&agrave;y 18-19/5 đạt mức 11.&nbsp;</p>',
                'status'      => 'active',
                'thumb'       => 'C4DtP4ico8.png',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-16',
                'type'        => 'normal',
            ],
            [
                'id'          => 21,
                'category_id' => 2,
                'name'        => 'Blockchain và trí tuệ nhân tạo AI làm thay đổi giáo dục trực tuyến',
                'content'     => '<p>Blockchain khiến dữ liệu trở n&ecirc;n c&ocirc;ng khai, minh bạch với người học, AI gi&uacute;p cải thiện khả năng tương t&aacute;c v&agrave; giảng dạy với từng c&aacute; nh&acirc;n.</p>\r\n\r\n<p>Sự b&ugrave;ng nổ của Internet v&agrave; những c&ocirc;ng nghệ mới như chuỗi khối (Blockchain) v&agrave; tr&iacute; tuệ nh&acirc;n tạo (AI) đ&atilde; g&oacute;p phần l&agrave;m thay đổi nền gi&aacute;o dục tr&ecirc;n to&agrave;n thế giới, h&igrave;nh th&agrave;nh những nền tảng Online Learning với nhiều ưu thế.</p>\r\n\r\n<p><strong>Mobile Learning dự b&aacute;o l&agrave; &quot;Cuộc c&aacute;ch mạng tiếp theo&quot; của gi&aacute;o dục trực tuyến</strong></p>\r\n\r\n<p>Theo nghi&ecirc;n cứu của Global Market Insights, thị trường gi&aacute;o dục trực tuyến to&agrave;n cầu đang c&oacute; tốc độ ph&aacute;t triển nhanh chưa từng thấy khi nền tảng hạ tầng Internet ng&agrave;y c&agrave;ng ho&agrave;n thiện v&agrave; phủ s&oacute;ng rộng khắp. Gi&aacute; trị c&aacute;c start-up về EdTech (C&ocirc;ng ty c&ocirc;ng nghệ chuy&ecirc;n về gi&aacute;o dục) to&agrave;n cầu được ước t&iacute;nh hơn 190 tỷ USD v&agrave;o năm 2018 v&agrave; dự kiến vượt hơn 300 tỷ USD v&agrave;o năm 2025.</p>',
                'status'      => 'active',
                'thumb'       => 'gCPGos7mhY.png',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-16',
                'type'        => 'feature',
            ],
            [
                'id'          => 22,
                'category_id' => 6,
                'name'        => 'Huawei nói lệnh cấm sẽ khiến Mỹ tụt hậu về 5G',
                'content'     => '<p>Huawei khẳng định sắc lệnh mới của Mỹ sẽ chỉ c&agrave;ng khiến qu&aacute; tr&igrave;nh triển khai c&ocirc;ng nghệ 5G ở nước n&agrave;y th&ecirc;m chậm chạp v&agrave; đắt đỏ.</p>\r\n\r\n<p>H&atilde;ng c&ocirc;ng nghệ Trung Quốc tự nhận l&agrave; &quot;người dẫn đầu kh&ocirc;ng ai s&aacute;nh kịp về c&ocirc;ng nghệ 5G&quot;, n&ecirc;n việc bị hạn chế kinh doanh ở Mỹ chỉ dẫn đến kết cục l&agrave; Mỹ sẽ bị &quot;tụt lại ph&iacute;a sau&quot; trong việc triển khai c&ocirc;ng nghệ kết nối di động thế hệ mới</p>',
                'status'      => 'active',
                'thumb'       => 'nt1QxhKUXM.jpeg',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-16',
                'type'        => 'feature',
            ],
            [
                'id'          => 23,
                'category_id' => 6,
                'name'        => 'Asus ra mắt Zenfone 6 với camera lật tự động',
                'content'     => '<p>Với thiết kế m&agrave;n h&igrave;nh tr&agrave;n viền ho&agrave;n to&agrave;n kh&ocirc;ng tai thỏ, camera ch&iacute;nh 48 megapixel tr&ecirc;n Zenfone 6 c&oacute; thể lật từ sau ra trước biến th&agrave;nh camera selfie.</p>\r\n\r\n<p>Zenfone 6 l&agrave; một trong những smartphone c&oacute; viền m&agrave;n h&igrave;nh mỏng nhất tr&ecirc;n thị trường với tỷ lệ m&agrave;n h&igrave;nh hiển thị chiếm tới 92% diện t&iacute;ch mặt trước. M&aacute;y c&oacute; m&agrave;n h&igrave;nh 6,4 inch tr&agrave;n viền ra cả bốn cạnh, kh&ocirc;ng tai thỏ như một số mẫu Zenfone trước v&agrave; cũng kh&ocirc;ng d&ugrave;ng thiết kế đục lỗ như Galaxy S10, S10+</p>',
                'status'      => 'active',
                'thumb'       => 'aiC6j6fWZY.png',
                'created'     => '2019-05-15 00:00:00',
                'created_by'  => 'quangvu',
                'modified'    => '2019-05-17 00:00:00',
                'modified_by' => 'quangvu',
                'publish_at'  => '2019-05-16',
                'type'        => 'normal',
            ],
        ];

        foreach ($article_list as $article){
            if (!DB::table('article')->where('name', $article['name'])->exists()){
                DB::table('article')->insert($article);
            }
        }
    }
}
