<?php
include "cookie_fn.php";

set_cookie("ck01", "valor", 1000);
if (isset($_COOKIE["ck01"])) {
    echo "coookie Inlcuido";
} else {
    echo "coookie nao Inlcuido";
}
delete_cookie("ck01");
