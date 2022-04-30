<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in() {
    $CI = & get_instance(); 

    if(!$CI->session->userdata('user_login')){
        $CI->session->set_flashdata('msg', "silahkan melakukan login terlebih dahulu");
        redirect('auth');
    }
}