
function calcularPagamento() {
    



    // switch Case - Menu
    // if


    // Metodos de pagamento
    // Pix - 10% desconto
    // Débito - 5% desconto
    // Crétido - sem desconto

    let formaPagamento = 'debito'
    let valorTotal = 100
    let valorFinal
    switch (formaPagamento) {
        case 'pix':
            valorFinal = valorTotal * 0.9
            console.log(valorFinal);
            break
        case 'debito':
            valorFinal = valorTotal * 0.95
            console.log(valorFinal);
            break
        case 'credito':
            console.log(valorFinal)
            break
        default:
            console.log('Informe uma forma de pagamento válida!')
            break

    }
}