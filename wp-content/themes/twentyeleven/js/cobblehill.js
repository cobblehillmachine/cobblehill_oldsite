
// Reset jQuery depending on what plugins are doing
var $ = jQuery;


/**
 * CobbleHill
 *
 * Main site setup stuff
 */
var CobbleHill = new(function() {

    var _self = this;
    var _gallery;

    this.name = "CobbleHill";

    this.init = function() {
        _gallery = $('#WorkGallery');
        _galleryItems = $('#WorkGallery li');

        _self.setup();
        Slides.init();
        _self.showSite();
        _self.checkForm();
    };

    this.showSite = function() {
        $('#loader').delay(500).fadeOut(1000);
    };

    this.checkForm = function() {
        $('#ContactForm textarea').focus(function(){
            if ($(this).val() == 'Message')
                $(this).val('');
        })
        .blur(function() {
            if ($(this).val() == '')
                $(this).val('Message');
        });
        if (window['email_success']) {
            $('#ContactForm').append('<span class="success">Email successfully sent!</span>');
        }
    };

    this.setup = function() {
        if (_gallery.size()) {
            _galleryItems.click(function() {
                _galleryItems.removeClass('selected');
                $(this).addClass('selected');

                // swap image
                $('#large img').attr('src', $(this).children('img').data('large'));

                return false;
            });
            _galleryItems.first().addClass('selected');

            // set selected
            $('.menu ul li a').each(function() {
                if ($(this).html() == 'Work') {
                    $(this).parent().addClass('current_page_item');
                }
            });
        }
    }

    if ($('#work').size()) {

        $('#work .row').adipoli({
            'startEffect' : 'normal',
            'hoverEffect' : 'popout'
        });
    }

    return this;
})();


/**
 * Slides
 *
 * Runs the slideshow on the homepage
 */
var Slides = new(function() {

    var _self = this;
    var image_width;
    var images_width;
    var selected_index = 0;
    var clicked_index = 0;
    var last_index = 0;
    var count;

   this.init = function init() {
        if ($('#slideshow ul li').size() < 1) {
            return;
        }

        count = $('#slideshow ul li').size() / 2;
        selected_index = count;

        getImagesWidth();
        setImage(count);
        setTimer();

        // set UL width
        $('#slideshow ul').css('width', $('#slideshow ul li').size() * $('#slideshow ul li').width() + 'px' );

        $('#slideshow ul li').click(_onSlideClick);
        $('#slideshow').mouseover(_onSlideHoverIn);
        $('#slideshow').mouseout(_onSlideHoverOut);
    };

    function getImagesWidth($refresh) {
        if ($refresh && images_width) {
            return images_width;
        }
        var width = 0;
        $('#slideshow ul li').each(function() {
            width += (image_width ? image_width : image_width = $(this).width());
        });
        return images_width = width;
    };

    function setTimer() {
        _interval = setInterval(function() {
            $('#slideshow ul li').eq(count + 1).click();
        }, 5000);
    };

    function unsetTimer() {
        clearInterval(_interval);
        _interval = null;
    };

    function setImage($index, $click) {
        if ($index < 0 || $index >= $('#slideshow ul li').size()) {
            console.error('Index out of bounds.');
            return;
        }

        $('#slideshow ul li').removeClass('selected');

        if ($click)
            selected_index = clicked_index;

        $('#slideshow ul').animate({
            marginLeft: (- ($index * image_width) - (image_width / 2)) + 'px'
        }, 500, $click ? _onSlideAnimateCompleteAlt : _onSlideAnimateComplete);
    };

    function _onSlideClick($e) {
        clicked_index = $(this).index();

        if (clicked_index != count) {
            setImage(clicked_index, true);
            return false;
        }

        window.location = $(this).find('a').attr('href');
    };

    function _onSlideAnimateComplete($e) {
        $('#slideshow ul li').eq(selected_index).addClass('selected');
        last_index = selected_index;
    };

    function _onSlideAnimateCompleteAlt($e) {
        $('#slideshow ul li').eq(selected_index).addClass('selected');

        var slideswidth = $('#slideshow').width();
        var slidecount = $('#slideshow ul li').size();
        var slides =  (- image_width / 2);

        if (selected_index > last_index) {
            $('#slideshow ul li').first().clone().appendTo('#slideshow ul');
            $('#slideshow ul li').first().remove();
        } else {
            $('#slideshow ul li').last().clone().prependTo('#slideshow ul');
            $('#slideshow ul li').last().remove();
        }

        selected_index = count;

        $('#slideshow ul').css({
            marginLeft: (- (selected_index * image_width) - (image_width / 2)) + 'px'
        });

        $('#slideshow ul li').unbind('click').click(_onSlideClick);
    };

    function _onSlideHoverIn($e) {
        unsetTimer();
        //setTimer();
    };

    function _onSlideHoverOut($e) {
        unsetTimer();
        setTimer();
    };

})();


/**
 * Start everything up
 */
$(document).ready(CobbleHill.init);