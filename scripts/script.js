var rootStyle = getComputedStyle(root);

function dark(){
    var root = document.querySelector(':root');
    root.style.setProperty('--background', '#121212 ');
    root.style.setProperty('--primary', '#332940');
    root.style.setProperty('--secondary', '#1F1B24');
    root.style.setProperty('--font', 'white');
}

function light(){
    var root = document.querySelector(':root');
    root.style.setProperty('--background', '#F9F9F9');
    root.style.setProperty('--primary', '#BCBABB');
    root.style.setProperty('--secondary', '#9D8F8F');
    root.style.setProperty('--font', '#625757');
}