
<div class="form-group">
	<label>Título</label>
	<input class="form-control" type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo :'' }}">
</div>
<div class="form-group">
	<label>Descrição</label>
	<input class="form-control" type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao :'' }}">
</div>
<div class="form-group">
	<label>Preço</label>
	<input class="form-control" type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor :'' }}">
</div>
<div class="form-group">
	<label for="img">Imagem</label>
	<input class="form-control" type="file" name="imagem">
</div>
@if(isset($registro->imagem))
<div class="form-group">
	<img width="150" src="{{asset($registro->imagem)}}">
</div>
@endif
<div class="form-group">
	<div class="form-check">
	  	<label class="form-check-label">
	    	<input name="publicado" type="checkbox" class="form-check-input" value="true"/> Publicado?
	 	 </label>
	</div>
</div>
