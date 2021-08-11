<?php
//Arquivo de conexão
include "connect.php";
//Query
$query = mysqli_query($connect, "select * from herois");
if(!$query){
    echo "<script>alert('Dados não encontrados')</script>";
}
?>
<div class="dados-container">
    <h2>Heróis</h2>
<?php
while($show = mysqli_fetch_array($query)){
?>
        <div class="dados">
        <div class="item">
        <p><span><?php echo $show[1];?></span> é do universo <span><?php echo $show[2];?></span>
        <a href="crud/update-page.php?id=<?php echo $show[0];?>">Atualizar</a>
        <a href="crud/delete.php?id=<?php echo $show[0];?>">Excluir</a>
        </p>
        <p class="imagem"><img src="./src/imgs/<?php echo $show[3]?>" alt="Imagem do heroi"></p>
        </div>
    </div>
<?php
}
?>
</div>

