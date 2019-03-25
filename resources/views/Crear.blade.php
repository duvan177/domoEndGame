<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <a href="{{ url('/componentes')}}"  type="button" class="btn btn-secondary btn-lg">Atras</a>

    <form  action="/componentes" method="POST">
      {{ csrf_field() }}
      
      <div class="form-group">
          <label>Nombre Componente</label>
          <input type="text" class="form-control" name="nom">
        </div>
                  <div class="form-group">
                    <label>Tipo Componente</label>
                    <input type="text" class="form-control" name="TipoComp">
                  </div>
                  <div class="form-group">
                    <label>Estado</label>
                      <input type="text" class="form-control" name="Estado">
              
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>

