<?php

$cursos = fopen('zip://arquivos.zip#curso-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);