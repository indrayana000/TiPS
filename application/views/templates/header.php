<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $judul_head; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <div class="container"> -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TiPS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- <a class="nav-link" aria-current="page" href="#">Home</a> -->
        <a class="nav-link" href="<?= base_url();  ?>">Home</a>
        <a class="nav-link disabled" href="#">Rent</a>
        <a class="nav-link disabled" href="#">Book</a>
        <a class="nav-link active" href="<?= base_url();  ?>pricelist">Price List</a>
      </div>
    </div>
  </div>
  <!-- </div>  -->
</nav>