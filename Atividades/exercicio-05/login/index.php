<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Introdução ao PHP </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<H1>formulario</H1>
   <form action="/login/validar.php" method="post">
   <div class="form-group">
    <label for="user">Usuário</label>
        <input type="text" name="usuario" id="user">
        </div>   
        <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="senha" id="password">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço da pessoa">
        </div>

        <div>
            <label>Gênero:</label>

            <div class="form-group form-check">
                <input type="radio" name="genero" id="feminino" value="F" class="form-check-input">
                <label for="feminino" class="form-check-label">Feminino</label>
            </div>

            <div class="form-group form-check">
                <input type="radio" name="genero" id="masculino" value="M" class="form-check-input">
                <label for="masculino" class="form-check-label">Masculino</label>
            </div>

            <div class="form-group form-check">
                <input type="radio" name="genero" id="naobinario" value="NB" class="form-check-input">
                <label for="naobinario" class="form-check-label">Não binário</label>
            </div>

            <div class="form-group form-check">
                <input type="radio" name="genero" id="semresposta" value="SR" class="form-check-input">
                <label for="semresposta" class="form-check-label">Prefiro não informar</label>
            </div>
        </div>

        <div>

            <label>Áreas de interesse:</label>

            <div class="form-group form-check">
                <input type="checkbox" name="area[0]" id="web" class="form-check-input">
                <label for="web" class="form-check-label">Sistemas Web</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="area[1]" id="db" class="form-check-input">
                <label for="db" class="form-check-label">Banco de dados</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="area[2]" id="redes" class="form-check-input">
                <label for="redes" class="form-check-label">Redes</label>
            </div>

        </div>

        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">

    </form>    

</body>
</html>