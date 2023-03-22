<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../assets/css/homepage_BO.css" />
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary ">
		<div class="container-fluid bg-dark">
			<a class="navbar-brand text-light" href="">Fil-rouge</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active text-light" aria-current="page" href="index.php?page=homepageBO">Acceuil</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							naviguer
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="index.php?page=cat">Categorie</a></li>
							<li><a class="dropdown-item" href="index.php?page=subCat">Sous-Categorie</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
						</ul>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item"><?php
						if (isset($_SESSION['email'])) {
							echo '<a href="index.php?page=signout" class="nav-link text-danger fw-bold">Déconnexion</a>';
						} else { 
							echo '<a href="index.php" class="nav-link text-danger fw-bold">Se connecter</a>';
						}
					?>
						
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
	<?= $content ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>

</html>