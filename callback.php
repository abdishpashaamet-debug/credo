<?php
$file = 'data.json';
$data = json_decode(file_get_contents($file), true);


// добавляем новое поле
$data['callbach'] = 'callbach';

// сохраняем
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
