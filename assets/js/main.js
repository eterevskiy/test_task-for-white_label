$('.menu-btn').click(function(event){
    $('body').toggleClass('lock');
    $('.menu').toggleClass('active');
	
})
let whyTahitiItems = document.querySelectorAll('.why_tahiti__item'); 
 
if(whyTahitiItems) { 
    whyTahitiItems.forEach(item => { 
        let text = item.querySelector('.why_tahiti__item-text'); 
        let button = item.querySelector('.why_tahiti__item-btn'); 
            button.addEventListener('click', function(e){ 
            e.preventDefault(); 
            if(button.innerHTML == "Hide Text") { 
                text.classList.remove('active'); 
                button.classList.remove('active'); 
                button.innerHTML = "Learn more"; 
            } else { 
                text.classList.add('active'); 
                button.classList.add('active'); 
                button.innerHTML = "Hide Text"; 
            }      
        }); 
    }); 
}
$('.hero__slider').slick(
    {
        arrows: false,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
    }
);
Fancybox.bind("[data-fancybox]");