<?php
require 'Form.php';
require 'Rectangle.php';
require 'includes/helpers.php';

use DWA\Form;
use Project2\Rectangle;

# We'll be storing data in the session, so initiate it
session_start();

# Instantiate our objects
$rectangle = new Rectangle();
$form = new Form($_GET);

# Get data from form request
$length = (float)$form->get('length');
$width = (float)$form->get('width');
$round = (float)$form->has('round');
$Type_of_Calculation = $form->get('Type_of_Calculation');

# Validate the form data
$errors = $form->validate([
    'length' => 'required|numeric|min:0.01',
    'width' => 'required|numeric|min:0.01'
]);

if (!$form->hasErrors) {
    $rectangle->setLength($length);
    $rectangle->setWidth($width);
    $area = $rectangle->getlength() * $rectangle->getWidth();
    $perimeter = 2 * $rectangle->getlength() + 2 * $rectangle->getWidth();
    if ($round) {
        $area = round($area);
        $perimeter = round($perimeter);
    }
}

$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'length' => $length,
    'width' => $width,
    'round' => $round,
    'area' => $area,
    'perimeter' => $perimeter,
    'Type_of_Calculation' => $Type_of_Calculation,
];

header('Location: index.php');
