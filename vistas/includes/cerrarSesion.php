<?php

session_start();

session_destroy();//destruye toda la informacion registrada se una sesion

header("Location: ../../index.html");
?>