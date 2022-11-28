function verificar()
{
    var cpf, tel, email;

    cpf = document.getElementById('cpf').value;
    if (cpf.length !=11){
        alert("Está faltando digitos no CPF");
        document.formCadastro.txtCPF.focus();
        return false;
        
    }

    tel = document.getElementById('tel').value;
    if (tel.length ==9){
        isNaN(tel)
        alert('preencha corretamente o número') 
    }
    email = document.getElementById('email').value;
    if ( email.indexOf("@") <0){
        alert("Digite um e-mail válido")

    }
    return true;
}
function verificarLogin()
{
    var email, cpf;

    email = document.getElementById("login").value;
    cpf = document.getElementById("login").value;
    login = email + cpf;

    if (isNaN(login)){
        login.indexOf("@") <0;
        alert("Digite um login válido")
    }else if(login.length !=11){
        alert("Digite um login válido")
    }


    return true;
}
function numero(){
    alert("o numero dá loja é 7070, se não der 70 de novo")
}