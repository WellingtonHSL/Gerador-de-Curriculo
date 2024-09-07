<?php
    session_start();

    // DADOS PESSOAIS
    $full_name = $_SESSION['full_name'] ?? '';
    $dt_birth = $_SESSION['dt_birth'] ?? '';
    $age = $_SESSION['age'] ?? '';
    $sexo = $_SESSION['sexo'] ?? '';
    $address = $_SESSION['address'] ?? '';
    $city = $_SESSION['city'] ?? '';
    $state = $_SESSION['state'] ?? '';
    $phone_number = $_SESSION['phone_number0'] ?? [];
    $email = $_SESSION['email'] ?? '';

    // OBJETIVOS
    $objective = $_SESSION['objective'] ?? '';

    // FORMAÇÃO ACADÊMICA
    $course = $_SESSION['course'] ?? [];
    $institution = $_SESSION['institution'] ?? [];
    $ins_start_date = $_SESSION['ins_start_date'] ?? [];
    $ins_end_date = $_SESSION['ins_end_date'] ?? [];

    // EXPERIÊNCIA PROFISSIONAL
    $company_name = $_SESSION['company_name'] ?? [];
    $company_locality = $_SESSION['company_locality'] ?? [];
    $job_activities = $_SESSION['job_activities'] ?? [];
    $comp_start_date = $_SESSION['comp_start_date'] ?? [];
    $comp_end_date = $_SESSION['comp_end_date'] ?? [];

    // ATIVIDADES COMPLEMENTARES
    $activity_title = $_SESSION['activity_title'] ?? [];
    $atv_start_date = $_SESSION['atv_start_date'] ?? [];
    $atv_end_date = $_SESSION['atv_end_date'] ?? [];
    $skills = $_SESSION['skills'] ?? [];

    // IDIOMAS
    $languages = $_SESSION['languages'] ?? [];
    $fluency = $_SESSION['fluency'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/curriculo.css" media="screen" />
    <title>TalentTail</title>
    <style>

        h1{
            color:#595B5A;
            font-family:Arial, Helvetica, sans-serif;
            font-size:50px;
            
        }
        h3{
            color: #5647ff;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            font-weight:bold;
            text-decoration: underline;
        }

        p{
            color: #000000;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: normal;
        }

        li{
            color: #000000;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: normal;
        }
        
        button{
            width:75px;
            height:25px;
            background-color:#ddffdd;
            border: 2px solid #006000;
            border-radius: 4px;
            transition:background-color 0.5s;
        }
        button:hover{
            background-color:#bbffbb;
            cursor:pointer;
        }

       .main_container{
        display:flex;
       }

        .container_left{
            margin-left: 40px;
            border-right-style: solid;
            width:40%;
        }
        
        .container_right{
            margin-left:50px;
            width:50%;
        }
        
        #print{
            font-size: 15px;
            color: #000000; 
            text-decoration: none;
            position:fixed;
            bottom:20px;
            right:30px;
            
        }
        
        #print:hover{
            color:#000000;
        }

    </style>
</head>
<body>
    <main>
        <div class="main_container">
            <div class="container_left">
                <section>
                    <h3>OBJETIVO</h3>
                    <p><?php echo htmlspecialchars($objective); ?></p>
                </section>    

                <section>
                    <h3>HABILIDADES</h3>
                    <?php 
                    if(is_array($skills)) {
                        foreach($skills as $skill) {
                            echo '<li>' . htmlspecialchars($skill) . '</li>';      
                        } 
                    } else {
                        echo '<li>' . htmlspecialchars($skills) . '</li>';
                    }
                    ?>
                </section>   

                <section>
                    <h3>IDIOMAS</h3>
                    <?php
                    if(is_array($languages)) {
                        foreach($languages as $key => $language) {
                            echo '<p>' . htmlspecialchars($language) . ' - ' . htmlspecialchars($fluency[$key]) . '</p>';
                        }
                    } else {
                        echo '<p>' . htmlspecialchars($languages) . ' - ' . htmlspecialchars($fluency[0]) . '</p>';
                    } 
                    ?>
                </section>  

                <section>
                    <h3>INFORMAÇÕES DE CONTATO</h3>
                    <p><?php echo htmlspecialchars($email); ?></p>
                    <p><?php echo htmlspecialchars($address); ?></p>
                    <p><?php echo htmlspecialchars($city); ?></p>
                    <p><?php echo htmlspecialchars($state); ?></p>
                    <?php
                    if(is_array($phone_number)) {
                        foreach($phone_number as $phone) {
                            echo '<p>' . htmlspecialchars($phone) . '</p>';       
                        }
                    } else {
                        echo '<p>' . htmlspecialchars($phone_number) . '</p>';
                    }
                    ?>
                    <p><?php echo htmlspecialchars($dt_birth); ?></p>
                    <p><?php echo htmlspecialchars($sexo); ?></p>
                    <p><?php echo htmlspecialchars($age) . " Anos"; ?></p>
                </section>    
            </div>
            <div class="container_right">
                <h1><?php echo htmlspecialchars($full_name); ?></h1>
                <section>
                    <h3>EXPERIÊNCIA PROFISSIONAL</h3>
                    <?php
                    if(is_array($company_name)) {
                        foreach($company_name as $key => $name_company) {
                            echo '<div class="item">';
                            echo '<p>' . htmlspecialchars($name_company) . '</p>';
                            echo '<p>' . htmlspecialchars($company_locality[$key]) . '</p>';
                            echo '<p>' . htmlspecialchars($comp_start_date[$key]) . '</p>';
                            echo '<p>' . htmlspecialchars($comp_end_date[$key]) . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="item">';
                        echo '<p>' . htmlspecialchars($company_name) . '</p>';
                        echo '<p>' . htmlspecialchars($company_locality) . '</p>';
                        echo '<p>' . htmlspecialchars($comp_start_date) . '</p>';
                        echo '<p>' . htmlspecialchars($comp_end_date) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </section> 

                <section>
                    <h3>FORMAÇÃO ACADÊMICA</h3>
                    <?php
                    if(is_array($course)) {
                        foreach($course as $key => $course_name) {
                            echo '<div class="item">';
                            echo '<p>' . htmlspecialchars($course_name) . '</p>';
                            echo '<p>' . htmlspecialchars($institution[$key]) . '</p>';
                            echo '<p>' . htmlspecialchars($ins_start_date[$key]) . '</p>';
                            echo '<p>' . htmlspecialchars($ins_end_date[$key]) . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="item">';
                        echo '<p>' . htmlspecialchars($course) . '</p>';
                        echo '<p>' . htmlspecialchars($institution) . '</p>';
                        echo '<p>' . htmlspecialchars($ins_start_date) . '</p>';
                        echo '<p>' . htmlspecialchars($ins_end_date) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </section>    

                <section>
                    <h3>ATIVIDADES COMPLEMENTARES</h3>
                    <?php
                    if(is_array($activity_title)) {
                        foreach($activity_title as $key => $title_activity) {
                            echo '<div class="item">';
                            echo '<p>' . htmlspecialchars($title_activity) . '</p>';
                            echo '<p>' . htmlspecialchars($atv_start_date[$key]) . '</p>';
                            echo '<p>' . htmlspecialchars($atv_end_date[$key]) . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="item">';
                        echo '<p>' . htmlspecialchars($activity_title) . '</p>';
                        echo '<p>' . htmlspecialchars($atv_start_date) . '</p>';
                        echo '<p>' . htmlspecialchars($atv_end_date) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </section>    
            </div>
        </div>
        <button id="print" onclick="window.print()">Salvar</button>
    </main>
</body>
</html>