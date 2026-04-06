function Calcular() {
    let nota1 = parseInt(document.getElementById("nota1").value)
    let nota2 = parseInt(document.getElementById("nota2").value)
    let nota3 = parseInt(document.getElementById("nota3").value)

    if (isNaN(nota1) || isNaN(nota2) || isNaN(nota3)) { // isNaN é o que o parseInt retorna caso alguem digite string
        alert("Favor informar as notas!")
    } else {
        let media = (nota1 + nota2 + nota3) / 3
        document.getElementById("resultado").innerHTML = media // innerHTML é para utilizar uma "variável HTML
    }
}