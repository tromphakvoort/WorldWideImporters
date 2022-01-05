<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $routes->get('homepage')->getPath() ?>">
            <img src="<?php echo URL_SUBFOLDER . "/public/assets/logo.png" ?> " alt="World Wide Importers" width="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $routes->get('homepage')->getPath() ?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shoppen</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo $routes->get('category1')->getPath() ?>">Categorie 1</a></li>
                        <li><a class="dropdown-item" href="#">Categorie 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Categorie 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $routes->get('about')->getPath() ?>">Over ons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $routes->get('contact')->getPath() ?>">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li
                <form class="d-flex">
                  <input class="form-control mr-sm-2" type="search" placeholder="Zoeken..." aria-label="Search">
                </li>
                <li
                  <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                  </button>
                </form>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li
                  <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="black" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $routes->get('login')->getPath() ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="grey" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
