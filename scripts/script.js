function hamburger() {
    var navItems = document.getElementById('navItems');
    var bottomBorder = document.getElementById('border-bottom');
    
    if (navItems.classList.contains('display-none')){
        navItems.classList.remove('display-none');
        bottomBorder.classList.remove('display-none');
    } else {
        navItems.classList.add('display-none');
        bottomBorder.classList.add('display-none');
    }
}

function toggleThema() {
   var checkBox = document.getElementById('toggle');
   var root = document.querySelector(':root');
   
    if (checkBox.classList.contains('checked')){
        checkBox.classList.remove('checked');
        root.style.setProperty('--main-bg-color', '#1a0b0c');
        root.style.setProperty('--primary-color', '#1a0b0c');
        root.style.setProperty('--secondary-color', '#4a4d4e');
        root.style.setProperty('--font-color', '#e2a528');
    } else {
        checkBox.classList.add('checked')
        root.style.setProperty('--main-bg-color', '#fdf6e3');
        root.style.setProperty('--primary-color', '#fdf6e3');
        root.style.setProperty('--secondary-color', '#181819');
        root.style.setProperty('--font-color', '#2aa198');
    }

}