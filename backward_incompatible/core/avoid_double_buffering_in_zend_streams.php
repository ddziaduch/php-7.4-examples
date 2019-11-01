<?php
class Loader {
    public function stream_open($path, $mode, $options, &$opened_path)  {
        return true;
    }
    function stream_read($count) {
        return '';
    }
    function stream_eof() {
        return true;
    }
    function stream_stat() {
        return array('size' => 0);
    }
}
stream_wrapper_register('Loader', 'Loader');
// 7.3: czysto :)
// 7.4: Warning: require(): Loader::stream_set_option is not implemented!
require 'Loader://qqq.php';