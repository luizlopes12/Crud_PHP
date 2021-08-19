<?php
include "./header-pages.php";
include "connect.php";
?>

    <!--Manda os dados dos inputs para o create.php que manda pro banco-->
    <form action="create.php" method="post" id="cadastro-form">
    <p>
    <label class="create-lbl">Nome do Herói:</label>
    <input type="text" name="nome" class="create-in">
    </p>   
    <p>
    <label class="create-lbl">Nome do Universo:</label>
    <input type="text" name="universo" class="create-in">
    </p>
    <p class="btn">
    <button type="submit" class="create-btn" id="cadastro-btn">Cadastrar</button>
    </p>
    </form>


<?php
include "../src/php/footer.php";
?>