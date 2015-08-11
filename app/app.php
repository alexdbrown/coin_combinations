<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/CashMoney.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_cashmoney", function() use ($app) {
        $my_Cash_Money = new CashMoney;
        $your_Cash_Money = $my_Cash_Money->getCashMoney($_GET['cents']);
        return $app['twig']->render('view.html.twig', array('result' => $your_Cash_Money));
    });

    return $app;
?>
