addEventListener( 'DOMContentLoaded' , () => {
    const btn_menu = document.querySelector('.btn_menu');
    if ( btn_menu ) {
        btn_menu.addEventListener( 'click' , () => {
            const menu_items = document.querySelector('.menu_items');
            menu_items.classList.toggle('show');

            const btn_close = document.querySelector('.btn_close');
            btn_close.classList.toggle('hidden');
            btn_close.classList.toggle('show');
        });
    }

    const btn_close = document.querySelector('.btn_close');
    btn_close.addEventListener( 'click' , () => {
        const menu_items = document.querySelector('.menu_items');
        menu_items.classList.toggle('show');
        btn_close.classList.toggle('hidden');
        btn_close.classList.toggle('show');
    });

    const swiper = new Swiper('.swiper', {
        speed: 400,
        spaceBetween: 20,
        loop:true,
        resizeObserver: true,
        slidesPerView : 1,
        centeredSlidesBounds : true,
        centeredSlides: true,
        autoplay: { delay: 15000},
        breakpoints : {
            1024:   {
                        slidesPerView:3 , 
                        spaceBetween: 20 , 
                        centerInsufficientSlides: true ,
                        centeredSlides: true, 
                        centeredSlidesBounds : true,},
            768:    {
                        slidesPerView:3 , 
                        spaceBetween: 20 , 
                        centerInsufficientSlides: true , 
                        centeredSlides: true, 
                        centeredSlidesBounds : true,
                    },
            300:    {
                        slidesPerView:1 , spaceBetween: 5 , 
                        centerInsufficientSlides: true , 
                        centeredSlides: true ,
                        centeredSlidesBounds : true, 
                    },
        }
    });


    jQuery("div.todos > a").on("click", function () {
        jQuery(".grid-gallery > a.todos ").fadeOut("slow");
        jQuery(".grid-gallery > a.todos ").fadeIn("slow");
    });

    jQuery("div.rugiendo > a").on("click", function () {
        jQuery(".grid-gallery > a.todos ").fadeOut("slow");
        jQuery(".grid-gallery > a.rugiendo ").fadeIn("slow");
    });

    jQuery("div.momentos > a").on("click", function () {
        jQuery(".grid-gallery > a.todos ").fadeOut("slow");
        jQuery(".grid-gallery > a.momentos ").fadeIn("slow");
    });

    jQuery("div.historia > a").on("click", function () {
        jQuery(".grid-gallery > a.todos ").fadeOut("slow");
        jQuery(".grid-gallery > a.historia ").fadeIn("slow");
    });
 
    if( script_data.pageName=="personas-reales" )
    {
      jQuery("img.grid-gallery__image").lazyload();
      lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'alwaysShowNavOnTouchDevices': true,
        'positionFromTop': 100,
      });
    }

    jQuery('input[type=file]#cv').change(function(){
      var filename = jQuery(this).val().split('\\').pop();
      var idname = jQuery(this).attr('id');
      console.log(jQuery(this));
      console.log(filename);
      console.log(idname);
      jQuery('label[for="cv"]').html(filename);
     });
});

