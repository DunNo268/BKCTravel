<style>@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&display=swap&subset=vietnamese');</style>    
<script async defer>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N8DPDJF');</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MP3356P');</script>
<!-- End Google Tag Manager -->

    <div id="body" style="margin-left: 100px; margin-right: 100px;">
    <script src="/Scripts/jquery.validate.min.js"></script>
    <script>
    $(document).ready(function () {
        $("#Feedback").validate({
            onclick: true,
            rules: {
                tuyendulich: {
                    required: true
                },
                ngaykhoihanh:{
                    required: true
                },                
                lh_hoten:{
                    required: true
                },
                lh_sodienthoai:{
                    required: true
                },
                lh_diachi:{
                    required: true
                },
                lh_email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                tuyendulich: "Vui lòng nhập tour/ tuyến du lịch",
                ngaykhoihanh: "Vui lòng nhập ngày khởi hành",
                lh_hoten: "Vui lòng nhập họ tên",
                lh_sodienthoai: "Hãy nhập số điện thoại của Quý Khách",
                lh_diachi:"Hãy nhập địa chỉ của Quý Khách",
                lh_email: {
                    required: "Vui lòng nhập email đúng định dạng!",
                    email: "Email không đúng định dạng!"
                }
            },
            errorPlacement: function (error, element) {
                element.attr("placeholder", error.text());
                //element.parents(".codediv").find("#txtconfirmcode").css("border", "solid 1px red");
            }
        });
    });
    </script>
    <div class="tit_fee">
        <h1>
            FEEDBACK ONLINE
        </h1>
    </div>
        <form Class="form-horizontal cofrm" action="/feedback" enctype="multipart/form-data" id="Feedback" method="post"><div class="waning_free">
        Kính chào Quý khách! BKC Travel rất hân hạnh được phục vụ Quý khách. Nhằm mang đến những trải nghiệm dịch vụ hoàn hảo hơn, rất mong Quý khách dành chút thời gian góp ý về chuyến đi vừa qua theo “Bảng đánh giá” bên dưới hoặc gọi đến số hotline CSKH 0367 791116.<br>
        Trân trọng cảm ơn Quý khách!<br />
        <i style="color:red;">* Lưu ý: Quý khách hãy điền thông tin đầy đủ, các text có dấu (*) là bắt buộc nhập thông tin.</i>
            </div>
                <div class="bl_fee">
                    <div id="num_free_tit">
                        <span class="num_free_tit">I</span><span style="padding-left:10px;">Nhận xét về dịch vụ:</span>
                    </div>
                    <div id="num_free_tit_2">
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:50%; float:left;">
                                * Tour/ Tuyến du lịch
                            </div>
                            <div style="width:50%; float:left;">
                                <input type="text" class="form-control" id="tuyendulich" name="tuyendulich" placeholder="Tuyến du lịch">
                            </div>   
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:50%; float:left;">
                                * Ngày khởi hành
                            </div>
                            <div style="width:50%; float:left;">
                                <input type="text" class="form-control" id="ngaykhoihanh" name="ngaykhoihanh" placeholder="Ngày khởi hành">
                            </div>
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div style="margin-left:30%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="imgs\feedback\1.jpeg" class="imgpoint" alt="tốt" />&nbsp;&nbsp;
                            <b>Tốt</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="imgs\feedback\2.jpeg" class="imgpoint" alt="khá" />&nbsp;&nbsp;
                            <b>Khá</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="imgs\feedback\3.jpeg" class="imgpoint" alt="trung bình" />&nbsp;&nbsp;
                            <b>Trung bình</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="imgs\feedback\4.jpeg" class="imgpoint" alt="kém" />&nbsp;&nbsp;
                            <b>Kém</b>
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-info" style="width:30%; float:left;">
                            Chương trình tham quan
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="chuongtrinhthamquan" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="chuongtrinhthamquan" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="chuongtrinhthamquan" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="chuongtrinhthamquan" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-success" style="width:30%; float:left;">
                            Khách sạn
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="khachsan" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="khachsan" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="khachsan" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="khachsan" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-info" style="width:30%; float:left;">
                            Nhà hàng
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="nhahang" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="nhahang" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="nhahang" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="nhahang" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-success" style="width:30%; float:left;">
                            Xe
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="xe" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="xe" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="xe" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="xe" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-info" style="width:30%; float:left;">
                            Tàu tuyền
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="tauthuyen" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="tauthuyen" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="tauthuyen" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="tauthuyen" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-success" style="width:30%; float:left;">
                            Tài xế
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="taixe" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="taixe" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="taixe" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="taixe" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                    <div class="bl_check text-center">
                        <div class="col-md-4 col-sm-4 col-xs-4 bg-info" style="width:30%; float:left;">
                            HDV BKC Travel
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 mg_top5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="hdv" id="inlineRadio1" value="Tốt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="hdv" id="inlineRadio1" value="Khá">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="hdv" id="inlineRadio1" value="Trung bình">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="hdv" id="inlineRadio1" value="Kém">
                        </div>
                    </div>
                </div>
                <div class="bl_fee">
                    <div id="num_free_tit">
                        <span class="num_free_tit2">II</span><span style="padding-left:10px;">Mức độ hài lòng của Quý khách với du lịch BKC Travel:</span>
                    </div>
                    <div id="num_free_tit_2">
                        <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                            <input type="radio" name="mucdohailong" id="inlineRadio1" value="Thất vọng không đi tiếp"> <span>Thất vọng không đi tiếp</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                            <input type="radio" name="mucdohailong" id="inlineRadio1" value="Tiếp tục với Fiditour"> <span>Tiếp tục với BKC Travel</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                            <input type="radio" name="mucdohailong" id="inlineRadio1" value="Sẽ trở lại nếu có cải thiện"> <span>Sẽ trở lại nếu có cải thiện</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                            <input type="radio" name="mucdohailong" id="inlineRadio1" value="Sẽ giới thiệu bạn bè người thân"> <span>Sẽ giới thiệu bạn bè người thân</span>
                        </div>
                    </div>
                </div>
                <div class="bl_fee">
                    <div id="num_free_tit">
                        <span class="num_free_tit3">III</span><span style="padding-left:10px;">Hành trình tiếp theo Quý khách muốn đến là nơi nào?:</span>
                    </div>
                    <div id="num_free_tit_2">
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                Tour du lịch
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="tourdulich" name="tourdulich" placeholder="Tour du lịch">
                            </div>                           
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                Thời gian
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="thoigian" name="thoigian" placeholder="Thời gian">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bl_fee">
                    <div id="num_free_tit">
                        <span class="num_free_tit3">IV</span><span style="padding-left:10px;">Còn điều gì Quý khách muốn chia sẻ mà chúng tôi chưa nhắc tới?:</span>
                    </div>
                    <div id="num_free_tit_2">
                        <textarea class="form-control" rows="3" placeholder="...................." name="chiase" id="chiase"></textarea>
                    </div>
                </div>
                <div class="bl_fee">
                    <div id="num_free_tit">
                        <span class="num_free_tit2">V</span><span style="padding-left:10px;">Quý khách biết đến Fiditour qua kênh::</span>
                    </div>
                    <div id="num_free_tit_2">
                        <div style="width:50%; float:left;">
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Website Fiditour"><span> Website BKC Travel</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Mạng xã hội (facebook, instagram, twitter...)"><span> Mạng xã hội (facebook, instagram, twitter...)</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Quảng cáo trên báo giấy (Tuổi Trẻ, Thanh Niên)"><span> Quảng cáo trên báo giấy (Tuổi Trẻ, Thanh Niên)</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Quảng cáo trên báo mạng (VnExpress, truoitre, dantri ...)"><span> Quảng cáo trên báo mạng (VnExpress, tuoitre, dantri ...)</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Tivi"><span> Tivi</span>
                            </div>
                        </div>
                        <div style="width:50%; float:left;">                                             
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Nhân viên Fiditour"><span> Nhân viên BKC Travel</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Tờ rơi, áp phích"><span> Tờ rơi, áp phích</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Bạn bè giới thiệu"><span> Bạn bè giới thiệu</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mg_top5">
                                <input type="radio" name="kenhtiepthi" id="inlineRadio1" value="Khác"><span> Khác</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bl_fee">
                    <div id="num_free_tit">
                        <span class="num_free_tit3">VI</span><span style="padding-left:10px;">Thông tin về Quý khách:</span>
                    </div>
                    <div id="num_free_tit_2">
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                * Họ và tên
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="lh_hoten" name="lh_hoten" placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                Ngày sinh
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="ngaysinh" name="lh_ngaysinh" placeholder="Ngày tháng năm sinh">
                            </div>
                        </div>
                    </div>
                    <div id="num_free_tit_2">
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                * Địa chỉ
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="lh_diachi" name="lh_diachi" placeholder="Địa chỉ">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                Giới tính
                            </div>
                            <div style="width:70%; float:left;">
                                    <select class="form-control" name="lh_gioitinh" id="gioitinh">
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nữ</option>
                                    <option value="Khac">Khác</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="num_free_tit_2">
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                * Số điện thoại
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="" name="lh_sodienthoai" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 mg_top5" style="width:50%; float:left;">
                            <div style="width:30%; float:left;">
                                * Email
                            </div>
                            <div style="width:70%; float:left;">
                                <input type="text" class="form-control" id="lh_email" name="lh_email" placeholder="Email">
                            </div>                          
                        </div>
                    </div>
                </div>
                    <div class="col-xs-12 col-md-6" style="display: inline-block; margin-left:450px; margin-top:20px;">
                        <span style="background-color: white; color: #404040; font-family: Arimo, Tahoma, Arial; font-size: 17px;">&nbsp;</span>
                        <a  href="index.php?page_layout=feedbackdone" style="background: rgb(26, 107, 178); border: none; box-sizing: inherit; color: white; display: inline-block; font-family: &quot;Hammersmith One&quot;, Tahoma, Arial; font-size: 1.125rem; margin: 0px 0.3em 10px 0px; padding: 0.4em 1.6em; text-decoration-line: none; text-transform: uppercase; transition: all 0.3s ease;">Gửi thông tin</a>
                    </div>
        </form>
    </div><br><br><hr>