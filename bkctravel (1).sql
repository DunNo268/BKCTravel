-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2022 lúc 03:26 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `BKC Travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `prd_image` varchar(255) NOT NULL,
  `prd_price` int(11) NOT NULL,
  `prd_time` varchar(100) NOT NULL,
  `prd_start` varchar(100) NOT NULL,
  `prd_vehicle` varchar(100) NOT NULL,
  `prd_featured` int(1) NOT NULL,
  `prd_details` text NOT NULL,
  CHECK(`prd_price` > 0)
) ;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`prd_id`, `prd_name`, `prd_image`, `prd_price`, `prd_time`, `prd_start`, `prd_vehicle`, `prd_featured`, `prd_details`) VALUES
(1, 'KHÁM PHÁ ĐỘNG THIÊN ĐƯỜNG 1 NGÀY', '1.png', 850000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 0, '- 06:30AM: Xe và hướng dẫn đón quý khách tại khách sạn (nằm trong trung tâm thành phố Huế) và khởi hành đi thăm động thiên đường 1 ngày. <br>
- 08:00AM: Quý khách đến và tham quan thánh địa La Vang (được mệnh danh là Tiểu Vương Cung Thánh Đường, nơi linh thiêng đối với những người theo đạo Thiên Chúa). <br>
Trên đường đi, xe di chuyển qua vĩ tuyến 17 (nơi từng chia cắt 2 miền nam bắc) quý khách sẽ được giới thiệu về các địa danh lịch sử cách mạng như: Thành cổ Quảng Trị, căn cứ Dốc Miếu, cầu Hiền Lương, sông Bến Hải. <br>
- 11:30AM: Đến vườn Quốc gia Phong Nha - Kẻ Bàng, quý khách dùng cơm trưa (bao gồm) và nghỉ ngơi. Sau khi dùng cơm trưa. <br>
- 01:00PM: Quý khách đến động Thiên Đường và lên xe golf của BQL vào tham quan bên trong động. Động Thiên Đường được phát hiện năm 2005 và được Hiệp hội hang động Hoàng gia Anh khám phá từ năm 2005-2010, vào năm 2010 họ công bố hang này có tổng chiều dài là 31,4 km. Do vẻ đẹp của nhũ đá và măng đá trong hang, họ đã đặt tên hang này là Thiên Đường. Theo đánh giá, động Thiên Đường còn to lớn và đẹp hơn cả động Phong Nha. <br>
- 03:00PM: Quý khách quay trở lại xe và cùng HDV BKC Travel về lại Huế. <br>
- 07:00PM: Xe đến Huế và trả quý khách tại khách. Chương trình thăm quan KHÁM PHÁ ĐỘNG THIÊN ĐƯỜNG 1 NGÀY kết thúc. <br>
Khởi hành: 06:30AM - Kết thúc: 07:00PM'),
(2, 'TOUR VƯỜN QUỐC GIA BẠCH MÃ 1 NGÀY', '2.png', 650000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 0, '- 07:30AM: Xe và hướng dẫn đón quý khách tại khách sạn hoặc điểm hẹn ở Huế (khách sạn nằm trong trung tâm Tp. Huế) và khởi hành đi tham quan Vườn Quốc Gia Bạch Mã. <br>
- 08:45AM: Đến Vườn Quốc Gia Bạch Mã, quý khách tham quan nhà trưng bày của VQG để tìm hiểu thêm các loại động thực vật sinh sống tại đây. <br>
- 09:30AM: Xe chở quý khách qua các sườn núi, cánh rừng nguyên sinh đến Biệt Thự Morin Bạch Mã, từ đây quý khách đi bộ theo con đường lát đá granit 800m lên đến Hải Vọng Đài. Ở độ cao khoảng 1,430m so với mặt nước biển, quý khách có thể ngắm nhìn toàn cảnh quan thiên nhiên kỳ thú của núi rừng, biển cả và đầm phá. Sự mát lạnh của gió núi, hương vị đậm đà của gió biển sẽ mang lại cho quý khách những giây phút khó quên. <br>
- Quý khách tiếp tục tham quan Ngũ Hồ bằng đi bộ trong rừng khoảng 30 phút (2km). Ngũ Hồ là tập hợp gồm 5 hồ nước ở 5 điểm cao khác nhau, Nước ở hồ rất trong và lạnh, trên hồ có thác đổ xuống. Một tấm ảnh là cần thiết để lưu lại khoảnh khắc tuyệt đẹp này. Quý khách nghỉ ngơi, tắm trong hồ và dùng bữa trưa pinic trên các phiến đá lớn cạnh hồ. <br>
- 01:30PM: Quý khách đi bộ khoảng 20 phút trên con đường dốc thoai thoải, xuyên qua một khu rừng xanh với nhiều loài thực vật, quý khách sẽ đến được đỉnh ngọn thác Đỗ Quyên hùng vĩ cao trên 300m. Trên thác nhìn ra xa, quý khách sẽ thấy núi rừng trập trùng. Ven các vách đá, hai bên thác và khe suối có nhiều cây hoa Đỗ Quyên cho hoa đỏ rực vào mùa xuân. Tháng 3 hằng năm là mùa hoa nở, cũng là dịp không thể bỏ qua để tham quan VQG Bạch Mã nói chung và thác Đỗ Quyên nói riêng. Nếu có đủ sức khỏe và thời gian cho phép, quý khách có thể leo xuống 700 bậc thang để tận mắt ngắm nhìn vẻ đẹp uy nghi của ngọn thác nổi tiếng này. <br>
- 02:30PM: Quý khách lên xe và về lại Huế. Trên đường về, quý khách tham quan tượng Quan Âm Bồ Tát được tạc bằng đá cẩm thạch trắng. <br>
- 04:30PM: Xe đến Huế và trả quý khách tại khách sạn. Chương trình tham quan TOUR VƯỜN QUỐC GIA BẠCH MÃ 1 NGÀY kết thúc. <br>
Khởi hành: 07:30AM - Kết thúc: 04:30PM'),
(3, 'TOUR DU LỊCH HOA LƯ - TAM CỐC 1 NGÀY', '5o.png', 650000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 0, '- 08:00AM: Xe và hướng dẫn viên công ty BKC Travel sẽ đón quý khách tại điểm hẹn hoặc tại khách sạn ở khu vực phố cổ Hà Nội và bắt đầu khởi hành đi Ninh Bình. Sau khoảng 2 tiếng đi xe chúng ta sẽ đến điểm dừng chân đầu tiên tại Hoa Lư kinh đô đầu tiên của nhà nước phong kiến tập quyền Việt Nam. <br>
- 10:30AM: Khi đến với Hoa Lư, chúng ta sẽ thăm quan 2 ngôi đền chính: Đền Vua Đinh, Đền Vua Lê (2 ngôi đền cách nhau khoảng 300m), được chiêm ngưỡng những công trình kiến trúc độc đáo từ thời xưa. Sau khi thăm quan kinh thành Hoa Lư, chúng ta đi tiếp đến với Tam Cốc cách 12km mất khoảng 20 phút đi ôtô. <br>
- 12:10AM: Sau khi quý khách dùng bữa trưa Buffet tại nhà hàng, du khách lên thuyền đi đến thăm Động Tam Cốc. <br>
Tam Cốc có nghĩa là ba hang: hang Cả, hang Hai và hang Ba. Đường đi vào Tam cốc chỉ có duy nhất 1 đường thủy thăm quan thắm cảnh động tam cốc mất khoảng 2h đồng hồ. Những chiếc thuyền nan sẽ đưa du khách tới thăm hang Cả, là hang lớn nhất và cũng là hang đẹp nhất, với chiều dài lên đến 127m, nằm dưới một quả núi lớn vắt ngang qua dòng Ngô Đồng. Du khách sẽ cảm nhận được không khí tuyệt vời của hương đồng gió nội, khi đi sâu vào lòng hang, quý khách được chiêm ngữơng thạch nhũ từ trần hang nhỏ xuống lô nhô óng ánh như những khối châu ngọc kỳ ảo… Tiếp tục cuộc hành trình xuyên thủy, du khách vào hang Hai và hang Ba. Cũng gần giống như hang Cả được ví von như một chiếc cầu vồng trải dài dọc theo đôi bờ sông Ngô Đồng thì hai hang còn lại cũng không kém phần hoành tráng… <br>
- 03:00PM: Quý khách trở lại bến đò sau đó tiếp tục đến thăm quan chùa Bích Động bằng xe đạp khoảng 1 tiếng ( Cách bến đò khoảng 2km). <br>
- 05:00PM: Quý khách thu dọn hành lý để chuẩn bị về Hà Nội. <br>
- 07:00PM: Về đến Hà Nội, kết thúc chương trình. Chương trình tham quan TOUR HOA LƯ - TAM CỐC 1 NGÀY kết thúc. <br>
Khởi hành: 08:00AM - Kết thúc: 07:00PM'),
(4, 'TOUR NHA TRANG 1 NGÀY VỊNH NHA PHU - ĐẢO KHỈ', '4.png', 850000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 0, '- 08:30AM: HDV và xe BKC Travel đón khách tại khách sạn ra cầu cảng Đá Chồng. Bắt đầu Tour Nha Trang Vịnh Nha Phu - Đảo Khỉ 1 Ngày. <br>
- 09:00AM: Tàu đưa quý khách đến Hòn Thị. Bắt đầu chương trình du ngoạn vịnh Nha Phu. Tham quan chụp hình với các chú đà điểu châu Phi và đàn hươu, nai trong khu rừng tự nhiên. - 09:45AM: Tàu đưa quý khách đến khu du lịch Suối Hoa Lan.Tham quan suối Hoa Lan, động Lan mô phỏng rừng cây hoá thạch lung linh muôn sắc màu. <br>
Khám phá Mê Cung Trận Đồ với đường đi lắc léo giữa rừng cây Phi Lao xanh thẳm. <br>
Tắm biển, thưởng thức trái cây, rược nhẹ, chèo xuồng ngắm cảnh Hồ Nghinh Xuân - Thuỷ Tiên và tham quan các khu sinh cảnh độc đáo đầy sáng tạo. Thưởng thức chương trình xiếc: gấu, voi… Chụp hình lưu niệm với đà điểu Châu Phi, cưỡi Voi và tham gia các dịch vụ thể thao dưới nước như: Cano, dù bay, thuyền Kayak (chi phí tự túc). <br>
- 12:15AM: Dùng cơm trưa tại nhà hàng. Thư giãn nghỉ ngơi trên bờ biển. <br>
- 01:30PM: Tàu đưa Quý khách qua Đảo Hòn Lao. Thưởng thức chương trình xiếc thú đặc sắc: Dê, khỉ, chó… Tiếp xúc với đàn khỉ tự nhiên, tham quan phong cảnh đảo, tham gia trò chơi đua xe mini F1 (chi phí tự túc). <br>
- 03:30PM: Tàu đưa quý khách vê cảng Đá Chồng. <br>
- 03h45PM: Xe đưa quý khách về Nha Trang, kết thúc Tour Du Lịch Nha Trang (Vịnh Nha Phu - Đảo Khỉ) 1 Ngày. Hẹn gặp lại chuyến đi sau. <br>
Khởi hành: 08:30AM - Kết thúc: 03:45PM'),
(5, 'TOUR DU LỊCH, KHÁM PHÁ MAI CHÂU 1 NGÀY', '5.png', 630000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 0, '- 07:45AM: Xe đón khách tại Hà Nội, khởi hành đi Mai Châu.
- 11:30AM: Xe tới Mai Châu. Quý khách ăn trưa ở Bản Lác. <br>
- 01:00PM: Tham quan tìm hiểu Bản Lác. Hướng dẫn viên du lịch của BKC Travel sẽ tổ chức cho khách đi xe đạp tham các bản Pom Coọng, Nà Phòn.Bản Lác đã có tuổi đời hơn 700 năm. Đây là nơi sinh sống của người dân tộc Thái đen. Họ sống bằng nghề chính, trồng lúa nương và dệt thổ cẩm là chính. Bản Lác là một món quà vô cùng đặc biệt của núi rừng dành tặng những ai yêu thích sự bình yên, tĩnh lặng để cùng hòa mình vào không gian khoáng đạt mướt xanh của núi rừng tại Hòa Bình.Bản Pom Coọng là một cái tên vô cùng độc đáo và ý nghĩa. Theo như tiếng Thái, Pom có nghĩa là quả đồi, Coọng có nghĩa là cái trống, Pom Coọng có nghĩa là bản của những quả đồi nằm trên cái trống khổng lồ, ở đây ý chỉ là đồng ruộng. Hiện nay, bản Pom Coọng có khoảng 70 hộ dân sinh sống với 7 dòng họ lớn luôn chung sống vui vẻ với nhau. <br>
- Khi đến du lịch với bản Pom Coọng, bạn không chỉ được nhìn ngắm vẻ đẹp thiên nhiên mà còn được khám phá những nét đẹp văn hóa vô cùng đặc biệt của người dân trong bản, chiêm ngưỡng những ngôi nhà sàn đặc trưng của dân tộc Thái của Tour Mai Châu. <br>
- 03:30PM: Du khách lên xe về Hà Nội. <br>
- 07:00PM: Kết thúc tour tại Hà Nội. <br>
Khởi hành: 07:40AM - Kết thúc: 07:00PM
'),
(6, 'TOUR BÁI ĐÍNH - TRÀNG AN 1 NGÀY', '6.png', 640000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 0, '- 08:00AM: Xe và Hướng dẫn viên của BKC Travel sẽ đón quý khách tại điểm hẹn khởi hành đi Tour Bái Đính Tràng An .Ninh Bình cách Hà Nội khoảng 100km. Xe sẽ dừng nghỉ ngơi 15 phút tại phủ lý khách hàng tự túc ăn sáng trên đường.Quý khách tiếp tục hành trình tour du lịch Tràng An - Bái Đính ! <br>
- 10:30AM: Đến chùa Bái Đính, từ bãi đỗ xe quý khách lên xe điện di chuyển đến cổng chùa Bái Đính ( khoảng 3km ). Quý khách thăm chùa Bái Đính cùng nổi tiếng với nhiều kỷ lục: Khuôn viên cả khu chùa Bái Đính có diện tích 107ha, trong đó, Điện thờ Tam Thế và Pháp Chủ rộng hàng ngàn mét vuông; tại ngôi chùa này có tượng Phật Tổ Như Lai bằng đồng lớn nhất Đông Nam Á nặng 100 tấn và ba pho tượng Tam Thế, mỗi pho nặng 50 tấn. các hang động ở đây cũng có nhiều nhũ đá đẹp không kém những hang động ở vịnh Hạ Long. Chùa Bái Đính đã trở thành điểm hành hương và du lịch miền Bắc thu hút đông đảo du khách trong và ngoài nước. <br>
- 12:00AM: Quý khách về nhà hàng nghỉ ngơi ăn trưa Buffet, cùng thưởng thức các đặc sản nơi đây ( Cơm cháy, dê núi…) <br>
- 13:30PM: Xe và hướng dẫn đưa du khách ra bến đò Tràng An lên thuyền đi dọc theo suối giữa cánh đồng lúa thăm khu du lịch Tràng An Mới với những dải đá vôi, thung lũng và những sông ngòi đan xen tạo nên một không gian huyền ảo, kỳ bí. <br>
Quý khách sẽ tham quan phim trường “Kong”, đặc biệt, nơi đây được các các nhà làm phim Hollywood lựa chọn làm bối cảnh cho tác phẩm bom tấn Kong: “Skull island“. Ngoài ra quý khách còn có cơ hội tham quan 4 hang động tự nhiên trong số những hang động đẹp nhất trong khu du lịch Tràng An là Hang Lấm, Hang Vạng, Hang Thánh Trượt và hang cuối cùng là Hang Đại, quý khách còn dừng chân ghé thăm 3 điểm tâm linh là đền Cao Sơn, đền Suối Tiên và Hành Cung Vũ Lâm. Tuyến này sẽ rất phù hợp với những bạn trẻ, những người thích chụp ảnh Check in, quý khách có thể có những trải nghiệm đầy đủ về hành trình ngồi đò thăm hang cũng như có thể lưu lại những cảm xúc, những bức hình đẹp trong hành trình về thăm Tràng An - Di sản văn hòa và thiên nhiên thế giới! <br>
- 04:00PM: Quý khách lên xe của BKC Travel trở về Hà Nội. <br>
- 04:30PM: Xe trả khách tại điểm hẹn. Chương trình tham quan TOUR BÁI ĐÍNH - TRÀNG AN 1 NGÀY kết thúc. <br>
Khởi hành: 08:00AM - Kết thúc: 04:30PM'),
(7, 'TOUR DU LỊCH HẠ LONG LUXURY 1 NGÀY', '7.png', 1500000, '1 Ngày', 'Hàng ngày', 'Xe Limousine', 0, '- 07:45AM: Hướng dẫn viên BKC Travel sẽ đón quý khách tại hoặc tại khách sạn trong khu vực phố cổ Hà Nội và khởi hành đi Hạ Long. <br>
- 10:30AM: Trên đường đi quý khách dừng nghỉ chân nghỉ ngơi khoảng 20 phút tại Hải Dương sau đó tiếp tục lên xe theo hành trình xuống Cảng Tuần Châu. <br>
- 12:15AM: Đến cảng Tuần Châu - Hạ Long, quý khách làm thủ tục lên tàu. <br>
- 12:30AM: Nhân viên trên tàu chào mừng quý khách và mời quý khách thưởng thức đồ uống chào mừng bằng một ly nước hoa quả. <br>
- 01:00PM: Hướng dẫn viên của công ty BKC Travel sẽ tóm tắt lịch trình đi của quý khách trước khi vào dùng bữa trưa. <br>
- 01:15PM: Nhân viên tàu phục vụ bữa trưa với các món ăn ẩm thực Việt và hải sản Hạ Long .Trong khoảng dùng bữa trưa tàu sẽ đưa quý khách len theo từng núi đá vôi để đến thăm hang Thiên Cung. <br>
- 03:00PM: Tàu đến hang Thiên cung , du khách sẽ rời tàu để đi thăm hang động lớn nhất ở Vịnh Hạ Long. Sau đó tàu tiếp tục đưa quý khách đến khám phá Hang Luồn. <br>
- 03:45PM: Rẽ vào Hang Luồn, du khách có thể chèo kayak/đò hoặc nghỉ tại tàu (Khách nào không sử dụng dịch vụ này có thể ở lại trên tàu). <br>
- 04:15PM: Qúy khách trở lại tàu để về cảng Tuần Châu,trên đường đi về cảng quý khách sẽ thưởng thức bữa chiều với trái cây, đồ ăn nhẹ… <br>
- 05:30PM: Qúy khách lên xe và trở về Hà Nội theo đường quốc lộ mới. <br>
- 06:30PM: Quý khách tới Hải Dương nghỉ ngơi 15 phút ,quý khách có thể mua bánh trái đặc sản Miền Bắc về làm quà cho người thân. <br>
- 09:00PM: Xe đưa khách về lại khách sạn Phố Cổ . Chương trình tham quan TOUR DU LỊCH HẠ LONG LUXURY 1 NGÀY kết thúc. <br>
Khởi hành: 07:45AM - Kết thúc: 09:00PM'),
(8, 'TOUR DU LỊCH ĐẢO YẾN - HÒN NÔI BÃI TẮM ĐÔI 1 NGÀY', '8n.png', 550000, '1 Ngày', 'Hàng ngày', 'Xe bus đời mới', 1, 'Đón khách: Từ 07:00-07:30 Đón khách tại khách sạn đưa đến Cảng Yến Sào Khởi hành đi Đảo Yến - Hòn Nội. Quý khách sẽ dùng điểm tâm sáng nhẹ (bánh mì chả cá + 01 chai nước Sanna 330ml + 01 lon nước Yến) <br>
Tham quan hang Yến tại Hòn Sam: Tàu cập bến, quý khách sẽ được tham quan hang Yến tại Hòn Sam, khám phá những rạn san hô đầy màu sắc bằng tàu đáy kính. <br>
Bãi tắm đôi Thần Tiên: Quý khách di chuyển đến bãi tắm đôi. Tại đây, Quý khách tự do nghỉ ngơi, thỏa sức bơi tắm biển vùng dưới làn nước trong xanh, hoặc dạo ngắm cảnh chinh phục đỉnh Du Hạ cao 90m và ngắm nhìn toàn cảnh Đảo Yến Hòn Nội và săn ảnh .Sử dụng các dịch vụ giải trí ở trên đảo như: câu cá, chèo thuyền kayak,…(có thu phí). <br>
Tham Quan Đền Thờ Tổ Nghiệp Khai Thác Yến: Quý khách ghé thăm Đền thờ Tổ nghề Yến Sào Khánh Hòa và tìm hiểu lịch sử hình thành, phát triển ngành nghề Yến Sào, do bà Lê Thị Huyền Trâm làm đảo chủ thánh mẫu vì đã có công trong cuộc chiến bảo vệ chủ quyền lãnh hải và các đảo Yến – Hòn Nội.Từ đó suy tôn lập miếu thờ trên các đảo yến để ghi nhớ công ơn các bậc tiền bối và những người đã ngã xuống để bảo vệ quê hương. <br>
Kết thúc: Tàu đưa quý khách về lại đất liền , xe đưa về lại khách sạn. Chương trình tham quan TOUR DU LỊCH ĐẢO YẾN - HÒN NÔI BÃI TẮM ĐÔI 1 NGÀY kết thúc. <br>
Khởi hành: 07:00AM - Kết thúc: 05:00PM'),
(9, 'TOUR DU LỊCH, THĂM QUAN BÀ NÀ HILL 1 NGÀY', '9m.png', 1150000, '1 Ngày', 'Hàng ngày', 'Ô tô chất lượng cao', 1, '- 07:00AM: Hướng dẫn viên cùng xe có mặt đón Quý khách tại điểm hẹn, khởi hành đi Bà Nà theo một trong những cung đường ven biển đẹp nhất Miền Trung. <br>
- 09:00AM: Có mặt tại khu vực Bà Nà, Quý khách di chuyển bằng cáp treo từ ga Suối Mơ lên với đỉnh Bà Nà Hillls, ngắm nhìn cảnh Suối Mơ, thác Tóc Tiên bọt tung trắng xóa. <br>
Tại đây, Quý khách có thể tham quan: <br>
- Khu LJardin với các di tích của người Pháp: vườn Tịnh Tâm, chuồng ngựa Pháp, cây bưởi 100 năm tuổi, vết tích khu biệt thự cổ thời xưa. <br>
- Viếng thăm chùa Linh Ứng, chiêm ngưỡng Phật Thích Ca đạt độ cao 27m, tham quan vườn Lộc Uyển, Quan Âm Các. <br>
- 11:30AM: Từ ga Debay, Quý khách cùng HDV The Sinh Cafe Tour tiếp tục chinh phục tuyến cáp treo thứ 2 để đến với đỉnh Núi Chúa - được mệnh danh “nóc nhà thành phố”. Quý khách dùng bữa trưa tại đây. <br>
- Sau khi nghỉ trưa tiếp tục khám phá khu Fantasy Park - một trong những khu trò chơi trong nhà lớn, hiện đại & hấp dẫn nhất ở châu Á. <br>
- Đến thăm viếng đền Lĩnh Chúa Linh Từ (hay còn gọi Bà Chúa Thượng Ngàn), thưởng ngoạn toàn cảnh thành phố Đà Nẵng và vịnh Đà Nẵng qua lớp sương mờ ảo vào buổi chiều lãng mạn trên đỉnh núi Bà Nà Hills. <br>
- 04:00PM: Quý khác đón tuyến cáp treo xuống núi, xe đón Quý khách quay về Đà Nẵng. Kết thúc chuyến tham quan vời đầy kỉ niểm khó quên cùng BKC Travel. <br> 
Khởi hành: 07:00AM - Kết thúc: 04:00PM'),
(10, 'TOUR DU LỊCH THÁNH ĐỊA MỸ SƠN - PHỐ CỔ HỘI AN 1 NGÀY', '10.png', 950000, '1 Ngày', 'Hàng ngày', 'Xe Limousine', 1, '- 08:00AM: Xe của công ty BKC Travel sẽ đón quý khách tại điểm hẹn lên đường đi đến Thánh địa Mỹ Sơn. <br>
- 09:30AM: Xe đưa quý khách tìm về với vẻ đẹp bí ẩn, huyền ảo của di sản văn hóa thế giới. Du khách có cơ hội khám phá Mỹ Sơn, tham quan khu Thánh địa lâu đời của Vương Quốc Chăm Pa với những đền tháp rêu phong bí ẩn từ thế kỉ VII, thưởng thức chương trình ca múa Chăm đặc sắc, thăm Trung Tâm Thánh Mẫu Trà Kiệu - đặt trên nền móng Kinh Thành xưa của người Chăm (Kinh thành Sư Tử). <br>
- 11:30PM: Ăn trưa và nghỉ ngơi. <br>
- 01:30PM : Xe và HDV BKC Travel đón quý khách và di chuyển đến Phố cổ Hội An. Bách bộ tham quan Phố Cổ với: Chùa Cầu Nhật Bản - biểu tượng của Hội An, Bảo tàng văn hóa Sa Huỳnh, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ - thưởng thức ca nhạc truyền thống Việt Nam. Du khách mua sắm tự do tại phố cổ. <br>
- 04:00PM: Xe đưa khách về lại khách sạn. Chương trình thăm quan TOUR DU LỊCH THÁNH ĐỊA MỸ SƠN - PHỐ CỔ HỘI AN 1 NGÀY kết thúc. <br>
Khởi hành: 08:00AM - Kết thúc: 04:00PM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_full`, `user_mail`, `user_pass`, `user_level`) VALUES
(1, 'Administrator', 'admin@gmail.com', '123456', 1),
(2, 'Nhanvien1', 'nv1@gmail.com', '123456', 2),
(3, 'Nhanvien2', 'nv2@gmail.com', '123456', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` int(1) NOT NULL,
  `created` date,
  CHECK(`amount` > 0)
) ;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders`(`order_id`,`user_name`,`user_phone`,`user_email`,`user_address`,`amount`,`status`,`created`) VALUES
(1, 'Nguyễn Văn A', '0834086145', 'nguyenvana@gmail.com', 'Hà Nội', '4700000', 2, '2022-05-01'),
(2, 'Nguyễn Thị B', '0791075832', 'nguyenthib@gmail.com', 'Hải Dương', '1950000', 2, '2022-05-02'),
(3, 'Trần Văn C', '0143598421', 'tranvanc@gmail.com', 'Thái Bình', '1700000', 2, '2022-05-06'),
(4, 'Trần Thị D', '0587411205', 'tranthid@gmail.com', 'Nghệ An', '630000', 2, '2022-05-08'),
(5, 'Lê Văn F', '0948572695', 'levanf@gmail.com', 'Thanh Hoá', '4200000', 2, '2022-05-09'),
(6, 'Lê Thị G', '0385728694', 'lethig@gmail.com', 'Hà Tĩnh', '4500000', 2, '2022-05-12'),
(7, 'Bùi Văn H', '0275836875', 'buivanh@gmail.com', 'Hải Phòng', '2300000', 1, '2022-05-14'),
(8, 'Bùi Thị I', '0683676937', 'buithii@gmail.com', 'Quảng Ninh', '1100000', 0, '2022-05-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `qty` varchar(30) NOT NULL,
  CHECK(`qty` > 0)
) ;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail`(`order_id`,`prd_id`,`qty`) VALUES
(1, 1, '4'),
(1, 2, '2'),
(2, 3, '3'),
(3, 4, '2'),
(4, 5, '1'),
(5, 6, '5'),
(6, 7, '3'),
(7, 9, '2'),
(8, 8, '3');

-- --------------------------------------------------------

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--

ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Chỉ mục cho bảng `user`
--

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`);

--
-- Chỉ mục cho bảng `orders`
--

ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--

ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--

ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;