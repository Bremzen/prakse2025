<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekta mājaslapa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css?v=2">
  </head>
  <body>

    <!-- Navigation bar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SIA Uzņēmums</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#sakums">Sākums</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#produkti">Produkti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#galerija">Galerija</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#kontakti">Kontakti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End of Navigation bar -->

    <!-- Hero Section -->

    <div class="hero-section" id="sakums">
      <div class="image"></div>
      <div class="container px-4 py-3">
        <div class="text-center">
          <h1 class="display-1">Pērc mūsu produktus :thumbsup:</h1>
          <h3 class="py-5">Mums ir labi produkti, lūdzu pērc tos.</h3>
          <a class="btn btn-primary" href="#produkti" role="button">Skatīt produktus</a>
        </div>
      </div>
    </div>

    <!-- End of Hero Section-->

    <!-- Product Section -->

    <h1 class="display-1" id="produkti">Produkti</h1>

    <div class="d-flex justify-content-md-start justify-content-center flex-wrap mx-10 my-5 mx-3">

      <div class="card m-3" style="width: 18rem;">
        <img src="https:/picsum.photos/200" class="card-img-top" alt="Milk">
        <div class="card-body">
          <h5 class="card-title">Piens</h5>
          <p class="card-text">apraksts utt.</p>
        </div>
        <div class="card-footer">€1.00</div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="https:/picsum.photos/200" class="card-img-top" alt="Milk">
        <div class="card-body">
          <h5 class="card-title">Piens</h5>
          <p class="card-text">apraksts utt.</p>
        </div>
        <div class="card-footer">€1.00</div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="https:/picsum.photos/200" class="card-img-top" alt="Milk">
        <div class="card-body">
          <h5 class="card-title">Piens</h5>
          <p class="card-text">šis ir tāds mazliet un varbūt mazliet vēl garāks ar vēl dažiem parastiem un ierastiem vārdiem, kur ir apraksts utt.</p>
        </div>
          <div class="card-footer">€1.00</div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="https:/picsum.photos/200" class="card-img-top" alt="Milk">
        <div class="card-body">
          <h5 class="card-title">Piens</h5>
          <p class="card-text">apraksts utt.</p>
        </div>
        <div class="card-footer">€1.00</div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <img src="https:/picsum.photos/200" class="card-img-top" alt="Milk">
        <div class="card-body">
          <h5 class="card-title">Piens</h5>
          <p class="card-text">apraksts utt.</p>
        </div>
        <div class="card-footer">€1.00</div>
      </div>
    </div>
    
    <!-- End of Product Section -->

    <!-- Carousel -->

    <h1 id="galerija" class="display-5">Galerija</h1>
    <div class="mx-auto p-2 my-3 container-md">
      <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https:/picsum.photos/800/400" class="d-block w-100" alt="Photo 1">
          </div>
          <div class="carousel-item">
            <img src="https:/picsum.photos/800/400" class="d-block w-100" alt="Photo 2">
          </div>
          <div class="carousel-item">
            <img src="https:/picsum.photos/800/400" class="d-block w-100" alt="Photo 3">
          </div>
        </div>
      </div>
    </div>

    <!-- End of Carousel -->

    <!-- Contact form -->

    
    <div class="container p-4">
      <form>
        <legend>Sazinies ar mums</legend>
        <div class="mb-3">
          <label for="vardsInput" class="form-label">Vārds</label>
          <input type="email" class="form-control" id="vardsInput" placeholder="Jānis">
        </div>
        <div class="mb-3">
          <label for="epastsInput" class="form-label">E-pasts</label>
          <input type="email" class="form-control" id="epastsInput" placeholder="vards@piemers.com">
        </div>
        <div class="mb-3">
          <label for="zinojums" class="form-label">Ziņojums</label>
          <textarea class="form-control" id="zinojums" rows="2"></textarea>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Sūtīt</button>
        </div>
      </form>
    </div>

    <!-- End of contact form -->

    <footer class="bg-light py-5"></footer>

  </body>
</html>