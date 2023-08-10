<!DOCTYPE html>
<html>
<head>
    <title>Formulário Retangulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <br>
        <h3>Tamanho do Retângulo</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="number" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura:</label>
                <input type="number" class="form-control" id="modelo" name="modelo" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        include 'Retangulo.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $altura = $_POST["altura"];
            $largura = $_POST["largura"];
            
            
            $retangulo = new Retangulo($altura, $largura);
            

            echo "<br><h3>Dados Enviados</h3>";
            echo "<p><strong>Perímetro:</strong> " . $retangulo->calcular_perimetro() . "</p>";
            echo "<p><strong>Área:</strong> " . $retangulo->calcular_area() . "</p>";
        }
        ?>

</div>
</body>
</html>