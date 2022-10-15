<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <!-- CSS only -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style/newregister.css">
    <link rel="stylesheet" href="style/styleNavBar.css">
    
    <title>Registar novo tratamento</title>

    <?php

        if(isset($_SESSION['msg'])){

            echo $_SESSION['msg'];
            
            unset($_SESSION['msg']);

        }

    ?>

</head>
<body>

    <div class="theNav">

        <ul class="nav nav-pills nav-fill" id="navigator">

            <li class="nav-item">

                <div class="nav-link" id="logo">Logo</div>

            </li>

            <li class="nav-item">
            <a class="nav-link" id="nav-link-active" aria-current="page" href="searchCPF.htm">Início</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="registerTreatment.php">Tratamentos</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="search.htm">Pacientes</a>
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="#">Solicitações</a>
            </li>

            <button type="button" class="btn btn-outline-primary" id="smallButtonSearchCPF"> 
            
                <strong>Buscar CPF</strong> 
            
            </button>

            <li class="nav-item-end">

                <a href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" id="iconUser" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                    </svg>

                </a>
                
            
            </li>
    
        </ul>  

    </div>

    
    <form method="POST" action="banco/processa.php">
        
        <div class="mainBg" id="mainBg">

            <div class="main" id="main">

                <div id="tituloCentral">

                    <div class="col-auto" id="titleCPF">
                        <h1>
                            <strong>Registar um novo tratamento</strong> 
                        </h1>
                    </div>

                </div>
                
                <div id="divBusca">

                    <div class="row g-3" id="cpfDiv">                     <!--DIV PRINCIPAL-->

                        <!--Primeira linha da div-->

                        <div id="nameInput" class="col-auto">
                            <h3>Nome do tratamento</h3>
                            <input type="text" id="treatmentName"  class="form-control" placeholder="Digite o nome do tratamento">
                        </div>

                        <!--Primeira linha da div-->

                        <div class="row g-3">
                            <div class="col">
                                <h3>CPF paciente</h3>
                            <input type="text" id="identificationNumber" class="form-control" placeholder="CPF do paciente" aria-label="First name">
                            </div>
                            <div class="col">
                                <h3>Nome do paciente</h3>
                            <input type="text" id="patientName" class="form-control" placeholder="Nome do paciente" aria-label="Last name">
                            </div>
                        </div>

                        <!--Segunda linha da div-->
                        
                        <div class="container text-center" id="testt">
                            <div class="row">
                                <div class="col">

                                    <h3 id="h3">Data de início</h3>

                                    <div class="md-form md-outline input-with-post-icon datepicker" id="data">
                                        <input placeholder="Select date" type="date" id="treatmentStart" class="form-control">
                                    </div>

                                </div>

                            <div class="col">

                                <h3 id="h3">Previsão de término</h3>

                                <div class="md-form md-outline input-with-post-icon datepicker" id="data">
                                    <input placeholder="Select date" type="date" id="treatmentEnd" class="form-control">
                                </div>

                            </div>
                            <div class="col">

                                <h3 id="h3">Fases de tratamento</h3>

                                <div class="md-form md-outline input-with-post-icon datepicker" id="data">
                                    <input placeholder="" type="text" id="quantityPhasesTreatments" class="form-control">
                                </div>

                            </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <h3>Clinica responsável</h3>
                            <input type="text" id="clinicResponsible" class="form-control" placeholder="CPF do paciente" aria-label="First name">
                            </div>
                            <div class="col">
                                <h3>Médico responsável</h3>
                            <input type="text" id="professionalResponsible" class="form-control" placeholder="Nome do paciente" aria-label="Last name">
                            </div>
                        </div>

                        
                        <div class="input-group">
                            <input type="file" class="form-control" id="fileAnexed" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>

                        <!--Remedios-->

                        <div>
                            <h3>Remédios</h3>
                        </div>  

                        <div class="container" id="borderRemedios"> <!--div center-->

                            <div id="divRemedios">

                                <div class="form-group">

                                    <label>Nome remédio: </label>
                                    <input type="text" name="remedyName[]" id="remedyName" placeholder="Nome do remédio"/>

                                    <label>Gramagem remédio: </label>
                                    <input type="number" step="0.01" value="0.00" name="remedyMg[]" id="remedyMg" placeholder="00.00"/>

                                    <label>Quantidade: </label>
                                    <input type="text" name="remedyQuantity[]" id="remedyQuantity" placeholder="Quantidade na caixa"/>

                                    <button type="button" onclick="adicionarCampo()">+</button>

                                </div>

                            </div>

                           
                        </div> 
                        <!--Remedios-->

                        <!--Class botão-->

                        <div class="d-grid gap-2">
                            <div class="container">
                                <button class="btn btn-success" type="button" id="buttonGiant" style="color: rgb(255, 255, 255);">Cadastrar</button>
                            </div>
                        </div>

                        <script src="script/custom.js"></script>

                    </div>

                </div>

            </div>

        </div>

    </form>

    <script src="script/cadastrarTratamento/scriptTratamento.js"></script>



</body>
</html>