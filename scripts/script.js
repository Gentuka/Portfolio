function hamburger() {
    var navItems = document.getElementById('navItems');
    
    if (navItems.classList.contains('display-none')){
        navItems.classList.remove('display-none');
    } else {
        navItems.classList.add('display-none');
    }


}