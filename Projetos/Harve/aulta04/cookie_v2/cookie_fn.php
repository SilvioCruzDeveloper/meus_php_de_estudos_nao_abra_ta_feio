<?php
function get_cookie($name)
{
    if (isset($_COOKIE[$name])) {
        return $_COOKIE[$name];
    } else {
        return null;
    }
}

function set_cookie(string $name, string $value, int $expires)
{
    setcookie($name, $value, time() + $expires);
    return $value;
}
function delete_cookie($name)
{
    setcookie($name, '', 0);
    return $name;
}
