function setDarkmodeInstand(){
    var root = document.querySelector(':root');
    root.style.setProperty('--background', '#121212 ');
    root.style.setProperty('--primary', '#332940');
    root.style.setProperty('--secondary', '#1F1B24');
    root.style.setProperty('--font', 'white');
    root.style.setProperty('--marked', '#332940');
}

function dark(){
    var root = document.querySelector(':root');
    root.style.setProperty('--background', '#121212 ');
    root.style.setProperty('--primary', '#332940');
    root.style.setProperty('--secondary', '#1F1B24');
    root.style.setProperty('--font', 'white');
    root.style.setProperty('--marked', '#332940');
}

function light(){
    var root = document.querySelector(':root');
    root.style.setProperty('--background', '#F9F9F9');
    root.style.setProperty('--primary', '#BCBABB');
    root.style.setProperty('--secondary', '#9D8F8F');
    root.style.setProperty('--font', '#625757');
    root.style.setProperty('--marked', '#9D8F8F');
}

function clearFrame(){
    var text = document.getElementById("text");
    text.innerText = "$ Cleared";
}

setDarkmodeInstand();