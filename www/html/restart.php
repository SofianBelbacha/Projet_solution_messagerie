<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="Notre premiere interface d’administration">
 <meta name="author" content="Vous">

 <title>Starter Template for Bootstrap</title>

 <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <!-- Custom styles for this template -->
 <link href="starter-template.css" rel="stylesheet">
 </head>

 <body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="vue_ajout_utilisateur.php">Ajout d’utilisateur</a>
</li>
<li class="nav-item">
<a class="nav-link" href="restart.php">Redemarrage</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>

<main role="main" class="container">
 <div class="center">
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
 Redemarrer le serveur de messagerie
 </button>

<!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Redemarrage du serveur</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
 </div>
 <div class="modal-body">
 Etes-vous bien sur de vouloir redemarrer le serveur ?  </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Heu, non en fait</button>
 <form method="post" action="res.php">
 <button type="submit" class="btn btn-danger">Oui, fonce !</button>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>

</main><!-- /.container -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 </body>
</html>

