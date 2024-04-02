<?php
session_start();
if (isset($_SESSION['usuarioLogado']) && $_SESSION['usuarioLogado'] === true) {
    echo "LOGADO";
} else {
    echo "NAO LOGADO";
}
