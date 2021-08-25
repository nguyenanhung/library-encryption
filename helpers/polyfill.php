<?php
/**
 * Project library-encryption
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/25/2021
 * Time: 11:49
 */
if (!function_exists('codeigniter_show_error')) {
    /**
     * Function codeigniter_show_error
     *
     * @param $message
     * @param $code
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/25/2021 24:00
     */
    function codeigniter_show_error($message, $code = '')
    {
        if (function_exists('show_error')) {
            show_error($message, $code);
        }
    }
}
if (!function_exists('codeigniter_log_message')) {
    /**
     * Function codeigniter_log_message
     *
     * @param $level
     * @param $message
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/25/2021 04:33
     */
    function codeigniter_log_message($level, $message)
    {
        if (function_exists('log_message')) {
            log_message($level, $message);
        }
    }
}
if (!function_exists('remove_invisible_characters')) {
    /**
     * Function remove_invisible_characters
     *
     * @param      $str
     * @param bool $url_encoded
     *
     * @return array|string|string[]|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/25/2021 21:26
     */
    function remove_invisible_characters($str, $url_encoded = TRUE)
    {
        $non_displayables = array();

        // every control character except newline (dec 10),
        // carriage return (dec 13) and horizontal tab (dec 09)
        if ($url_encoded) {
            $non_displayables[] = '/%0[0-8bcef]/i';    // url encoded 00-08, 11, 12, 14, 15
            $non_displayables[] = '/%1[0-9a-f]/i';    // url encoded 16-31
            $non_displayables[] = '/%7f/i';    // url encoded 127
        }

        $non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';    // 00-08, 11, 12, 14-31, 127

        do {
            $str = preg_replace($non_displayables, '', $str, -1, $count);
        }
        while ($count);

        return $str;
    }
}
if (!function_exists('is_php')) {
    /**
     * Determines if the current version of PHP is equal to or greater than the supplied value
     *
     * @param string
     *
     * @return    bool    TRUE if the current version is $version or higher
     */
    function is_php($version)
    {
        static $_is_php;
        $version = (string) $version;

        if (!isset($_is_php[$version])) {
            $_is_php[$version] = version_compare(PHP_VERSION, $version, '>=');
        }

        return $_is_php[$version];
    }
}