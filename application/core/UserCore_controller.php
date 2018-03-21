<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


 function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}




function newsarray($con='world')
{


    $catarray=array(
        'News'=>base_url().$con.'/news',
        'Economy'=>base_url().$con.'/news/economics',
        'Business'=>base_url().$con.'/news/business',
        'Sci/Tech'=>base_url().$con.'/news/tech',
        'Markets'=>base_url().$con.'/news/market',
        'Arts'=>base_url().$con.'/news/art_life',
        'Real Estate'=>base_url().$con.'/news/real_estate',
        'Sports'=>base_url().$con.'/news/sports',
        'Weather'=>base_url().$con.'/news/weather',
        'Traffic'=>base_url().$con.'/news/traffic',
    );
return $catarray; 

}





class UserCore_controller extends CI_Controller {



	public $public_methods = array();

    function __construct() {
        parent::__construct();
    
    }





}