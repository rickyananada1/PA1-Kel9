<!DOCTYPE html>
<html>

<!--Header Begin-->
@include('frontend.body.header')
<!--Header End-->


<body>
    <!-- banner -->
    <div class="banner pg-head">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home.user') }}"><img src="{{ asset('frontend/assets/images/2.jpg') }}"
                        alt="" /></a>
            </div>


            <!--Navigation Begin-->
            @include('frontend.body.nav')
            <!--Navigation End-->

            <div class="banner-info text-center">
                <h1>Alu - Alu Of <span>Sitoluama</span></h1>
            </div>
        </div>
    </div>
    <!-- //banner -->

    <!-- alu alu -->
    @yield('main')
    <!-- alu alu -->

    <!-- footer Begin -->
    <div class="footer">
        <div class="container">
            <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank"
                    href="http://h2design.taobao.com/">氢设计</a></p>
        </div>
    </div>
    <!-- footer End-->
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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

</html>
