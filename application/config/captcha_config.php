<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['captcha'] = array(
    'img_path'      => './captcha/',
    'img_url'       => base_url('captcha/'),
    'font_path'     => FCPATH . '/public/font/textb.ttf',
    'img_width'     => '130',
    'img_height'    => 30,
    'expiration'    => 7200,
    'border'        => 1, 
    'word_length'   => 5,
    'font_size'     => 16,
    'img_id'        => 'Imageid',
    'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'colors'        => array(
        'background' => array(255, 255, 255),
        'border'     => array(255, 255, 255),
        'text'       => array(8, 145, 178),
        'grid'       => array(255, 255, 255)
    )
);
