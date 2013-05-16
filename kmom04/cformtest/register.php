<?php
require_once "CForm.php";

// -----------------------------------------------------------------------
//
// Use the form and check its status.
//
session_name('cform_example');
session_start();

$form = new CForm(array(), array(
    'nick' => array(
      'type'        => 'text',
      'label'       => 'Nickname:',
      'required'    => true,
      'validation'  => array('not_empty'),
    ),        
    'email' => array(
      'type'        => 'email',
      'label'       => 'Email:',
      'required'    => true,
      'validation'  => array('not_empty', 'email_adress'),
    ),        
    'password' => array(
      'type'        => 'password',
      'label'       => 'Password:',
      'required'    => true,
      'validation'  => array('not_empty'),
    ),
    'password-confirm' => array(
      'type'        => 'password',
      'label'       => 'Confirm password:',
      'required'    => true,
      'validation'  => array('not_empty', 'match' => 'password'),
    ),
    'submit' => array(
      'type'      => 'submit',
      'callback'  => function($form) {
        $form->AddOutput("<p><i>DoSubmit(): Form was submitted. Do stuff (save to database) and return true (success) or false (failed processing form)</i></p>");
        $form->AddOutput("<p><b>Nick: " . $form->Value('nick') . "</b></p>");
        $form->AddOutput("<p><b>Email: " . $form->Value('email') . "</b></p>");
        return true;
      }
    ),
    'submit-fail' => array(
      'type'      => 'submit',
      'callback'  => function($form) {
        $form->AddOutput("<p><i>DoSubmitFail(): Form was submitted but I failed to process/save/validate it</i></p>");
        return false;
      }
    ),
  )
);

// Check the status of the form
$status = $form->Check();
 
// What to do if the form was submitted?
if ($status === true) {
  $form->AddOUtput("<p><i>Form was submitted and the callback method returned true.</i></p>");
  header("Location: " . $_SERVER['PHP_SELF']);

} else if ($status === false){ // What to do when form could not be processed?
  $form->AddOutput("<p><i>Form was submitted and the Check() method returned false.</i></p>");
  //header("Location: " . $_SERVER['PHP_SELF']);
}

?><!doctype html>
<meta charset="utf-8">
<title>CForm Example: Basic example on how to use CForm</title>
<link rel="stylesheet" href="style.css">
<h2>Create a new user</h2>
<?=$form->GetHTML(array('fieldset_label' => "Register"))?>
<p><code>$_POST</code> <?php if(empty($_POST)) {echo '<i>is empty.</i>';} else {echo '<i>contains:</i><pre>' . print_r($_POST, 1) . '</pre>';} ?></p>