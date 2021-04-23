<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="sorteio.css">
    <title>Formulário de sorteio</title>
  </head>

  <script type="text/javascript">
  	 /*
  	 const validarData = (p)=>{
      alert("aqui");  
      console.log(p.value());
     };
     */

  </script>
  <body>
  	<?php
	//include_once("class/apostador.php");
	include_once("class/sorteio.php");
	?>
	<div class="container">
      <div class="row">
        <div class="col-lg-12" border="1">
			   <div id="div_resultado1">
			   
			   </div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div id="div_resultado">
			   
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<div style="height: 20px;"></div>
  	<div class="container">
      <div class="row">
      	<form id="formSorteio" class="needs-validation" novalidate >
            <div class="col-lg-12 caja">
			    <h1>Formulário de sorteio</h1>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nome Lotérica</label>
				    <input type="text" minlength="17" name="nome_lot" class="form-control" id="nome_lot" placeholder="Nome lotérica"  required>				 
				    <div class="invalid-feedback">
				       Por favor, digite mais de 17 caracteres.
				    </div>
				    <div class="valid-feedback">
				       Validado ok
				    </div>   
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Data Sorteio</label>
				    <input type="date" class="form-control" name="data_sorteio" onFocusout="validarData(this);" id="data_sorteio" required>
				  </div>
				    <div class="invalid-feedback">
				       Por favor, selecione uma data maior a data atual.
				    </div>
				    <div class="valid-feedback">
				       Validado ok
				    </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Número inicial</label>
				    <input type="number"  min="1" max="5" class="form-control" id="num_inicial" name="num_inicial" required>
				  </div>
				  <div class="form-group">
				    <div class="form-group">
				    <label for="exampleFormControlInput1">Número final</label>
				    <input type="number" min="60" max="80" class="form-control" id="num_fim" name="num_fim" required>
				  </div>
				  <div class="form-group">
				    <div class="form-group">
				    <!--
				    <button class="btn btn-primary" type="submit" id="sortear" data-toggle="modal" data-target="#exampleModalLong">Sortear</button>
				    -->
				    <button class="btn btn-primary" type="submit" id="sortear">Sortear</button>	
				    <!--
				    <botton type="submit" class="btn btn-primary">Sortear</button>
				    
				  </div>
			</div>
		</form>
	  </div>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="sorteio.js"></script>
  </body>
</html>