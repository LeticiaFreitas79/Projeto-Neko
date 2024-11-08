<!--Objetivo do Código: Mostrar os serviços oferecidos pela Clínica Neko-->
<!--Status do Código: Concluído e Comentado-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Serviços | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("publico_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/banner_servicos.png" alt="Bootstrap" width="100%" height="100%">
    </a>

    <!--Bloco Adestramento-->
    <div class="bloco-servicos">
        <h1 class="titulo-claro">ADESTRAMENTO</h1>
          <p class="text-claro">
            Nosso serviço de adestramento oferece um ambiente positivo e acolhedor, onde cães e gatos aprendem habilidades
            essenciais e comandos básicos. Com profissionais experientes, utilizamos métodos baseados em reforço positivo,
            garantindo que seu pet desenvolva um comportamento equilibrado e feliz. O adestramento não só fortalece o vínculo
            entre você e seu animal, mas também contribui para uma convivência harmoniosa no dia a dia.
          </p>
    </div><!--Fecha o bloco Adestramento-->

    <!--Bloco Banho e Tosa-->
    <div class="bloco-servicos">
      <h1 class="titulo-claro">BANHO E TOSA</h1>
        <p class="text-claro">
          No serviço de banho e tosa da Clínica Veterinária Neko, seu pet é tratado com todo o carinho e cuidado que merece.
          Utilizamos produtos de alta qualidade e técnicas adequadas para cada tipo de pelagem, garantindo uma limpeza eficiente e
          segura. Além disso, nossos profissionais são capacitados para realizar tosas personalizadas, mantendo seu animal com um
          visual saudável e estiloso. Seu amigo peludo sairá da nossa clínica se sentindo renovado!
        </p>
    </div><!--Fecha o bloco Banho e Tosa-->

    <!--Bloco Vacinação-->
    <div class="bloco-servicos">
      <h1 class="titulo-claro">VACINAÇÃO</h1>
        <p class="text-claro">
        A vacinação é fundamental para proteger a saúde do seu animal. Na Clínica Veterinária Neko, realizamos um calendário
        de vacinas completo e personalizado, garantindo que seu pet esteja sempre imunizado contra doenças comuns. Nossa equipe
        orienta os tutores sobre a importância das vacinas e mantém um registro atualizado, promovendo a saúde e o bem-estar a longo prazo.
        </p>
    </div><!--Fecha o bloco Vacinação-->

    <!--Bloco Microchip-->
    <div class="bloco-servicos">
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