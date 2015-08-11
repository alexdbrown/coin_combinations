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
        $your_Cash_Money = explode(" ", $your_Cash_Money);
        $string = $your_Cash_Money[0] . " quarters, " . $your_Cash_Money[1] . " dimes, " . $your_Cash_Money[2] . " nickels, and " . $your_Cash_Money[3] . " pennies.";

        return $app['twig']->render('view.html.twig', array('result' => $string));
    });

    return $app;
?>
