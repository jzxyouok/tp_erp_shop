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