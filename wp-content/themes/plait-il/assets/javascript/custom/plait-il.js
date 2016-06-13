function toggleMenu () {
    $('#navigation').fadeToggle().toggleClass('active');
}
$('body #navigation .menu-header-container #menu-header li a').click(function(){
    toggleMenu();
})
