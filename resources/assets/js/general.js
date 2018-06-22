$(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

    $('.content-title').on('click', function(){
        $(this).siblings('ul').slideToggle(250);
    });
    
});