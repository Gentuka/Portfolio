function basic(){
    var element = document.getElementById('text');

    element.innerText = "$ ";

    counter = 0;

    setTimeout(function() {
        addText(counter, "Basic", 'text');
    }, 100)
}

function about(){
    var element = document.getElementById('text');

    element.innerText = "$ ";

    counter = 0;

    setTimeout(function() {
        addText(counter, "Hallo, ich bin Gent und mache meine Ausbilung als Anwendungsentwickler", 'text');
    }, 100)
}

function work(){
    
}

function addText(counter, aboutText, id){
    var element = document.getElementById(id)
    var text = aboutText;
    var random = Math.floor(Math.random() * 150);

        if (counter < aboutText.length){
            element.append(aboutText[counter]);
            counter++;
            setTimeout(function() {
                addText(counter, text, id);
            }, random)
        } 
}
