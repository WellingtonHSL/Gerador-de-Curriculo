<?php
    //TODO: Adicionar lógica para salvar os dados enviados

    //DADOS PESSOAIS
    $full_name = $_POST['full_name'];
    $dt_birth = $_POST['dt_birth'];
    $age = $_POST['age'];
    $sexo = $_POST['sexo'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];

    //OBJETIVO
    $objective = $_POST['objective'];

    //FORMAÇÃO ACADEMICA 
    $course = $_POST['course'];
    $institution = $_POST['institution'];
    $ins_start_date = $_POST['ins_start_date'];
    $ins_end_date = $_POST['ins_end_date'];

    //EXPERIENCIA PROFISSIONAL
    $company_name = $_POST['company_name'];
    $company_locality = $_POST['company_locality'];
    $job_activities = $_POST['job_activities'];
    $comp_start_date = $_POST['comp_start_date'];
    $comp_end_date = $_POST['$comp_end_date'];

?>