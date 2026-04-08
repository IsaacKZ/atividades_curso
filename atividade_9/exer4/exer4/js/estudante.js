let formulario = document.querySelector("form");

formulario.addEventListener("submit", function(evento) {
  evento.preventDefault();

  let nome = document.querySelector("#inNome").value;
  let nota1 = Number(document.querySelector("#inNota1").value);
  let nota2 = Number(document.querySelector("#inNota2").value);
  let freq = Number(document.querySelector("#inFreq").value);
  let resultado = document.querySelector("h3");

  let media = (nota1 + nota2) / 2;
  let situacao;

  if (freq < 75) {
    situacao = "Reprovado";
  } else if (media >= 7) {
    situacao = "Aprovado";
  } else if (media > 4) {
    situacao = "Em exame";
  } else {
    situacao = "Reprovado";
  }

  resultado.innerHTML = "Aluno: " + nome + "<br>Média: " + media.toFixed(2) + "<br>Situação: " + situacao;
});