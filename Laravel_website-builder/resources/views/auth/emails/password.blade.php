<?php 
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
