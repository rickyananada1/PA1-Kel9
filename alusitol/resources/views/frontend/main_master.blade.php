<!DOCTYPE html>
<html>

<!--Header Begin-->
@include('frontend.body.header')
<!--Header End-->


<body>
    @include('frontend.body.banner')


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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Isotope plugin
        $('.portfolio').isotope({
            itemSelector: '.mix',
            layoutMode: 'fitRows'
        });

        // Filter items when filter link is clicked
        $('#filters li span').click(function() {
            var selector = $(this).attr('data-filter');
            $('.portfolio').isotope({
                filter: selector
            });
            return false;
        });

        // Add active class to the current filter link (highlight it)
        var url = window.location.href;
        $('#filters li span').each(function() {
            if (url.indexOf($(this).attr('data-filter')) != -1) {
                $(this).addClass('active');
            }
        });
    });
</script>

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
