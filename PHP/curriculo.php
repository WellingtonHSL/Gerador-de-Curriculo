<?php
    //TODO: Adicionar lógica para receber as os dados fornecidos no arquivo dados.php
    session_start();

    //DADOS PESSOAIS
    $full_name = $_SESSION['full_name'];
    $dt_birth = $_SESSION['dt_birth'];
    $age = $_SESSION['age'];
    $sexo = $_SESSION['sexo'];
    $address = $_SESSION['address'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];
    $phone_number = $_SESSION['phone_number'];
    $email = $_SESSION['email'];

    //OBJETIVOS
    $objective = $_SESSION['objective'] ?? '';

    //FORMAÇÃO ACADEMICA
    $course = $_SESSION['course'] ?? '';
    $institution = $_SESSION['institution'] ?? '';
    $ins_start_date = $_SESSION['ins_start_date'] ?? '';
    $ins_end_date = $_SESSION['ins_end_date'] ?? '';

    //EXPERIENCIA PROFISSIONAL
    $company_name = $_SESSION['company_name'] ?? '';
    $company_locality = $_SESSION['company_locality'] ?? '';
    $job_activities = $_SESSION['job_activities'] ?? '';
    $comp_start_date = $_SESSION['comp_start_date'] ?? '';
    $comp_end_date = $_SESSION['comp_end_date'] ?? '';

    //ATIVIDADES COMPLEMENTARES
    $activity_title = $_SESSION['activity_title'] ?? '';
    $atv_start_date = $_SESSION['atv_start_date'] ?? '';
    $atv_end_date = $_SESSION['atv_end_date'] ?? '';
    $skills = $_SESSION['skills'] ?? '';

    //IDIOMAS
    $languages = $_SESSION['languages'] ?? '';
    $fluency = $_SESSION['fluency'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/curriculo.css" media="screen" />
    <title>TalentTail</title>
</head>
<body>
    <!--TODO: Adicionar as informaçoes do curriculo-->
    <!--TODO: Adicionar botao para imprimir o curriculo ou editar-->
    <main>
    </main>
    
</body>
</html>