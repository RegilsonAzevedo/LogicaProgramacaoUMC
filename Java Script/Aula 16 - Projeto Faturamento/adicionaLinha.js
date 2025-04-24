function Adicionar(){
    let form = document.querySelector('#form-adiciona')
    
    let produtoNome = form.produto.value
    console.log(produto);
    let valor = form.valor.value
    console.log(valor);
    let quantidade = form.quantidade.value
    console.log(quantidade);

    if (!produto || !quantidade || !valor){
        window.alert('Por favor, Preencher todos os campos')
    }
    else {
        let produto = document.createElement('tr')
        let codigoTd = document.createElement('td')
        let nomeTd = document.createElement('td')
        let valorUnitTd = document.createElement('td')
        let quantidadeTd = document.createElement('td')
        let valorTotalTd = document.createElement('td')

        // Atribuir valor aos elementos
        codigoTd.textContent = document.querySelectorAll('tr').length
        nomeTd.textContent = 'Bolo de ' + produtoNome
        valorUnitTd.textContent = 'R$'+ valor
        quantidadeTd.textContent = quantidade
        valorTotalTd.innerHTML = 'R$'+ (parseInt(quantidade) * parseFloat(valor)).toFixed(2)

        // 
        produto.appendChild(codigoTd)
        produto.appendChild(nomeTd)
        produto.appendChild(quantidadeTd)
        produto.appendChild(valorUnitTd)
        produto.appendChild(valorTotalTd)

        let tabela = document.querySelector('#tabela-produtos')
        tabela.appendChild(produto)
    }

}