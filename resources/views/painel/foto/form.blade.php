<form class="form-horizontal" role="form" action="/photos" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Título:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Título da imagem">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="location">Local:</label>
    <div class="col-sm-10"> 
        <input type="text" class="form-control" name="location" placeholder="Local opcional">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Descrição:</label>
    <div class="col-sm-10"> 
      <textarea type="text" class="form-control" name="description" placeholder="Descrição que aparece na imagem" ></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Imagem:</label>
    <div class="col-sm-10"> 
     <input type="file" name="image" />
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>

</form>


@section('postscript')
<script charset="UTF-8">

</script>
@endsection