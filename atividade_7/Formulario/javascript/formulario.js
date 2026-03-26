function validaCampo() {

let nome = document.getElementById("campoNome").value
let email = document.getElementById("campoEmail").value
let data = document.getElementById("data").value
let cpf = document.getElementById("campoCpf").value
let opcao = document.getElementById("interesse").value
let mensagem = document.getElementById("mensagem").value

if (nome === "" || email === "" || data === "" ||
    cpf === "" || opcao === "-1" || mensagem === "") {
    alert("Preencha todos os campos!")
    return false
} else {
    alert("Muito bem!")
    return true
    }
}