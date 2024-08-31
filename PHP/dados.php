<?php
    //TODO: Adicionar lógica para salvar os dados enviados

    //DADOS PESSOAIS
    $full_name = $_POST['full_name'];
    $dt_birth = $_POST['dt_birth'];
    $age = $_POST['age'];
    $sexo = $_POST['sexo'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone_number = $_POST['phone_number'];
    if(is_array($phone_number)) {
        for($i = 0; $i < count($phone_number); $i++){
            $phone_number[$i] = htmlspecialchars($phone_number[$i]);
        }
    }
    $email = $_POST['email'];

    //OBJETIVO
    $objective = $_POST['objective'] ?? '';

    //FORMAÇÃO ACADEMICA 
    $course = $_POST['course'] ?? '';
    $institution = $_POST['institution'] ?? '';
    $ins_start_date = $_POST['ins_start_date'] ?? '';
    $ins_end_date = $_POST['ins_end_date'] ?? '';
    if(is_array($course)) {
        for($i = 0; $i < count($course); $i++) {
            $course[$i] = htmlspecialchars($course[$i]);
            $institution[$i] = htmlspecialchars($institution[$i]);
            $ins_start_date[$i] = htmlspecialchars($ins_start_date[$i]);
            $ins_end_date[$i] = htmlspecialchars($ins_end_date[$i]);
        }
    }

    //EXPERIENCIA PROFISSIONAL
    $company_name = $_POST['company_name'] ?? '';
    $company_locality = $_POST['company_locality'] ?? '';
    $job_activities = $_POST['job_activities'] ?? '';
    $comp_start_date = $_POST['comp_start_date'] ?? '';
    $comp_end_date = $_POST['comp_end_date'] ?? '';
    if(is_array($company_name)) {
        for($i = 0; $i < count($company_name); $i++) {
            $company_name[$i] = htmlspecialchars($company_name[$i]);
            $company_locality[$i] = htmlspecialchars($company_locality[$i]);
            $job_activities[$i] = htmlspecialchars($job_activities[$i]);
            $comp_start_date[$i] = htmlspecialchars($comp_start_date[$i]);
            $comp_end_date[$i] = htmlspecialchars($comp_end_date[$i]);
        }
    }

    //ATIVIDADES COMPLEMENTARES
    $activity_title = $_POST['activity_title'] ?? '';
    $atv_start_date = $_POST['atv_start_date'] ?? '';
    $atv_end_date = $_POST['atv_end_date'] ?? '';
    $skills = $_POST['skills'] ?? '';
    if(is_array($activity_title)) {
        for($i = 0; $i < count($activity_title); $i++) {
            $activity_title[$i] = htmlspecialchars($activity_title[$i]);
            $atv_start_date[$i] = htmlspecialchars($atv_start_date[$i]);
            $atv_end_date[$i] = htmlspecialchars($atv_end_date[$i]);
            $skills[$i] =htmlspecialchars($skills[$i]); 
        }
    }

    //IDIOMAS
    $languages = $_POST['languages'] ?? '';
    $fluency = $_POST['fluency'] ?? '';
    if(is_array($languages)) {
        for($i = 0; $i < count($languages); $i++) {
            $languages[$i] = htmlspecialchars($languages[$i]);
            $fluency[$i] = htmlspecialchars($fluency[$i]);
        }
    }

    session_start();

    //DADOS PESSOAIS
    $_SESSION['full_name'] = $full_name;
    $_SESSION['dt_birth'] = $dt_birth;
    $_SESSION['age'] = $age;
    $_SESSION['sexo'] = $sexo;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;
    $_SESSION['phone_number'] = $phone_number;
    $_SESSION['email'] = $email;

    //OBJETIVOS
    $_SESSION['objective'] = $objective;

    //FORMAÇÃO ACADEMICA
    $_SESSION['course'] = $course;
    $_SESSION['institution'] = $institution;
    $_SESSION['ins_start_date'] = $ins_start_date;
    $_SESSION['ins_end_date'] = $ins_end_date;

    //EXPERIENCIA PROFISSIONAL
    $_SESSION['company_name'] = $company_name;
    $_SESSION['company_locality'] = $company_locality;
    $_SESSION['job_activities'] = $job_activities;
    $_SESSION['comp_start_date'] = $comp_start_date;
    $_SESSION['comp_end_date'] = $comp_end_date;

    //ATIVIDADES COMPLEMENTARES
    $_SESSION['activity_title'] = $activity_title;
    $_SESSION['atv_start_date'] = $atv_start_date;
    $_SESSION['atv_end_date'] = $atv_end_date;
    $_SESSION['skills'] = $skills;

    //IDIOMAS
    $_SESSION['languages'] = $languages;
    $_SESSION['fluency'] = $fluency;

    header('Location: curriculo.php');
    exit;
?>
