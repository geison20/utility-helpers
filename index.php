<?php 

require_once "vendor/autoload.php";

use geissonmachado\Helpers\Url;


// redireciona o usuario para a pagina
Url::redirect('teste1.php', ["5", true]);