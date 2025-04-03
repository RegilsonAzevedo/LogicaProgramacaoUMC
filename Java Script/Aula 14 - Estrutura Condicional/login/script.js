function verificarLogin() {
    let usuario = document.querySelector('#usuario').value
    let senha = document.querySelector('#senha').value
    let mensagem = document.querySelector('#mensagem')

    if (usuario === "regilson" && senha === "123456789") {
        mensagem.innerHTML = `Login Válido, bem vindo Regilson!!`   
         }
         else {
             mensagem.innerHTML = `Login ou senha Incorretos!`   
              }
}
