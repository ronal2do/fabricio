<form class="form-horizontal" role="form" action="/criaragenda" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="titulo">Título:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do evento">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Data:</label>
   	<div class="col-sm-10">	
  		<div class="input-group date">
  		  <input id="data" type="text" class="form-control" name="data"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  		</div>
  	</div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="hora">Hora:</label>
    <div class="col-sm-10"> 
        <input id="hora" type="text" class="form-control" name="hora" placeholder="ex.: 08:00, 13:00 ou 14:30">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="detalhes">Detalhes:</label>
    <div class="col-sm-10"> 
      <textarea type="text" class="form-control" id="detalhes" name="detalhes" placeholder="Detalhes" ></textarea>
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
!function(a){a.fn.datepicker.dates["pt-BR"]={days:["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado"],daysShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],daysMin:["Do","Se","Te","Qu","Qu","Se","Sa"],months:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],monthsShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],today:"Hoje",monthsTitle:"Meses",clear:"Limpar",format:"dd/mm/yyyy"}}(jQuery);
</script>
<script>
$('#data').datepicker({
	  format: "yyyy-mm-dd",
    language: "pt-BR",
    todayHighlight: true
});
</script>
@endsection