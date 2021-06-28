<!-- jquery Core-->
<script src="{{asset('frontend')}}/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="{{asset('frontend')}}/js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="{{asset('frontend')}}/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
    <script>
        @if (Session::has('success'))
        toastr.success("{{Session::get('success')}}")
        {{-- expr --}}
        @endif
        @if (Session::has('warning'))
        toastr.info("{{Session::get('info')}}")
        {{-- expr --}}
        @endif
        @if (Session::has('error'))
        toastr.error("{{Session::get('error')}}")
        {{-- expr --}}
        @endif
    </script>