<?php

// dd - for dump and die
function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '<pre>';
}
