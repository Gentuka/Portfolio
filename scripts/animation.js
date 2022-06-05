function about(){
    var element = document.getElementById('text')
    var aboutText = 'Hallo, ich bin Gent';

    element.innerText = "$ ";

    counter = 0;

    setTimeout(function() {
        addText(counter);
    }, 100)
    // addText(counter);
}

function addText(counter){
    var element = document.getElementById('text')
    var aboutText = 'Hallo, ich bin Gent';
    var random = Math.floor(Math.random() * 150);

    if (counter < aboutText.length){
        element.append(aboutText[counter]);
        console.log(counter);
        counter++;

        setTimeout(function() {
            addText(counter);
        }, random)
    }
}
