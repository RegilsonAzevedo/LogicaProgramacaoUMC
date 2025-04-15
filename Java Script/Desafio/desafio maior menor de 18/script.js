function maiorIdade(){
    let idade = parseInt(document.querySelector('#idade').value)
    let resultado = document.getElementById('resultado')
    

    if (isNaN(idade)) {
        resultado.innerHTML = 'Por favor, insira um número!'
    }

    else{
    
        if (idade < 18){
        resultado.innerHTML = `Você é Menor de Idade`
        }

        else {
        resultado.innerHTML = `Você é Maior de Idade`  
        }
    }
}