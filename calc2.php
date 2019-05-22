<?php
require 'Form.php';

use DWA\Form;

# We'll be storing data in the session, so initiate it
session_start();
# Instantiate our objects

$form = new Form($_POST);
# Get data from form request
$length = $form->get('length');
$width = $form->get('width');
$round = $form->has('round');

# Validate the form data
$errors = $form->validate([
    'length' => 'required|numeric',
    'width' => 'required|numeric'
]);

$area = $length * $width;


# Store our results data in the SESSION so it's available when we redirect back to index.php
$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $form->hasErrors,
    'length' => $length,
    'books' => $books ?? null,
    'bookCount' => isset($books) ? count($books) : 0,
    'round' => $round,
];


header('Location: index.php' );

