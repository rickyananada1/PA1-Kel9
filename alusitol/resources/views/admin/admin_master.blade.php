<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!--  meta tags dan CSS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap-maizi.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/content-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/mricode.pagination.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/sweetalert.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">

    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: snow;
            font-weight: 700px;
            background-color: #5bc0de;
        }

        td {
            white-space: nowrap;
            overflow: auto;
            max-width: 100px;

        }
    </style>

</head>

<body>

    <!-- Start Navbar -->
    @include('admin.body.navbar')
    <!-- End Navbar -->

    <!-- start main content -->
    <!-- yield untuk dinamiss hasilkan konten ke siapa aja yang admin itu sectionnya-->
    @yield('admin')
    <!-- end main content -->

    <!-- Start Footer -->
    @include('admin.body.footer')
    <!--End Footer -->



</body>
<!-- Javascript-->
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/pagination/mricode.pagination.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/fancybox/jquery.fancybox.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/Chart.js') }}"></script>
<script src="{{ asset('backend/assets/js/common/common.js') }}"></script>
<script src="{{ asset('backend/assets/js/module/account.js') }}"></script>
<script src="{{ asset('backend/assets/js/script.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
    @endif
</script>

<!--ini itu untuk file reader jadi gambar apa yang dipilih sama user maka akan ditampilkan -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


</html>
