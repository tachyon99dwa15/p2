<?php
require 'Form.php';
require 'Rectangle.php';

use DWA\Form;
use Project2\Rectangle;

dump($_GET);

$rectangle = new Rectangle();
#die();
# We'll be storing data in the session, so initiate it
session_start();
# Instantiate our objects

$form = new Form($_POST);
# Get data from form request
$length = (float) $form->get('length');
$width = (float) $form->get('width');
$round = $form->has('round');
$Type_of_Calculation = $form->get('Type_of_Calculation');
$area = $length*$width;
$perimeter = 2 * $length + 2 * $width;


# Validate the form data
$errors = $form->validate([
    'length' => 'required|numeric',
    'width' => 'required|numeric'
]);


if ($round) {
    $area = round($area);
    $perimeter = round($perimeter);
}


$_SESSION['results'] = [
    'length' => $length,
    'width' => $width,
    'round' => $round,
    'area' => $area,
    'perimeter' => $perimeter,
    'Type_of_Calculation' => $Type_of_Calculation,
];

header('Location: index.php' );
