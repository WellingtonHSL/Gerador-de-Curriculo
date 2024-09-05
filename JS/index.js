//TODO: Implementar lógica para duplicar o bloco
//TODO: Implementar lógica para excluir um bloco duplicado
let phone_count = 0;
let academy_count = 0;
let experience_count = 0;
let activity_count = 0;
let languages_count = 0;

//DUPLICAR TELEFONE
function dup_tel() {
    phone_count++;
    const container_phone = document.getElementById('dup_phone_number');
    const new_phone = document.createElement('div');

    new_phone.className = 'section_phone';
    new_phone.id = `phone_container_${phone_count}`;
    new_phone.innerHTML = `
        <input type="tel" id="phone_number_${phone_count}" name="phone_number[]" placeholder="Número de Telefone" class="required" oninput="phone_numberValidate()"><br> <br>
        <span class="span_required">Telefone é obrigatório!</span> <br>
        <button type="button" id="remove" onclick="remove_tel(${phone_count})">Remover</button> <br> <br>
    `;
    container_phone.appendChild(new_phone);
}

//REMOVER TELEFONE
function remove_tel(count) {
    const container_phone = document.getElementById('dup_phone_number');
    const phone_to_remove = document.getElementById(`phone_container_${count}`);
    
    if (phone_to_remove) {
        container_phone.removeChild(phone_to_remove);
    }
}
// DUPLICAR FORMAÇÃO ACADÊMICA 
function dup_academy() {
    academy_count++;
    const container_academy = document.getElementById('academy');
    const new_academy = document.createElement('div');

    new_academy.id = `academy_container${academy_count}`;
    new_academy.className = 'section_academy';
    new_academy.innerHTML = `
        <input type="text" id="course_${academy_count}" name="course[]" placeholder="Curso"><br><br>
        <input type="text" id="institution_${academy_count}" name="institution[]" placeholder="Instituição"><br><br>
        <div class="dates">
            <label for="ins_start_date_${academy_count}">Data de Início</label>
            <input type="date" id="ins_start_date_${academy_count}" name="ins_start_date[]"><br><br>
            <label for="ins_end_date_${academy_count}">Data de Conclusão</label>
            <input type="date" id="ins_end_date_${academy_count}" name="ins_end_date[]"><br><br>
        </div>
        <button type="button" id="remove" onclick="remove_academy(${academy_count})">Remover</button><br><br>
    `;
    container_academy.appendChild(new_academy);
}

// REMOVER FORMAÇÃO ACADÊMICA
function remove_academy(count) {
    const container_academy = document.getElementById('academy');
    const academy_to_remove = document.getElementById(`academy_container${count}`);

    if (academy_to_remove) {
        container_academy.removeChild(academy_to_remove);
    }
}

// DUPLICAR EXPERIÊNCIA PROFISSIONAL
function dup_experience() {
    experience_count++;
    const container_experience = document.getElementById('experience');
    const new_experience = document.createElement('div');

    new_experience.id = `experience_container${experience_count}`;
    new_experience.className = 'section_experience';
    new_experience.innerHTML = `
        <input type="text" id="company_name_${experience_count}" name="company_name[]" placeholder="Nome da Empresa"><br><br>
        <input type="text" id="company_locality_${experience_count}" name="company_locality[]" placeholder="Localidade"><br><br>
        <input type="text" id="job_activities_${experience_count}" name="job_activities[]" placeholder="Atividade desempenhada no cargo"><br><br>
        <div class="dates">
            <label for="comp_start_date_${experience_count}">Data de Entrada</label>
            <input type="date" id="comp_start_date_${experience_count}" name="comp_start_date[]"><br><br>
            <label for="comp_end_date_${experience_count}">Data de Saída</label>
            <input type="date" id="comp_end_date_${experience_count}" name="comp_end_date[]"><br><br>
        </div>
        <button type="button" id="remove" onclick="remove_experience(${experience_count})">Remover</button><br><br>
    `;
    container_experience.appendChild(new_experience);
}

// REMOVER EXPERIÊNCIA PROFISSIONAL
function remove_experience(count) {
    const container_experience = document.getElementById('experience');
    const experience_to_remove = document.getElementById(`experience_container${count}`);

    if (experience_to_remove) {
        container_experience.removeChild(experience_to_remove);
    }
}

// DUPLICAR ATIVIDADES COMPLEMENTARES
function dup_activity() {
    activity_count++;
    const container_activity = document.getElementById('activity');
    const new_activity = document.createElement('div');

    new_activity.id = `activity_container${activity_count}`;
    new_activity.className = 'section_activity';
    new_activity.innerHTML = `
        <input type="text" id="activity_title_${activity_count}" name="activity_title[]" placeholder="Título da Atividade"><br><br>
        <div class="dates">
            <label for="atv_start_date_${activity_count}">Data Início</label>
            <input type="date" id="atv_start_date_${activity_count}" name="atv_start_date[]"><br><br>
            <label for="atv_end_date_${activity_count}">Data Conclusão</label>
            <input type="date" id="atv_end_date_${activity_count}" name="atv_end_date[]"><br><br>
        </div>
        <input type="text" id="skills_${activity_count}" name="skills[]" placeholder="Habilidades Adquiridas"><br><br>
        <button type="button" id="remove" onclick="remove_activity(${activity_count})">Remover</button><br><br>
    `;
    container_activity.appendChild(new_activity);
}

// REMOVER ATIVIDADES COMPLEMENTARES
function remove_activity(count) {
    const container_activity = document.getElementById('activity');
    const activity_to_remove = document.getElementById(`activity_container${count}`);

    if (activity_to_remove) {
        container_activity.removeChild(activity_to_remove);
    }
}

// DUPLICAR IDIOMAS
function dup_languages() {
    languages_count++;
    const container_languages = document.getElementById('languages');
    const new_languages = document.createElement('div');

    new_languages.id = `languages_container${languages_count}`;
    new_languages.className = 'section_languages';
    new_languages.innerHTML = `
        <div id="languages">
            <div class="language_item">
                <input type="text" id="languages_${languages_count}" name="languages[]" placeholder="Idioma"><br><br>
                <select id="fluency_${languages_count}" name="fluency[]">
                    <option value="Básico">Nível Básico</option>
                    <option value="Básico a Intermediário">Nível Básico a Intermediário</option>
                    <option value="Intermediário">Nível Intermediário</option>
                    <option value="Avançado">Nível Avançado</option>
                    <option value="Fluente ou Nativo">Nível Fluente ou Nativo</option>
                </select><br><br>
            </div>
        </div>
        <button type="button" id="remove" onclick="remove_languages(${languages_count})">Remover</button><br><br>
    `;
    container_languages.appendChild(new_languages);
}

// REMOVER IDIOMAS
function remove_languages(count) {
    const container_languages = document.getElementById('languages');
    const languages_to_remove = document.getElementById(`languages_container${count}`);

    if (languages_to_remove) {
        container_languages.removeChild(languages_to_remove);
    }
}

//VALIDAÇÃO DOS DADOS PESSOAIS
const form_section  = document.getElementById('form_section')
const campos = document.querySelectorAll('.required')
const spans  = document.querySelectorAll('.span_required')
const phone_mask = document.querySelectorAll('.phone_number_0')

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

//VALIDAÇAO NOME
function nameValidate(){
    if(campos[0].value.length <= 2){
        setError(0);
    }
    else{
        removeError(0);
    }
}

//VALIDAÇAO DATA DE NASCIMENTO
function dt_birthValidate(){
    if(campos[1].value.length <= 2){
        setError(1);
    }
    else{
        removeError(1);
    }
}

//VALIDAÇAO DE IDADE
function sexValidate(){
    if(campos[2].value.length <= 1){
        setError(2);
    }
    else{
        removeError(2);
    }
}

//VALIDAÇAO DO ENDEREÇO
function addressValidate(){
    if(campos[3].value.length <= 2){
        setError(3);
    }
    else{
        removeError(3);
    }
}

//VALIDAÇAO DA CIDADE
function cityValidate(){
    if(campos[4].value.length <= 2){
        setError(4);
    }
    else{
        removeError(4);
    }
}

//VALIDAÇAO DO ESTADO
function stateValidate(){
    if(campos[5].value.length <= 3){
        setError(5);
    }
    else{
        removeError(6);
    }
}

//VALIDAÇAO DO NUMERO DE TELEFONE
function phone_numberValidate(){
    if(campos[7].value.length <= 13){
        setError(7);
    }
    else{
        removeError(7);
    }
}

//VALIDAÇAO DO EMAIL
function emailValidate(){
    if(campos[8].value.length <= 10){
        setError(8);
    }
    else{
        removeError(8);
        console.log("EMAIL");
    }
}

//MASCARA DO TELEFONE
//BUG: com a atualização das id para array e parou de funcionar
function phone_mask_(){
phone_mask.addEventListener('keypress', phone_mask_ =>{
    let phone_masklength = phone_mask.value.length
    console.log("ENTROUU");
    if(phone_masklength === 0 ){
        phone_mask.value += '(';
    } else if(phone_masklength === 3){
        phone_mask.value += ')';
    }else if(phone_masklength === 9){
        phone_mask.value += '-';
    }

})}

//CÁLCULO DE IDADE COM BASE NA DATA DE NASCIMENTO
function calculateAge() {
    const birth = document.getElementById('dt_birth').value;
    const birthDate = new Date(birth);
    const today = new Date();
    var age = today.getFullYear() - birthDate.getFullYear();
    const monthDifference = today.getMonth() - birthDate.getMonth();
    const dayDifference = today.getDate() - birthDate.getDate();
    
    if (monthDifference < 0 || (monthDifference === 0 && dayDifference < 0)) {
        age--;
    }
    
    document.getElementById('age').value = age;
}
