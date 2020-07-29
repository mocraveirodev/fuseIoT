function showTab(tab){
    var ideacaotab = document.querySelector("#ideacao");
    var escopotab = document.querySelector("#escopo");
    var prototipotab = document.querySelector("#prototipo");
    var producaotab = document.querySelector("#producao");

    switch(tab) {
        case "ideacao":
            ideacaotab.style.display = "block";
            escopotab.style.display = "none";
            prototipotab.style.display = "none";
            producaotab.style.display = "none";
        break;
        case "escopo":
            ideacaotab.style.display = "none";
            escopotab.style.display = "block";
            prototipotab.style.display = "none";
            producaotab.style.display = "none";
        break;
        case "prototipo":
            ideacaotab.style.display = "none";
            escopotab.style.display = "none";
            prototipotab.style.display = "block";
            producaotab.style.display = "none";
        break;
        case "producao":
            ideacaotab.style.display = "none";
            escopotab.style.display = "none";
            prototipotab.style.display = "none";
            producaotab.style.display = "block";
        break;
    }

    if (tematab.style.display === "none") {
        tematab.style.display = "block";
    } else {
        tematab.style.display = "none";
    }

}