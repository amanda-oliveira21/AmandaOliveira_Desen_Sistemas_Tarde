//EXECUTAR MASCARAS

function mascara(o, f) { //DEFINE O OBJETO E CHAMA FUNCAO
    objeto=o
    funcao=f
    setTimeout("executaMascara()",1)
}

    function executaMascara() {
    objeto.value=funcao(objeto.value)
}



//Remove tudo que não for letras
function somente_letras(valor){
    return valor.replace(/[^a-zA-Z]/g,"");

}


//Mascara do Telefone

    function telefone(variavel) {
    variavel=variavel.replace (/\D/g,"") //Remove tudo que não é digito

    // A LINHA ABAIXO É RESPONSAVEL DE ADICIONAR PARENTESES EM VOLTA DOS DOIS PRIMEIROS DIGITOS
    variavel=variavel.replace (/^(\d\d)(\d)/g,"($1) $2")
    
    //A LINHA ABAIXO É RESPONSAVEL DE ADICIONAR O HIFEM ENTRE O QUARTO E O QUINTO DIGITO
    variavel=variavel.replace (/(\d{4})(\d)/,"$1-$2") //Coloca a segunda barra
    return variavel
}

//Mascara do RG
    function RG(variavel){
    variavel=variavel.replace (/\D/g,"") //Remove tudo o que não é número

    //Coloca um ponto após o terceiro dígito e o quarto
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")

    //Coloca um ponto após o sexto digito e o sétimo digito
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")


    //Coloca um HIFEM após o sétimo digito e permite apenas 2 digitos após o HIFEM
    variavel=variavel.replace (/(\d{3})(\d{1,2})$/,"$1-$2")
    return variavel
}
//Mascara do cpf
function CPF(variavel){
    variavel=variavel.replace (/\D/g,"") //Remove tudo o que não é número

    //Coloca um ponto após o terceiro dígito e o quarto
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")

    //Coloca um ponto após o sexto digito e o sétimo digito
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")


    //Coloca um HIFEM após o sétimo digito e permite apenas 2 digitos após o HIFEM
    variavel=variavel.replace (/(\d{3})(\d{1,2})$/,"$1-$2")
    return variavel
}

//Mascara do CEP
function CEP(variavel) {
    variavel = variavel.replace(/\D/g, ""); // Remove tudo que não for número

    // Coloca o hífen depois do quinto dígito
    variavel = variavel.replace(/(\d{5})(\d)/, "$1-$2");

    // Garante que só tenha 3 dígitos depois do hífen
    variavel = variavel.replace(/(-\d{3})\d+?$/, "$1");

    return variavel;
}
