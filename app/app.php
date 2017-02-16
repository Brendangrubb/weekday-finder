<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/WeekdayFinder.php';


    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'));

    $app->get('/', function() use ($app) {


        return $app['twig']->render('form.html.twig');
    });

    $app->post('/result', function() use ($app) {
        $new_day_finder = new WeekdayFinder;
        $new_date = $_POST['date'];

        $output = $new_day_finder->findWeekday($new_date);
        return $app['twig']->render('result.html.twig', array('output' => $output));
    });


    return $app;
?>
