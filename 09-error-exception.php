<?php

function inverse($x)
{
    if (!$x) {
        throw new Exception('you have an error');
    }
    return 1 / $x;
}
try {
    echo inverse(0);
} catch (Exception $error) {
    echo 'The error message: ', $error->getMessage(), '';
}
