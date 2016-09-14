var site = function(){};

site.prototype.slideshow = function(){
    if (typeof $.fn.cycle === "function") {
        $('.ss-items').cycle({
            fx              : 'fade',
            containerResize : 0,
            timeout         : 5000,
            width           : '100%',
            fit             : 1
        });

        $('.slideshow .ss-items').cycle({
            prev : '.ss-nav-prev',
            next : '.ss-nav-next'
        });
        
        $('.ss-product .ss-items').cycle({ 
            fx:     'turnDown', 
            speed:  'fast', 
            timeout: 0, 
            pager:  '.ss-thumbs', 
            pagerAnchorBuilder: function(idx, slide) { 
                return '.ss-thumbs li:eq(' + idx + ') a'; 
            } 
        });
    }
};

site.prototype.bxSlider = function(){
    if (typeof $.fn.bxSlider === "function") {
        $('.bxslider').bxSlider({
            minSlides: 1,
            maxSlides: 4,
            slideWidth: 300,
            slideMargin: 0
        });
    };
};

site.prototype.zoom = function(){
    if (typeof $.fn.zoom === "function") {
        
        for (var i = 0, len = _zoom.length; i < len; i++) {
            console.log('.zoom-' + i);
            $('.zoom-' + i).zoom({
                url: base_url + 'assets/images/gallery/fatboy/' + _zoom[i]
            });
        }
    };
};

site.prototype.scroll = function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
};

var objSite = new site();

$(window).load(function(){});

$(window).resize(function(){});

$(function(){});


registrationMailer = function(){
    $('.msg-registration').remove();
    var d = $('#registration').serialize();
    $.ajax({
        url : base_url + 'inscricao/ajax_mailer_record/',
        type : 'POST',
        data : d,
        success: function (data) {
            var r = JSON.parse(data);
            $('#registration input[name=txt_email]').after('<div class="msg-registration ' + r._return + '">' + r._msg + '</div>');
        }
    });
    return false;
};

autoScroll = function(eTarget){
    eTarget  = typeof eTarget !== 'undefined' ?  eTarget : '.target-scroll';
    var $target = $(eTarget);
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
};

loadMore = function(controller, filter){
    controller  = typeof controller !== 'undefined' ?  controller : '';
    filter  = typeof filter !== 'undefined' ?  filter : '';
    var paginate = $('input[name=load-more-paginate]');
    var total = $('input[name=load-more-total]');
    var target = $('.load-more');
    
    var current = paginate.val();
    var numRegister = 6;
    var loadMore = current + ',' + numRegister;
    
    filter = filter + '&total=' + total.val();
    
    $.ajax({
        url: base_url + controller + '/ajax_html_list',
        type: 'GET',
        data: 'pag=' + loadMore + '&' + filter,
        success: function (data) {
            var r = JSON.parse(data);
            total.val(r._total);
            if(r._total <= numRegister){
                $('.btn-load-more').hide();
            }
            if('NULL' !== r._return){
                $(r._return).appendTo(target);
                var pag = (parseInt(paginate.val()) + numRegister);
                paginate.val(pag);
            }else{
                $('.btn-load-more').hide();
                $('<div class="col-sm-12 text-center bg-color-1 large pt-20 pb-20">Fin des publications</div>').appendTo(target);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            $('<div>Erro ao tentar carregar registros.</div>').appendTo(target);
        }
    });
};

maps = function(address, elem){
    address  = typeof address !== 'undefined' ?  address : '';
    elem  = typeof elem !== 'undefined' ?  elem : 'map-canvas';
    var geocoder;
    var map = null;

    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var mapOptions = {
      zoom: 15,
      center: latlng
    };
    map = new google.maps.Map(document.getElementById(elem), mapOptions);
    
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        } else {
          $('#' + elem).remove();
        }
    });

    map = new google.maps.Map(document.getElementById(elem), mapOptions);
    var contentString = '';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: latlng, 
        map: map
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
};
