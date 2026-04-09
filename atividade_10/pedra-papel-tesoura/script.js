const opcoes = ["pedra","papel","tesoura"]

let pontosJogador = 0
let pontosPc = 0

const imagens = {
    pedra: "img/pedra.png",
    papel: "img/papel.png",
    tesoura:"img/tesoura.png"
}

function jogar(escolhaJogador){

    // escolha aleatória do computador
    const pos = Math.floor(Math.random() * 2)
    const escolhaPc = opcoes[pos]

    // mostrar imagens escolhidas

    document.getElementById("imgJogador").src = imagens[escolhaJogador]
    console.log('escolha pc ' + escolhaPc)
    document.getElementById("imgPc").src = imagens[escolhaPc] 

    
   
   
    let mensagem = ""

    if(escolhaJogador === escolhaPc){
        mensagem = "Empate 😗"
        console.log("pontos jogador " + pontosJogador)
        console.log("pontos computador " + pontosPc)
    }
    else if(
        (escolhaJogador === "pedra" && escolhaPc === "tesoura") ||
        (escolhaJogador === "tesoura" && escolhaPc === "papel") ||
        (escolhaJogador === "papel" && escolhaPc === "pedra")
    ){
        pontosJogador++
        mensagem = "Você venceu 👨"
        document.getElementById("imgJogador").innerHTML = pontosJogador
        pontos = "Pontos jogador: " + pontosJogador + " | Pontos Computador: " + pontosPc
       
    }
    else{
        pontosPc++
        mensagem = "Computador venceu 🤖"
        document.getElementById("imgPc").innerHTML = pontosPc
        pontos = "Pontos jogador: " + pontosJogador + " | Pontos Computador: " + pontosPc
    }

    if (pontosJogador >= 10) {
        mensagem = "Parabéns! O Jogador venceu! Reiniciando os pontos!"
        pontosJogador = 0
        pontosPc = 0
    }

    else if (pontosPc >= 10) {
        mensagem = "Que pena! O Computador venceu... Reiniciando os pontos!"
        pontosJogador = 0
        pontosPc = 0
    }

    document.getElementById("mensagem").innerText = mensagem
    document.getElementById("pontos").innerText = pontos

    
}