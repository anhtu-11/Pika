<!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                <p>Are you sure you want to log out?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no " data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="admin/assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap js -->
<script src="admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- feather icon js -->
<script src="admin/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="admin/assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- scrollbar simplebar js -->
<script src="admin/assets/js/scrollbar/simplebar.js"></script>
<script src="admin/assets/js/scrollbar/custom.js"></script>

<!-- Sidebar jquery -->
<script src="admin/assets/js/config.js"></script>

<!-- tooltip init js -->
<script src="admin/assets/js/tooltip-init.js"></script>

<!-- Plugins JS -->
<script src="admin/assets/js/sidebar-menu.js"></script>
<script src="admin/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="admin/assets/js/notify/index.js"></script>

<!-- Apexchar js -->
<script src="admin/assets/js/chart/apex-chart/apex-chart1.js"></script>
<script src="admin/assets/js/chart/apex-chart/moment.min.js"></script>
<script src="admin/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="admin/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="admin/assets/js/chart/apex-chart/chart-custom1.js"></script>

<!-- customizer js -->
<script src="admin/assets/js/customizer.js"></script>

<!-- ratio js -->
<script src="admin/assets/js/ratio.js"></script>

<!-- Theme js -->
<script src="admin/assets/js/script.js"></script>
<script>
    function ChangeToSlug() {
        var name, slug;

        // Lấy text từ thẻ input name
        name = document.getElementById("name").value;

        // Đổi chữ hoa thành chữ thường
        slug = name.toLowerCase();

        // Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');

        // Xóa các ký tự đặc biệt
        slug = slug.replace(/[^a-z0-9\s-]/g, '');

        // Đổi khoảng trắng thành dấu gạch ngang
        slug = slug.replace(/\s+/g, "-");

        // Xóa các dấu gạch ngang thừa ở đầu và cuối
        slug = slug.replace(/^-+|-+$/g, '');

        // Đảm bảo chỉ có một dấu gạch ngang liên tiếp
        slug = slug.replace(/-+/g, '-');

        // In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>

</body>


<!-- Mirrored from themes.pixelstrap.com/voxo/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 03:23:56 GMT -->

</html>