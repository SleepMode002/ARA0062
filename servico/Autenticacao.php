<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://silenceenterprise.000webhostapp.com/');
    </script>
    ";
    
}

?>