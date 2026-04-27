// Selecionando elementos
const inputNome = document.querySelector("#nome");
const inputIdade = document.querySelector("#idade");
const inputCidade = document.querySelector("#cidade");

const btnSalvar = document.querySelector("#salvar");
const btnMostrar = document.querySelector("#mostrar");
const btnLimpar = document.querySelector("#limpar");

const lista = document.querySelector("#lista");
const mensagem = document.querySelector("h3");

// SALVAR
btnSalvar.addEventListener("click", () => {
    const usuario = {
        nome: inputNome.value,
        idade: inputIdade.value,
        cidade: inputCidade.value
    };

    localStorage.setItem("usuario", JSON.stringify(usuario));

    mensagem.textContent = "Dados salvos com sucesso!";
   
});

// MOSTRAR
btnMostrar.addEventListener("click", () => {
    lista.innerHTML = "";

    const dados = localStorage.getItem("usuario");

    if (!dados) {
        lista.innerHTML = "<li>Nenhum dado encontrado</li>";
        return;
    }

    const usuario = JSON.parse(dados);

    lista.innerHTML = `
        <li><strong>Nome:</strong> ${usuario.nome}</li>
        <li><strong>Idade:</strong> ${usuario.idade}</li>
        <li><strong>Cidade:</strong> ${usuario.cidade}</li>
    `;
});

// LIMPAR
btnLimpar.addEventListener("click", () => {
    localStorage.removeItem("usuario");
    lista.innerHTML = "";
    mensagem.textContent = "Dados limpos com sucesso!";
});