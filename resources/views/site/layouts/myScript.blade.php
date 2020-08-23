<script>
    $(window).ready(function(){
        AOS.init();
        $('#header-carousel').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop:true,
            margin:10,
            nav:true,
            navText: [
                "<span><img src='https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/1374341121530177260-512.png'></span>",
                "<span><img src='https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/12297514291530177259-512.png'></span>"
            ],  
            items: 1,
            smartSpeed: 200,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        });
    });
</script>
