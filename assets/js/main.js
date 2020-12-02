function include(file) { 
    var script  = document.createElement('script'); 
    script.src  = file; 
    script.type = 'text/javascript'; 
    script.defer = true; 

    document.getElementsByTagName('head').item(0).appendChild(script);
} 
include('/home-instead/wp-content/themes/homeinstead/assets/js/audio.js');
include('/home-instead/wp-content/themes/homeinstead/assets/js/slide.js');

//Show modal on Page Load
$(window).on('load',function(){
    $('#myModal').modal('show');
});

//Toggle Button
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links1')[0]

toggleButton.addEventListener('click' , () => {
    navbarLinks.classList.toggle('active')
});