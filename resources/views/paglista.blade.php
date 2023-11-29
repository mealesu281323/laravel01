<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-4">
     <a href="{{route('xInicio')}}" class ="btn btn-primary">Inicio</a>
     <a href="{{route('xGaleria')}}" class ="btn btn-primary">Galeria</a>
     <a href="{{route('xLista')}}" class ="btn btn-primary">Lista</a>
   </div>
   <h1>Pagina lista</h1>
   <h1>Lista</h1>
   <table class="table">
  <thead class="table-info">
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombres y Apillidos</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>C12021002</td>
      <td>Nicole Aurora Cama Sanca</td>
      <td>A --------- X</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>C12021003</td>
      <td>Reyna Maria Asunta Ollachica Huarza</td>
      <td>A --------- X</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>C12021004</td>
      <td>Diego Adolfo Coila Cutipa</td>
      <td>A --------- X</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>C12021004</td>
      <td>Lady Laura Quispe Apaza</td>
      <td>A --------- X</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="table-info">
  <div class="container bg-info text-white text-center">
      Pie de Pagina
  </div>
  </thead>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>