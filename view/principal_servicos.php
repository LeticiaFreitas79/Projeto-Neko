<!--Objetivo do Código: Mostrar os serviços oferecidos pela Clínica Neko-->
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

    <!--Bloco Hotel Pet-->
    <div class="bloco-servicos">
      <h1 class="titulo-claro">HOTEL PET</h1>
        <p class="text-claro">
          O Hotel Pet Neko é o lugar ideal para deixar seu animalzinho quando você precisa se ausentar. Com um ambiente seguro e acolhedor,
          oferecemos acomodações confortáveis e atividades recreativas para garantir que seu pet se divirta e fique feliz durante a estadia.
          Nossa equipe atenta e carinhosa está sempre disponível para atender às necessidades do seu amigo, proporcionando atenção e carinho
          para que ele se sinta em casa, mesmo longe de você.
        </p>
    </div><!--Fecha o bloco Hotel Pet-->

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