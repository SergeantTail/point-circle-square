<?php

//Основная функция для связи с сервером
function main($method, $result)
{
    $myCurl = curl_init();
    $params = array(
        'key' => 'H9purOgEbDep5rigjxpgwmFjh1knp6qu94h00mkeW/VUsWBZrUxafFQKyHaMGeib91UjhJJN8CGuzmwkdIWmAA==',
        'method' => $method,
        'params' => $result,
    );
    $data_string = json_encode($params, JSON_UNESCAPED_UNICODE);
    curl_setopt_array($myCurl, array(
        CURLOPT_URL => 'http://contest.elecard.ru/api',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data_string,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        )
    ));
    $response = curl_exec($myCurl);
    curl_close($myCurl);

    return $response;
}

// Получаем данные для теста с сервера
function getTasks()
{
    $method = 'GetTasks';
    $result = null;
    return json_decode(main($method, $result));
}

//Сверяем результат с ответом от сервера
function checkResults($result)
{
    $method = 'CheckResults';
    print_r(main($method, $result));
}