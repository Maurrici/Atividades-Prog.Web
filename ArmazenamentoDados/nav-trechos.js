// Elementos da DOM
var buttons = document.querySelectorAll('button');
var boxes = document.querySelectorAll('div.box-cod');

//Variáveis de Aplicação
var btn_defaultStyle = "btn btn-lg btn-primary";
var btn_activeStyle = "btn btn-lg btn-primary active"

var box_defaultStyle = "box-cod d-none";
var box_activeStyle = "box-cod";

console.log(buttons);
console.log(boxes);

// Funções da Aplicação
function renderBox(indice){
    // Mudando estado do Botão
    var btnId = "btn" + indice;
    for (const btn  of buttons) {
        if(btn.id == btnId){
            btn.className = btn_activeStyle;
        }else{
            btn.className = btn_defaultStyle;
        }
    }

    //Renderizando Box
    for (const box of boxes) {
        if(box.id == indice){
            box.className = box_activeStyle;
        }else{
            box.className = box_defaultStyle;
        }
    }
}

function addOnclick(){
    var indice = 1;

    for (const btn of buttons) {
        btn.setAttribute('onclick', 'renderBox(' + indice + ')');
        indice++;
    }
}

// Funções de Inicialização
addOnclick();

renderBox(1);