<nav class="navbar navbar-expand-md navbar-default fixed-top ">
    <div class="container">
        <a href="{{route('main')}}">
            <img src="{{asset('img/bemo-logo2.png')}}" width="167" height="100" alt="Site Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('main')}}" class="nav-link">Main</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>

@push('script')
  <script>
        $(document).on('scroll', function (e) {
            $('.navbar').css('background', '#FFFFFF');
        });


        // function checkScroll(){
        //     var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

        //     if($(window).scrollTop() > startY){
        //         $('.navbar').addClass("scrolled");
        //     }else{
        //         $('.navbar').removeClass("scrolled");
        //     }
        // }

        // if($('.navbar').length > 0){
        //     $(window).on("scroll load resize", function(){
        //         checkScroll();
        //     });
        // }
  </script>
@endpush
