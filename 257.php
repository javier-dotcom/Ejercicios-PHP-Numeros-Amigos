<!DOCTYPE html>
<html>

<head>
    <title>EJERCICIO 257</title>
    <style type="text/css">
    body {
        background-color: #000;
        color: #fff;
        text-align: center;
        font-size: bold;
        width: 80%;
        margin: auto;
    }

    p {
        border: 4px rgba(20, 159, 159) groove;
        padding: 3px
    }

    .input,
    p {
        text-align: center;

        color: #000;
        background-color: rgba(20, 159, 159);
        border: 5px groove rgba(159, 20, 20);
        text-decoration: none;
        opacity: 0.7;
    }

    .input:hover {
        opacity: 1.0;
        cursor: pointer;
    }

    p:hover {

        opacity: 1.0;
        cursor: pointer;
    }

    .form {

        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>


    <h1>Programacion PHP</h1>
    <h3>Numeros amigos</h3>
    <p>Escribir una función que decida si dos números enteros positivos son amigos. Dos números
        son amigos si la suma de sus divisores propios (distintos de ellos mismos) son iguales. </p>
    <h3>Ejemplos de Numero Amigos</h3>


    <h4>220 y 284</h4>
    <h4>1184 y 1210</h4>
    <h4>2620 y 2924</h4>

    <form action="257.php" method="get">
        <div class="form">
            <div>
                <label>INGRESAR 1° NUMERO</label><br>
                <input class="input" type="number" name="a" required>
            </div>

            <div>
                <label>INGRESAR 2° NUMERO</label><br>
                <input class="input" type="number" name="b" required>
            </div>

        </div>
        <input class="input" type="submit" value="COMPROBAR" name="comprobar">
    </form>
    <?php
// isset para que no tire error antes de activar submit
if(isset($_GET['comprobar'])){
$a=$_GET['a'];
$b=$_GET['b'];
// funcion
function friend($a,$b){
$array1=array();
$array2=array();
for($x=1;$x<=$a-1;$x++){
if( $a % $x==0){
array_push($array1,$x);
}
}
for($y=1;$y<=$b-1;$y++){
if( $b % $y==0){
array_push($array2,$y);
}
}
return array_sum($array1)==$b && array_sum($array2)==$a ?  true :false;	
}
//fin  funcion
// llamada a funcion
if(friend($a,$b)){
echo "<h2>SON  AMIGOS</h2>";
}else{
echo "<h2>NO SON NUMEROSAMIGOS </h2>";
}
}
?>
</body>

</html>