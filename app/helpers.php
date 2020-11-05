<?php
function setActive($routeName)
{
    return request()->routels($routeName) ? 'active':'';
}

?>
