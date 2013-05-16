<?php
require_once "CForm.php";

// -----------------------------------------------------------------------
//
// Use the form and check its status.
//
session_name('cform_example');
session_start();

$formProfile = new CForm(array(), array(
    'nick' => array(
      'type'        => 'text',
      'label'       => 'Nickname:',
      'required'    => false,
      'validation'  => array(),
    ),        
    'email' => array(
      'type'        => 'email',
      'label'       => 'Email:',
      'required'    => false,
      'validation'  => array('email_adress'),
    ),        
    'submit-profile' => array(
      'type'      => 'submit',
      'callback'  => function($form) {
        $form->AddOutput("<p><i>DoSubmit(): Form was submitted. Do stuff (save to database) and return true (success) or false (failed processing form)</i></p>");
        $form->AddOutput("<p><b>Nick: " . $form->Value('nick') . "</b></p>");
        $form->AddOutput("<p><b>Email: " . $form->Value('email') . "</b></p>");
        return true;
      }
    ),
    'submit-fail-profile' => array(
      'type'      => 'submit',
      'callback'  => function($form) {
        $form->AddOutput("<p><i>DoSubmitFail(): Form was submitted but I failed to process/save/validate it</i></p>");
        return false;
      }
    ),
  )
);

$formPassword = new CForm(array(), array(
    'current-password' => array(
      'type'        => 'password',
      'label'       => 'Current password:',
      'required'    => true,
      'validation'  => array('not_empty'),
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
    'submit-password' => array(
      'type'      => 'submit',
      'callback'  => function($form) {
        $form->AddOutput("<p><i>DoSubmit(): Form was submitted. Do stuff (save to database) and return true (success) or false (failed processing form)</i></p>");
        return true;
      }
    ),
    'submit-fail-password' => array(
      'type'      => 'submit',
      'callback'  => function($form) {
        $form->AddOutput("<p><i>DoSubmitFail(): Form was submitted but I failed to process/save/validate it</i></p>");
        return false;
      }
    ),
  )
);

// Check the status of the form
$status = $formProfile->Check();
 
// What to do if the form was submitted?
if ($status === true) {
  $formProfile->AddOUtput("<p><i>Profile form was submitted and the callback method returned true.</i></p>");
  //header("Location: " . $_SERVER['PHP_SELF']);

} else if ($status === false){ // What to do when form could not be processed?
  $formProfile->AddOutput("<p><i>Profile form was submitted and the Check() method returned false.</i></p>");
  //header("Location: " . $_SERVER['PHP_SELF']);
}

// Check the status of the form
$status = $formPassword->Check();
 
// What to do if the form was submitted?
if ($status === true) {
  $formPassword->AddOUtput("<p><i>Password form was submitted and the callback method returned true.</i></p>");
  //header("Location: " . $_SERVER['PHP_SELF']);

} else if ($status === false){ // What to do when form could not be processed?
  $formPassword->AddOutput("<p><i>Password form was submitted and the Check() method returned false.</i></p>");
  //header("Location: " . $_SERVER['PHP_SELF']);
}


?><!doctype html>
<meta charset="utf-8">
<title>CForm Example: Basic example on how to use CForm</title>
<link rel="stylesheet" href="style.css">
<h2>Edit your account details</h2>
<?=$formProfile->GetHTML(array('fieldset_label' => "Edit profile"))?>
<br>
<?=$formPassword->GetHTML(array('fieldset_label' => "Change password"))?>
<p><code>$_POST</code> <?php if(empty($_POST)) {echo '<i>is empty.</i>';} else {echo '<i>contains:</i><pre>' . print_r($_POST, 1) . '</pre>';} ?></p>