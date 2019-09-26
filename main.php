<?php
require_once 'oldable.php';
require_once 'larve.php';
require_once 'fourmiliere.php';
require_once 'fourmi.php';
require_once 'reine.php';
require_once 'guerriere.php';
require_once 'ouvriere.php';



/*
 * TODO : créer première fourmilière (200 fourmis, une reine, 500 nouriture)
 * TODO : simulation temps -> evolution
 * TODO :   _ veillissement tt le monde
 *          _ nourrir tt le monde
 *          _ ponte oeufs, (éclosion fourmilière)? répartition : o/g
 *          _ boulot guerrrière
 *          _ boulot ouvrière
 *          _ dead / alive (qt nouriture / enemis...)
 */

echo 'Bienvenu sur le TP des Fourmis';

/** @var TYPE_NAME $test */
$test = new fourmiliere();
$test->addLarves('larve 1');
$test->addLarves('larve 2');
$test->addLarves('larve 3');
$test->addLarves('larve 4');

var_dump($test->getLarves());