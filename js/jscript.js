(function (jQuery) {

    var Page = (function () {

        var $navArrows = $('#nav-arrows'),
                $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
            autoplay: true,
            onBeforeChange: function (slide, pos) {

                $nav.removeClass('nav-dot-current');
                $nav.eq(pos).addClass('nav-dot-current');

            }
        }),
                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    // add navigation events
                    $navArrows.children(':last').on('click', function () {

                        slitslider.next();
                        return false;

                    });

                    $navArrows.children(':first').on('click', function () {

                        slitslider.previous();
                        return false;

                    });

                    $nav.each(function (i) {

                        $(this).on('click', function (event) {

                            var $dot = $(this);

                            if (!slitslider.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slitslider.jump(i + 1);
                            return false;

                        });

                    });

                };

        return {
            init: init
        };

    })();

    Page.init();

})(jQuery);

(function (jQuery) {
    jQuery("body").on("change", "#tjenis", function () {
        jQuery.ajax({
            url: 'request.php',
            type: 'post',
            data: {
                jenis_produk: jQuery('#tjenis').val()
            },
            dataType: 'json',
            success: function (reply) {
                jQuery('#nama_produk').html('<option>Pilih Produk</option>' + reply.produk_list + '');
                $("#dynamic_block-1").html('<input type="hidden" id="id_jenis" value= " ' + reply.jenis + ' " />');
                var id_jenis = jQuery('#id_jenis').val();
                if (id_jenis == 2) {
                    jQuery('#dynamic_block-4').html('<p><label>No Token </label><input type="text" class="t3" placeholder="Token" name="no_token" id="oke" required/>');
                    var dapet = jQuery('#oke').val();
                } else if (id_jenis == 1) {
                    jQuery('#dynamic_block-4').html('<p><input type="hidden" name="no_token" id="oke" />');
                }
            }

        });


    })

    jQuery("body").on("change", "#nama_produk", function () {


        jQuery.ajax({
            url: 'request.php',
            type: 'post',
            data: {
                idproduk: jQuery('#nama_produk').val()
            },
            dataType: 'json',
            success: function (reply) {
                jQuery('#nominal_produk').html('<option>Pilih Nominal Produk</option>' + reply.nominal_list + '');

            }
        });
    })
    jQuery("body").on("change", "#nominal_produk", function () {


        jQuery.ajax({
            url: 'request.php',
            type: 'post',
            data: {
                idproduk: jQuery('#nominal_produk').val()
            },
            dataType: 'json',
            success: function (reply) {
                jQuery('#dynamic_block-5').html('<input type="hidden" name="thargaa" id="oke value="' + reply.pricee + '"/>');

            }
        });
    })
})(jQuery);