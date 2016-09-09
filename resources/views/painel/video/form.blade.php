<form class="form-horizontal" role="form" action="/criarvideo" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="titulo">Título:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do evento">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="url">ID:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="url" name="url" placeholder="5VxkMRLQM3Q ">
    </div>
    <div class="col-sm-12">
    <br>
      <p>Coloque o que vem depois do <strong>youtube.com/watch?v=</strong></p>
    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>
