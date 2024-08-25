//TODO: Implementar lógica para duplicar o bloco
//TODO: Implementar lógica para excluir um bloco duplicado

const form_section  = document.getElementById('form_section')
const campos = document.querySelectorAll('.required')
const spans  = document.querySelectorAll('.span_required')
const phone_mask = document.querySelector(  '#phone_number')

function setError(dados_curriculo){
    campos[dados_curriculo].style.border = '2px solid red';
    spans[dados_curriculo].style.display = 'block';
    phone_mask.display = 'block';
    phone_mask.style.border =  '2px solid color: red';
 }

function removeError(dados_curriculo){
    campos[dados_curriculo].style.border = '2px solid';
    spans[dados_curriculo].style.display = 'none';
    spans[dados_curriculo].style.border = 'none';
    phone_mask.display = 'none';
    phone_mask.style.border =  '2px solid';
   
}

function nameValidate(){
    if(campos[0].value.length <= 2){
        setError(0);
    }
    else{
        removeError(0);
    }
}

function dt_birthValidate(){
    if(campos[1].value.length <= 2){
        setError(1);
    }
    else{
        removeError(1);
    }
}
function ageValidate(){
    if(campos[2].value.length <= 1){
        setError(2);
    }
    else{
        removeError(2);
    }
}
function addressValidate(){
    if(campos[4].value.length <= 2){
        setError(4);
    }
    else{
        removeError(4);
    }
}
function cityValidate(){
    if(campos[5].value.length <= 2){
        setError(5);
    }
    else{
        removeError(5);
    }
}
function stateValidate(){
    if(campos[6].value.length <= 3){
        setError(6);
    }
    else{
        removeError(6);
    }
}

function phone_numberValidate(){
    if(campos[7].value.length <= 13){
        setError(7);
    }
    else{
        removeError(7);
    }
}
function emailValidate(){
    if(campos[8].value.length <= 10){
        setError(8);
    }
    else{
        removeError(8);
        console.log("EMAIL");
    }
}

phone_mask.addEventListener('keypress', () =>{
    let phone_masklength = phone_mask.value.length

    if(phone_masklength === 0 ){
        phone_mask.value += '(';
    } else if(phone_masklength === 3){
        phone_mask.value += ')';
    }else if(phone_masklength === 9){
        phone_mask.value += '-';
    }
})


