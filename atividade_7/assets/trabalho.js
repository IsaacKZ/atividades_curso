// onClick
document.getElementById("botao1").onclick = function() {
    alert("Botão clicado uma vez!");
}

// onDblClick
document.getElementById("botao01").ondblclick = function() {
    alert("Botão clicado duas vezes!");
}

// onKeyPress
document.getElementById("keypress").onkeypress = function() {
    alert("Tecla pressionada! (onKeyPress)");
}

// onKeyDown
document.getElementById("keydown").onkeydown = function() {
    alert("Tecla pressionada! (onKeyDown)");
}

// onKeyUp
document.getElementById("keyup").onkeyup = function() {
    alert("Tecla solta! (onKeyUp)");
}

// onBlur
document.getElementById("blur").onblur = function() {
    alert("Saiu da caixa de texto! (onBlur)");
}

// onFocus
document.getElementById("focus").onfocus = function() {
    this.placeholder = "Você entrou no campo!";
}

document.getElementById("focus").onblur = function() {
    this.placeholder = "Clique aqui...";
}