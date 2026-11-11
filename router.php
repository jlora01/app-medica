<?php
// Bloquea el acceso a archivos y carpetas ocultas (.git, .replit, etc.)
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (preg_match('#/\.#', $ruta) || basename($ruta) === 'router.php') {
    http_response_code(404);
    include '404.php';
    return true;
}
return false;
