<?php
    include __DIR__ . '/data/data.php';
    header('Content-type: application/json');
    echo json_encode($array_dischi);
?>