<?php
//Arquivo de conexão
include "connect.php";
//Query para pegar os dados do banco
$query = mysqli_query($connect, "select * from herois");
?>
<div class="dados-container">
    <h2>Heróis</h2>
<?php
//Percorre a query e coloca os dados no array $show
while($show = mysqli_fetch_array($query)){
?>
        <div class="dados">
        <div class="item">
        <!--Dados do heroi-->
        <p><span><?php echo $show[1];?></span> é do universo <span><?php echo $show[2];?></span>
        <!--Botão para atualizar-->
        <a href="crud/update-page.php?id=<?php echo $show[0];?>">Atualizar</a>
        <!--Botão para excluir-->
        <a href="crud/delete.php?id=<?php echo $show[0];?>">Excluir</a>
        </p>
        <!--Imagem do heroi em .jpg-->
        <p class="imagem"><img src="arquivos/<?php echo $show[3] ?>"></p>
        </div>
    </div>
<?php
}
?>
</div>

