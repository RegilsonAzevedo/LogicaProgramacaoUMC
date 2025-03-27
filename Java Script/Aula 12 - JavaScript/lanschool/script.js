// get elementsByTagName -  Seleciona todas as tags que eu desejar
let paragrafos = document.getElementsByTagName('p')
paragrafos[0].innerHTML = 'palmeira não tem mundial !!'

// getElementsByid - Seleciona um único elemento do tipo ID
var titulo = document.getElementById('titulo')
titulo.innerHTML = 'Caiu em Itaquera o juiz Opera !!'

// getElementsByClassName - Seleciona todos os elementos do tipo class
const caixas = document.getElementsByClassName('caixa')
caixas[0].style.backgroundColor = 'green'
caixas[1].style.backgroundColor = 'yellow'

// querySelect - Seleciona um elemento do tipo class ou id
const paragrafoQuery = document.querySelector('#paragrafoQuery')
paragrafoQuery.style.backgroundColor = 'lightblue'
paragrafoQuery.style.padding = '10px'

// Função para alterar o titulo da Página
function alteraTexto() {
    let input = document.getElementsByTagName('input')[0].value
    titulo.innerHTML = input
}

// Função para alterar o paragrafoQuery
function alteraParagrafo() {
    let input = document.getElementsByTagName('input')[1].value
    paragrafoQuery.innerHTML = input
}

// querySelectAll - Seleciona todos elementos do tipo Class ou Id

const caixaQuery = document.querySelectorAll(".caixaQuery")
caixaQuery[0].style.backgroundColor = 'magenta'
caixaQuery[1].style.backgroundColor = 'black'
caixaQuery[1].style.color = 'magenta'
