<?php
/* ------ Logique -----*/
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'home') {
        $url_page = 'home';
 } elseif ($page == 'product') {
        $url_page = 'product';
 /*   } elseif ($page == 'products') {
        $url_page = 'products';
    } elseif ($page == 'cv_generique') {
        $url_page = 'cv_generique';
    } elseif ($page == 'contact') {
        $url_page = 'contact';*/
    } else {
        $url_page = '404';
    }
} else {
    $url_page = 'home';
}

/* ------ fin logique -----*/
/* ------ Début execution -----*/
include 'pages/' . $url_page . '.php';
//include 'layout.php';
/* ------ Fin execution -----*/