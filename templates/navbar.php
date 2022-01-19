<?php

use App\Helpers\Utils;

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $routes->get('homepage')->getPath() ?>">
            <img src="<?php echo URL_SUBFOLDER . "/public/assets/logo.png" ?> " alt="World Wide Importers" width="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                       href="<?php echo $routes->get('homepage')->getPath() ?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Shoppen</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" target="_self"
                               href="<?php echo $routes->get('category1')->getPath() ?>">Melkchocolade</a></li>
                        <li><a class="dropdown-item" target="_self"
                               href="<?php echo $routes->get('category2')->getPath() ?>">Pure chocolade</a></li>
                        <li><a class="dropdown-item" target="_self"
                               href="<?php echo $routes->get('category3')->getPath() ?>">Witte chocolade</a></li>
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
                <li>
                    <form class="d-flex">
                        <input class="form-control mr-sm-2" type="search" placeholder="Zoeken..." aria-label="Search"/>
                        <button class="btn btn-link my-2 my-sm-0" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </li>

            </ul>
            <ul class="navbar-nav justify-content-end">
                <?php if (Utils::isLoggedIn() == true) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="' . $routes->get('cart')->getPath() . '">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-cart2" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                        Winkelwagen
                    </a>
                </li>
                    <form action="/logout" method="post" class="d-flex">
                        <button class="btn btn-link nav-link" type="submit">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                  <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                                  <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                             </svg> Uitloggen
                        </button>
                    </form>';
                } else {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="' . $routes->get('login')->getPath() . '">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-door-open" viewBox="0 0 16 16">
                            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                        </svg>
                        Inloggen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="' . $routes->get('register')->getPath() . '">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                        </svg>
                        Registreren</a>
                </li>';
                } ?>
            </ul>
        </div>
    </div>
</nav>
