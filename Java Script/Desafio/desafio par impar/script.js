function par_impar(){
    let numero = parseInt(document.querySelector('#numero').value)
    let resultado = document.getElementById('resultado')
    resultado.innerHTML = 'Acertou'

    if (isNaN(numero)) {
        resultado.innerHTML = 'Por favor, insira um número!'
    }

    else{
    
        if (numero %2=== 0){
        resultado.innerHTML = `Número Par`
        }

        else {
        resultado.innerHTML = `Número Impar`  
        }
    }
}