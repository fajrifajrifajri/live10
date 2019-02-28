<script src={{ asset('js/jquery.min.js') }}></script>
<script src={{ asset('js/bootstrap.js') }}></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        dots:false,
        nav:true,
        navText : ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
        responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            })
</script>