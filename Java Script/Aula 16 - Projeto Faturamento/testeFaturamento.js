let produto =  document.querySelectorAll('.produto')
console.log(produto);

for (let i = 0; i < produto.length; i++) {

    //Seleciona os TD que estão no TR produto
    let valorUniProduto = produto[i].querySelector('.info-valor-unidade').textContent;
    let quantidadeProduto = produto[i].querySelector('.info-quantidade').textContent;
    let valotTotalProduto = produto[i].querySelector('.info-valor-total');
    
    console.log(valorUniProduto);
    console.log(quantidadeProduto);
    console.log(valotTotalProduto);
    
    // Excluir o R$
    let valorUniProdutoLimpo = valorUniProduto.replace(/R\$\ /,'')
    console.log(valorUniProdutoLimpo)
    valotTotalProduto.innerHTML = 'R$' + (parseFloat(valorUniProdutoLimpo) * parseInt(quantidadeProduto)).toFixed(2);
    
}