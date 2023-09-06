<?php
session_start();
$usuario = $_SESSION["id"];

$con = new mysqli("localhost", "root", "", "estagiosPIT");
$query = "SELECT * FROM cadastroEstagio;";
$query_run = mysqli_query($con, $query);
if (mysqli_num_rows($query_run) > 0) {
    $estagio = mysqli_fetch_array($query_run);
}
?>

<!DOCTYPE html>

<body>

<?php
foreach ($query_run as $estagio) {
?>
    <tr>
        <td>
            <div>
                nome: <?= $estagio['nome']; ?><br>
                localização: <?= $estagio['localizacao']; ?><br>
                contato: <?= $estagio['contato']; ?><br>
                bolsa: <?= $estagio['bolsa']; ?><br>
                cargaHoraria: <?= $estagio['cargaHoraria']; ?><br>
                conhecomento: <?= $estagio['conhecimento']; ?><br>
                informações adicionais: <?= $estagio['informaçõesExtras']; ?><br><br><br><br><br>
            </div>
        </td>
    </tr>
<?php
}
?>
<form action="#">
    <br>
    <br>
    <button>home</button>
</form>
</body>