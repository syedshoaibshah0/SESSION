<?php

session_start();


session_unset();


session_destroy();


echo "<H1><B>you are logout</B></H1>";


echo "<div class='d-grid gap-2' style='margin-top: 5px;'>
        <button  type='submit'><a href='LOGIN.PHP'>LogIN</a></button>
      </div>";


?>