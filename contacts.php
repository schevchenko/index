<div id="introduction">
    Contact me
</div>
<form id="mail_form" action="#" method="post">
    <label>Name</label>
    <input type="text" name="name">
    
    <label>E-mail</label>
    <input type="text" name="e-mail">
    
    <label>Message</label>
    <textarea name="message">
    </textarea>
    
</form>
<?php
    $mes = "Helllo DEnis";
    $sub = "keine Subjekt";
    $to = "deniz7300@gmail.com";
    mail($to,$sub,$mes);
?>
