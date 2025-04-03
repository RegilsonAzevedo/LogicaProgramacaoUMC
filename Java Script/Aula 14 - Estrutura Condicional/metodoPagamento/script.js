
function calcularPagamento() {
    



    // switch Case - Menu
    // if


    // Metodos de pagamento
    // Pix - 10% desconto
    // Débito - 5% desconto
    // Crétido - sem desconto

    let formaPagamento = document.querySelector('#formaPagamento').value
    let valorTotal = parseFloat(document.querySelector('#valorCompra').value)
    let resultado = document.querySelector('#resultado')
    let valorFinal

    if (valorTotal<= 0 || isNaN(valorTotal)) {
        resultado.innerHTML = 'Por favor insira um número válido'
    }
    else {
        switch (formaPagamento) {
            case 'pix':
                valorFinal = valorTotal * 0.9
                resultado.innerHTML = ` Valor final é R$ ${valorFinal.toFixed(2)}`;
                break
            case 'debito':
                valorFinal = valorTotal * 0.95
                resultado.innerHTML = ` Valor final é R$ ${valorFinal.toFixed(2)}`;
                break
            case 'credito':
                resultado.innerHTML = ` Valor final é R$ ${valorTotal.toFixed(2)}`;
                break
            default:
                resultado.innerHTML = 'Informe uma forma de pagameto válida'
                break
    }
    }
}