<?php

require_once 'class.growl.php';

$connection = array('address' => '127.0.0.1', 'password' => 'password');
$growl = new Growl();

// Adding and registering your notifications with Growl
// only needs to be done once per computer. Growl will
// remember your app after this.
$growl->addNotification('Notification Name');
$growl->addNotification('Another Notification');
$growl->register($connection);

// Send a notification
$growl->notify($connection, 'Notification Name', 'Some Title', 'Some message to display');

// Send a second notification
$priority = 2; #GROWL_PRIORITY_EMERGENCY
$sticky   = true;
$growl->notify($connection, 'Another Notification', 'Another Title', 'Something useful I hope.', $priority, $sticky);

?>