<?php
include "./header-pages.php";
include "connect.php";
$idGet = $_GET["id"];
$queryById = mysqli_query($connect,"select * from herois where id = $idGet");
while($show = mysqli_fetch_array($queryById)){
?>
<br>
<div class="form">
    <form action="./update.php" method="post">
    <p>
    <input type="hidden" name="id" value="<?php echo $show[0]; ?>">
    <label  class="create-lbl">Nome do Herói:</label>
    <input type="text" name="nome"  class="create-in" value="<?php echo $show[1]; ?>">
    </p>
    <p>
    <label class="create-lbl">Nome do Universo:</label>
    <input type="text" name="universo" class="create-in" value="<?php echo $show[2]; ?>">
    </p>
    <p class="btn">
    <button type="submit" class="create-btn">Atualizar</button>
    </p>
    </form>
</div>
<?php
}
include "../src/php/footer.php";
?>