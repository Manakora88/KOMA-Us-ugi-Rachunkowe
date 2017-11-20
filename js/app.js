$(document).ready(function() {

    // slajder główny
            $('.carousel').carousel({
              interval: 4000
            })

    // animacje na stronie
            $('*[data-animate]').addClass('hide-element').each(function(){
                $(this).viewportChecker({
                    classToAdd: 'show-element animated ' + $(this).data('animate'),
                    classToRemove: 'hide-element',
                    offset: '20%'
                });
            });

    //scroll-to-section
            //reset scrolla
            $.scrollTo(0);

            $("#link-firm").on("click", function() {
                $.scrollTo($("#firm"),500);
                $(this).parent().parent().parent().collapse("toggle");
            });
            $("#link-offer").on("click", function() {
                $.scrollTo($("#offer"),500);
                $(this).parent().parent().parent().collapse("toggle");
            });
            $("#link-consult").on("click", function() {
                $.scrollTo($("#consult"),500);
                $(this).parent().parent().parent().collapse("toggle");
            });
            $("#link-price").on("click", function() {
                $.scrollTo($("#price"),500);
                $(this).parent().parent().parent().collapse("toggle");
            });
            $("#link-contact").on("click", function() {
                $.scrollTo($("#contact"),500);
                $(this).parent().parent().parent().collapse("toggle");
            });
            $("#l-offer").on("click", function() {
                $.scrollTo($("#offer"),500);
            });
            $("#l-consult").on("click", function() {
                $.scrollTo($("#consult"),500);
            });
            $("#l-contact").on("click", function() {
                $.scrollTo($("#contact"),500);
            });

    //logo slider
            $('#media').carousel({
                pause: true,
                interval: 10000
            });

    //Sekcja "kontakt" - google maps
            var uluru = {lat: 51.975655, lng: 20.154690};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });

            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });

            var infowindow = new google.maps.InfoWindow({
                content: "<h6>Nowobielańska 45A</h6>"
            });

            marker.addListener("click", function() {
                infowindow.open(map, marker);
            });

});
