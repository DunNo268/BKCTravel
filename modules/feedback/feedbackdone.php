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
            <div style="width: 90%; border: dotted 1px #ffd800; background-color: #fffade; margin-left: auto; margin-right: auto; padding: 15px; margin-top: 15px;">
            <h3 style="color:green;">Bạn đã gửi Đánh giá thành công!</h3><br />
            <span>
            BKC Travel trân trọng,<br>
            </span><br><br>
            <a href="index.php?page_layout=feedback" title="Gửi thư góp ý" rel="nofollow">Gửi lại đánh giá</a>
        </div>
    </div><br><br><hr>