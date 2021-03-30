<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>DataTables Lado Servidor</title>
</head>

<body>

  <header class="container-fluid bg-dark">
    <div class="container px-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0">
        <a class="navbar-brand" href="./">DataTables</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="https://erickdeleon.dev/"><i class="fas fa-home mr-2"></i>Blog</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <main class="container">
    <h1 class="text-center mt-5">DataTables</h1>
    <h3 class="text-center mb-5">Lado Servidor</h3>
    <div class="row">
      <div class="col-12">
        <table id="postsTable" class="table table-striped table-bordered responsive" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Ruta</th>
              <th>Estado</th>
              <th>Portada</th>
              <th>Autor</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Ruta</th>
              <th>Estado</th>
              <th>Portada</th>
              <th>Autor</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </main>


  <footer class="container-fluid bg-dark text-white py-5 mt-5">
    <div class="row flex-column align-items-center">
      <div class="col-md-6 text-center text-muted mb-5">
        <p class="mb-0">©<?= date('Y') ?> Erick De León. Todos los derechos reservados.</p>
      </div>
      <div class="col-md-6 text-center text-muted">
        <div class="social">
          <a href="https://twitter.com/erickdl_xs" target="_blank" class="twitterColor"><i class="fab fa-twitter"></i></a>
          <a href="https://github.com/erickxs" target="_blank" class="githubColor"><i class="fab fa-github"></i></a>
          <a href="https://www.youtube.com/c/erickdeleondev" target="_blank" class="youtubeColor"><i class="fab fa-youtube"></i></a>
          <a href="https://www.twitch.tv/erickl_s" target="_blank" class="twitchColor"><i class="fab fa-twitch"></i></a>
          <a href="https://account.xbox.com/es-mx/profile?gamertag=ERlCK%20CHINGON" target="_blank" class="xboxColor"><i class="fab fa-xbox"></i></a>
        </div>
      </div>
    </div>
  </footer>


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="assets/plugins/datatables/datatables.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Custom JS -->
  <script src="assets/js/posts.js"></script>
</body>

</html>