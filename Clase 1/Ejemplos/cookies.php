<?php

// Creamos una cookie que expire en 1 hora
setcookie('prueba-cookies', 'valor-prueba', time() + 3600);
print_r($_COOKIE);