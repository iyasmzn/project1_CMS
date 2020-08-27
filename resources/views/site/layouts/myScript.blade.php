<script>

    $(window).ready(function(){
        // $('.search-icon').click(function () {
        //    $('.search-input').animate({width: '200px'}, 'slow'); 
        // });
        // function searchShow() {
        //    $('.search-input').animate({width: '200px'}, 'slow'); 
        // }
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
            autoplayTimeout:4500,
        });
        $('#popular-carousel').owlCarousel({
            loop:true,
            margin:20,
            autoWidth: true,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        });
        
    AOS.init();

    });
    function showCommentForm() {
       $('.comments-form').css({height: 'auto', opacity: 1}, 'slow');   
       $('.paper-plane-icon').css({opacity: 0}, 'slow');   
    }
    function hiddenCommentForm() {
       $('.comments-form').css({height: '0', opacity: 0}, 'slow');   
       $('.paper-plane-icon').css({opacity: 1}, 'slow');   
    }
    function searchShow() {
       $('.search-input').animate({width: '200px'}, 'slow'); 
    };
    function searchHide() {
       $('.search-input').animate({width: '0px'}, 'slow'); 
    };
    function showSearchPage() {
       $('.search-page').css({transform: 'translateX(0px)'}, 'slow');   
       $('.psi-speech-bubble-comic-2').css({color: 'tomato'}, 'slow');   
       $('.search-full-page').css({backgroundColor: 'rgba(0,0,0,0.5)', width: '100%'}, 'slow');   
    }
    function hiddenSearchPage() {
       $('.search-page').css({transform: 'translateX(500px)'}, 'slow');   
       $('.psi-speech-bubble-comic-2').css({color: 'white'}, 'slow');   
       $('.search-full-page').css({backgroundColor: 'rgba(0,0,0,0)', width: '0px'}, 'slow');   
    }    
</script>
