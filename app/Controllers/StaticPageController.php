<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class StaticPageController
{
    public function contactPage(RouteCollection $routes) {
        require_once APP_ROOT . '/views/contact.php';
    }
    public function aboutPage(RouteCollection $routes) {
        require_once APP_ROOT . '/views/about.php';
    }
    public function category1Page(RouteCollection $routes) {
        require_once APP_ROOT . '/views/category1.php';
    }
    public function category2Page(RouteCollection $routes) {
        require_once APP_ROOT . '/views/category2.php';
    }
    public function category3Page(RouteCollection $routes) {
        require_once APP_ROOT . '/views/category3.php';
    }
}
