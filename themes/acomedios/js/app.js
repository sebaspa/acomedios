addEventListener( 'DOMContentLoaded' , () => {
    const btn_menu = document.querySelector('.btn_menu');
    if ( btn_menu ) {
        btn_menu.addEventListener( 'click' , () => {
            const menu_items = document.querySelector('.menu_items');
            menu_items.classList.toggle('show');

            const btn_close = document.querySelector('.btn_close');
            btn_close.classList.toggle('hidden');
            btn_close.classList.toggle('show');
            /*
            if (btn_close.style.display=='' || btn_close.style.display=='none' ){
                btn_close.style.display= 'block';
            }
            else{
                btn_close.style.display= '';
            }
            */
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
        autoplay: { delay: 10000},
        breakpoints : {
            1024:   {
                        slidesPerView:5 , 
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
});

