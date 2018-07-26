<?php 

    $filtre = array(
        'search' => FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS,
        'ok'    => FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);
        $result = filter_input_array(INPUT_GET, $filtre);

    $search = trim($result['search']);
    $ok = trim($result['ok']);

?>