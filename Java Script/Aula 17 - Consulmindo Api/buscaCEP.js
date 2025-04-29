// consumir a API do correio
// https://viacep.com.br/ws/08830600/json/

const cep = document.querySelector('#cep')

cep.addEventListener('change',(evento) =>{
    let cepUsuario = evento.target
    console.log(cepUsuario.value);
    buscaCep(cepUsuario.value);
})

async function buscaCep(cep){

 

    
    let erroCep = document.querySelector('#erro')
    erroCep.innerHTML = ''
    
    try{
        let consultaCep = await fetch(`https://viacep.com.br/ws/${cep}/json/`)
        
        console.log(consultaCep);
        
        
        let consultaCepJson = await consultaCep.json()
        console.log(consultaCep);
        console.log(consultaCepJson.erro);

        if(consultaCepJson.erro){
            throw Error('Cep Inexistente');
        }

        preencheCampos(consultaCepJson)

    }
    catch(erro){
        console.log('erro');
        apagaCampos();
        erroCep.innerHTML = '<p> Cep inválido, tente novamente !!!</p>'
    }
}

function preencheCampos (resultadoCep) {
    let rua = document.querySelector('#rua')
    let bairro = document.querySelector('#bairro')
    let cidade = document.querySelector('#cidade')
    let estado = document.querySelector('#estado')

    rua.value = resultadoCep.logradouro
    bairro.value = resultadoCep.bairro
    cidade.value = resultadoCep.localidade
    estado.value = resultadoCep.uf

}

function apagaCampos () {
    let rua = document.querySelector('#rua')
    let bairro = document.querySelector('#bairro')
    let cidade = document.querySelector('#cidade')
    let estado = document.querySelector('#estado')

    rua.value = ''
    bairro.value =''
    cidade.value = ''
    estado.value = ''
}