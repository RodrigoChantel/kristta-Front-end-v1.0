<?php
    function IncludeVersioned($file) {
     $absoluto = __DIR__ . 'asssassets/';  # ajuste aqui
     if (is_file($absoluto . $file)) {
          $time = $absoluto . $file;

          $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

          switch ($ext) {
                case 'js':
                echo '<script src="', $file,'?v=', $time,'"></script>';
                break;
                case 'css':
                   echo '<link href="', $file,'?v=', $time,'" rel="stylesheet">';
                break;
                default:
                   echo '<!-- tipo invalido de resource -->';
          }
     } else {
           echo '<!-- resource não encontrado -->';
     }
}
?>