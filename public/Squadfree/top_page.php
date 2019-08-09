<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

	<title>Bootstrap ecommerce UI KIT - Alibaba example html template </title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/productlist/favicon.ico">

	<!-- jQuery -->
	<script src="assets/scripts/productpage/jquery.min.js"></script>
    <!-- jQuery Easing -->
	<script src="assets/scripts/productpage/jquery.easing.1.3.js"></script>

 	<!-- Bootstrap4 files -->
	<script src="assets/scripts/productlist/bootstrap.bundle.min.js" type="text/javascript"></script>
	<link href="assets/styles/productlist/bootstrap.css" rel="stylesheet" type="text/css" />

	<!-- Font awesome 5 -->
	<link href="assets/fonts/fontawesome/assets/styles/productlist/fontawesome-all.min.css" type="text/css" rel="stylesheet">

	<!-- plugin: fancybox  -->
	<script src="assets/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
	<link href="assets/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

	<!-- plugin: owl carousel  -->
	<link href="assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	<!-- custom style -->
	<link href="assets/styles/productlist/ui.css" rel="stylesheet" type="text/css" />
	<link href="assets/styles/productlist/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
	<link href="css/style.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet">
  	<link href="color/default.css" rel="stylesheet">


	<!-- custom javascript -->
 	<script src="assets/scripts/productlist/script.js" type="text/javascript"></script>

	<script type="text/javascript">
		// <!-- /// some script -->

	jquery ready start
		$(document).ready(function() {
			jQuery code

		});
		jquery end
	</script>

</head>

<body>


<header class="section-header">

<?php

  include_once('inc/header.php');

  ?>



	</header> 

	<!-- ========================= SECTION CONTENT ========================= -->
	<section class="section-content bg padding-y-sm">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<div class="row">
						
						<div class="col-md-3-24"> <strong>Filtrar por:</strong> </div> <!-- col.// -->
						<div class="col-md-21-24">
							<ul class="list-inline">
								<li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tipo de fornecedor </a>
									<div class="dropdown-menu p-3" style="max-width:400px;">	
		      <label class=" form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> Bom fornecedor
										</a>
										</label>
										<label class="form-check">
											<a href="#">
												<input type="checkbox" class="form-check-input"> Melhor fornecedor
											</a>
										</label>
										<label class="form-check">
											<a href="#">
												<input type="checkbox" class="form-check-input"> Novo fornecedor
											</a>
										</label>
									</div> <!-- dropdown-menu.// -->
								</li>
								<li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Country </a>
									<div class="dropdown-menu p-3" style="max-width:400px;">	
		      <label class=" form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> China
										</a>
										</label>
										<label class="form-check">
											<a href="#">
												<input type="checkbox" class="form-check-input"> Japão
											</a>
										</label>
										<label class="form-check">
											<a href="#">
												<input type="checkbox" class="form-check-input"> Urbequistão
											</a>
										</label>
										<label class="form-check">
											<a href="#">
												<input type="checkbox" class="form-check-input"> Russia
											</a>
										</label>
									</div> <!-- dropdown-menu.// -->
								</li>
								<li class="list-inline-item"><a href="#">Tipo do smartphone</a></li>
								<li class="list-inline-item"><a href="#">Marca</a></li>
								<li class="list-inline-item"><a href="#">Cor</a></li>
								<li class="list-inline-item"><a href="#">Tamanho</a></li>
								<li class="list-inline-item">
									<div class="form-inline">
										<label class="mr-2">Preço</label>
										<input class="form-control form-control-sm" placeholder="Min" type="number">
										<span class="px-2"> - </span>
										<input class="form-control form-control-sm" placeholder="Max" type="number">
										<button type="submit" class="btn btn-sm ml-2">Ok</button>
									</div>
								</li>
							</ul>
						</div> <!-- col.// -->
					</div> <!-- row.// -->
				</div> <!-- card-body .// -->
			</div> <!-- card.// -->

			<div class="padding-y-sm">
				<span>3897 resultados por "Item" (fácil pra decidir né?)</span>
			</div>


<div class="card-deck">

			<div class="card">
				<img class="card-img-top" src="img/o_melhor.jpg" alt="O melhor!">
				<div class="card-body">
				<h5 class="card-title">Opção 1</h5>
				<p class="card-text">O melhor!</div>
				<div class="card-footer">
				<small class="text-muted">Atualizado em tempo real!!!</small>
				</div>
			</div>
 
 
 
			<div class="card">
				<img class="card-img-top" src="img/maisoumenos.jpg" alt="O mais ou menos!">
				<div class="card-body">
				<h5 class="card-title">Opção 2</h5>
				<p class="card-text">O mais ou menos!</div>
				<div class="card-footer">
				<small class="text-muted">Atualizado em tempo real!!!</small>
				</div>
			</div>
  
  
			<div class="card">
				<img class="card-img-top" src="img/vaiqne.jpg" alt="Esse é piorzinho.... Mas....  Vai que né?">
				<div class="card-body">
				<h5 class="card-title">Opção 3</h5>
				<p class="card-text">Esse é piorzinho.... Mas....  Vai que né?</div>
				<div class="card-footer">
				<small class="text-muted">Atualizado em tempo real!!!</small>
				</div>
			</div>


</div>
</div>
</div> <!-- row.// -->


		</div><!-- container // -->
	</section>
	<!-- ========================= SECTION CONTENT .END// ========================= -->

<?php
  include_once('inc/footer2.php');
  ?>

</body>

</html>