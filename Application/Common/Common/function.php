<?php
/**
 * 秘密加密算法
 * @param $string
 * @return string
 */
function hash_md5( $string = '', $key = '' )
{
    return hash('md5', $string . empty($key) ? C('DATA_AUTH_KEY') : $key);
}

/**
 * 把时间格式转为时间戳
 * @param $date
 * @return int
 */
function format_datetime( $date ){
    return str_replace("/", "-", $date);
}

function datetime()
{
    return date('Y-m-d H:i:s');
}


function getValue($inputs, $key, $default='')
{
    return isset($inputs[$key]) ? $inputs[$key] : $default;
}