<div class="row">
	<div class=visible-md visible-sm visible-xs">
		<p>Chegou a vez da sua 
		participacão, preencha 
		os campos abaixo e mande 
		sua ideia, vamos juntos fazer
		a Balneário que queremos.</p>	
		

	</div>
</div>
	<p style="font-size:10px; color: red">Preenchimento necessário *</p>
	<div class="row">
		<div class="lead">
			{!! Form::open(array('url' => 'ideia', 'name' => 'myForm')) !!}
				<div class="form-group">
	            	<input  type="text" 
            				name="nome" 
			            	placeholder="Nome: *" 
			            	data-ng-model="nome" 
			            	class="form-control" 
			            	required pristine>
	          	</div>
	          	<p style="font-size:10px; color: red" 
	          		data-ng-show="myForm.nome.$invalid && myForm.nome.$dirty">
	          		Nome necessário *</p>
				<div class="form-group">
	            	<input  type="email" 
            				name="email" 
			            	placeholder="Email: *" 
			            	data-ng-model="email" 
			            	class="form-control" 
			            	required pristine>
	          	</div>
	          	<p style="font-size:10px; color: red" 
	          		data-ng-show="myForm.email.$invalid && myForm.email.$dirty">
	          		Email necessário *</p>
	          	<div class="form-group">
	            	<input  type="telefone" 
            				name="telefone" 
			            	placeholder="Telefone: *" 
			            	data-ng-model="telefone" 
			            	mask="(99) 9?9999-9999"
			            	class="form-control" 
			            	required pristine>
	          	</div>
	          	<p style="font-size:10px; color: red" 
	          		data-ng-show="myForm.telefone.$invalid && myForm.telefone.$dirty">
	          		Telefone necessário *</p>
	          	<div class="form-group">
	            	<input  type="endereco" 
            				name="endereco" 
			            	placeholder="Endereço: *" 
			            	data-ng-model="endereco" 
			            	class="form-control" 
			            	required pristine>
	          	</div>
	          	<p style="font-size:10px; color: red" 
	          		data-ng-show="myForm.endereco.$invalid && myForm.endereco.$dirty">
	          		Endereço necessário *</p>
				<div class="form-group">
	            	<textarea  	type="text" 
	            				name="ideia" 
	            				value="" 
				            	placeholder="Ideia:" 
				            	data-ng-model="ideia" 
				            	class="form-control" rows="3"></textarea> 
	          	</div>
				<input class="btn btn-block Button" 
					type="submit" 
					value="Enviar" 
					data-ng-disabled="myForm.nome.$invalid || myForm.email.$invalid || myForm.telefone.$invalid || myForm.endereco.$invalid" >
			{!! Form::close() !!}
		</div>
	</div>	