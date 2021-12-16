<?php
    $sock_servidor=socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    $resultado = socket_bind ($sock_servidor, '10.1.17.103', 9000);
    $resultado = socket_listen ($sock_servidor, 1);
    $sock_cliente = socket_accept ($sock_servidor);
    socket_shutdown ($sock_servidor, 2);
    socket_close ($sock_servidor);
?>