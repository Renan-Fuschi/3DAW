<?php
$v1 = $_GET["a"];
$v2 = $_GET["b"];
$oper = $_GET["operadores"];
$result = 0;

switch ($oper) {
    case "adicao":
        $result = $v1 + $v2;
        break;
    case "subtracao":
        $result = $v1 - $v2;
        break;
    case "divisao":
        $result = $v1 / $v2;
        break;
    case "multiplicacao":
        $result = $v1 * $v2;
        break;
    case "raiz":
        $result = $v1 == NULL ? sqrt($v2) : sqrt($v1);
        break;
    case "troca":
        $result = $v1 == NULL ? $v2 * -1 : $v1 * -1;
        break;
    case "1porX":
        $result = $v1 == NULL ? 1 / $v2 : 1 / $v1;
        break;
    case "seno":
        $result = $v1 == NULL ? sin($v2) : sin($v1);
        break;
    case "cosseno":
        $result = $v1 == NULL ? cos($v2) : cos($v1);
        break;
    case "tangente":
        $result = $v1 == NULL ? tan($v2) : tan($v1);
        break;
    default:
        $result = "Operador inválido";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Operação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: auto;
        }

        h1 {
            color: #4CAF50;
        }

        h2 {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php echo "<h1>Resultado: $result </h1>"; ?>
        <?php echo "<h2>Operador: $oper </h2>"; ?>
    </div>
</body>

</html>
