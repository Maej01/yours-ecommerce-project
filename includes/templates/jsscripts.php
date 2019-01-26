<!-- js scripts -->
<script src="public_files/js/jquery-3.3.1.min.js"></script>
<script src="public_files/js/materialize.min.js"></script>
<script src="public_files/js/wow.min.js"></script>
<script src="public_files/js/jqzoom.js"></script>

<script>
    $(function(){
        new WOW().init();
        $('.slider').slider({
            indicators : false, 
            interval: 5000,
            tansition: 500,
            full_width: true,
            full_height: true
        });
        $('.sidenav').sidenav();
        $('.tooltipped').tooltip();
        $('select').formSelect();
        $('.fixed-action-btn').floatingActionButton();
        $('.autocomplete').autocomplete({
            data: {
                "JORDAN AIR": null,
                "ADIDAS": null,
                "ADIDAS YEEZY BOOST": null,
                "NIKE": null,
                "NIKE AIR VAPOUR MAX": null,
                "NIKE SPON": null,
                "NIKE AIR": null,
                "SHIELD MAN SHOE": null,
                "VANS": null,
            }
        });
        // image zoom
        $('#bzoom').zoom({
            zoom_area_width: 300,
            autoplay_interval: 3000,
            autoplay: false
        });


        // scroll down and up 
        var offset = 40;
        // var duration = 500;

        $(window).scroll(function(){
            if($(this).scrollTop() > offset){
                $('#topButton').fadeIn();
            }else{
                $('#topButton').fadeOut();
            }
        });

        // $('#topButton').click(function(){
        //     $('html, body').animate({scrollTop: 0},800);
        // });

    });
</script>