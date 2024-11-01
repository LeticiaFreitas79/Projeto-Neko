<!--Objetivo do Código: Mostrar todos as consultas, exames e especialidade da Clínica Neko-->
<!--Status do Código: Em desenvolvimento-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">

    <title>Veterinário | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("publico_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/banner_vet.png" alt="Bootstrap" width="100%" height="100%">
    </a>

    <!--Bloco Pronto Socorro 24H-->
    <div class="bloco-vet">
      <h1 class="titulo-claro">PRONTO SOCORRO 24H</h1>
        <p class="text-claro">
        A Clínica Veterinária Neko oferece um pronto socorro 24 horas, garantindo que seu pet receba atendimento
        imediato em situações de emergência. Nossa equipe especializada está sempre pronta para agir, proporcionando
        cuidados essenciais em momentos críticos. A segurança e a saúde dos animais são nossa prioridade, e estamos
        aqui para tranquilizá-lo, oferecendo suporte em qualquer hora do dia ou da noite.
        </p>
    </div><!--Fecha o bloco Pronto Socorro 24H-->

    <!--Bloco Consultas-->
    <div class="bloco-vet">
      <h1 class="titulo-claro">CONSULTAS</h1>
        <p class="text-claro">
        Na Neko, realizamos consultas gerais e especializadas, atendendo às necessidades específicas de cada animal.
        Nossa equipe de veterinários experientes está capacitada para diagnosticar e tratar uma variedade de condições,
        assegurando que seu pet receba o melhor cuidado. As consultas são realizadas em um ambiente acolhedor, onde
        priorizamos o bem-estar do animal e a tranquilidade do tutor.
        </p>
    </div><!--Fecha o bloco Consultas-->

    <!--Bloco Exames-->
    <div class="bloco-vet">
      <h1 class="titulo-claro">EXAMES</h1>
        <p class="text-claro">
        Para um diagnóstico preciso e eficaz, a Clínica Veterinária Neko conta com uma variedade de exames laboratoriais
        e de imagem. Nossos profissionais utilizam tecnologia avançada para avaliar a saúde do seu pet, identificando
        possíveis problemas antes que se tornem graves. Realizamos exames de sangue, urina, fezes e ultrassonografias,
        proporcionando uma visão completa da saúde do seu amigo.
        </p>
    </div><!--Fecha o bloco Exames-->

    <!--Bloco Cirurgias-->
    <div class="bloco-vet">
      <h1 class="titulo-claro">CIRURGIAS</h1>
        <p class="text-claro">
        Oferecemos serviços cirúrgicos seguros e profissionais, desde procedimentos de rotina até cirurgias mais complexas.
        Nossa equipe é composta por veterinários especializados, que utilizam técnicas modernas e equipamentos de última
        geração para garantir a segurança e o conforto do seu pet durante todo o processo. Na Neko, priorizamos a recuperação
        rápida e eficaz de nossos pacientes.
        </p>
    </div><!--Fecha o bloco Cirurgias-->
      <p class="text-claro">

      </p>
    <!--Bloco Vacinação-->
    <div class="bloco-vet">
      <h1 class="titulo-claro">VACINAÇÃO</h1>
        <p class="text-claro">
        A vacinação é fundamental para proteger a saúde do seu animal. Na Clínica Veterinária Neko, realizamos um calendário
        de vacinas completo e personalizado, garantindo que seu pet esteja sempre imunizado contra doenças comuns. Nossa equipe
        orienta os tutores sobre a importância das vacinas e mantém um registro atualizado, promovendo a saúde e o bem-estar a longo prazo.
        </p>
    </div><!--Fecha o bloco Vacinação-->

    <!--Bloco Microchip-->
    <div class="bloco-vet">
      <h1 class="titulo-claro">MICROCHIP</h1>
        <p class="text-claro">
        O microchip é uma solução eficaz para garantir a segurança do seu animal de estimação. Na Neko, oferecemos o serviço de
        microchipagem, que permite a identificação rápida e precisa do seu pet em caso de perda. O procedimento é simples e seguro,
        proporcionando tranquilidade aos tutores, sabendo que seu amigo sempre poderá ser encontrado.
        </p>
    </div><!--Fecha o bloco Microchip-->

  <!--Separar Destaques-->
  <div class="bloco-separar"></div>

    <?php
        include_once ("publico_rodape.php");
    ?>
    
    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>