<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>cadastro de carros</title>
  </head>
  <body>

<main class="container"> 

    <h1>cadastrar carros</h1>

    <form action="crud/create.php" method="post" >
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">Nome</label>
          <input type="text" name="marca" class="form-control" id="exampleInputmarca" aria-describedby="marcaHelp">
         
        </div>

        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Marca</label>
            <input type="text" name="modelo" class="form-control" id="exampleInputmodelo" aaria-describedby="modeloHelp">
           
          </div>

        <div class="mb-3">
          <label for="exampleInputTexte1" class="form-label">Modelo</label>
          <input type="text"name="Ano" class="form-control" id="exampleInputAno">
        </div> 
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">Mac</label>
          <input type="text"name="Ano" class="form-control" id="exampleInputAno">
        </div>


        <br>
        <button type="submit" class="btn btn-primary">cadastrar</button>
      </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>