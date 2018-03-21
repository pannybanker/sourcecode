<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class World extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(get_option('default_timezone'));
        //$this->load->model('cron_model');
        $this->load->model('world_model');

    }

    public function index()
    {

   }
    public function news(){
         $tcat= $this->uri->segment(3);
        // echo date('Ymd');
       if($tcat=="") {
           $news = $this->world_model->get_world_category_data('media');
       }else{
           $news = $this->world_model->get_world_category_data($tcat);

       }

        if (!file_exists('./news_api/' . date('Ymd') . '/news_array/videos.json')) {
           // $cnts = file_get_contents('./news_api/' . date('Ymd') . '/news_array/videos.json');
        }else{

          //  $cnts = file_get_contents('./news_api/' . date('Ymd') . '/news_array/videos.json');

        }

      // echo "<pre>";print_r($news);exit;
        $data['news']=$news;
      //  $data['videos']=json_decode($cnts);

        $data['next'] = 'economy';
        $data['prev'] = 'world';
        $this->load->view('front/header');
        $this->load->view('front/worldbodynew', $data);
        $this->load->view('front/footer');



    }



    public function get_world_news(){

        $target_folder=date('Ymd');


            if (!file_exists('./news_api/' . $target_folder . '/news_array/')) {
                mkdir('./news_api/' . $target_folder . '/news_array/', 0777, true);
                //  exit;
            }



        //Weather

        $str0='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506162780632&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20(%20site_category%3Aenvironmental_safety%20OR%20site_category%3Aweather%20)';


        //Sports
        $str1='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506163583235&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Asports%20OR%20site_category%3Abaseball%20OR%20site_category%3Afootball%20)';

        //real estate
        $str2='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506163879813&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Areal_estate%20OR%20site_category%3Aconstruction%20)';
        // Art Life

        $str3='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506165374260&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Aentertainment%20OR%20site_category%3Amens_health%20OR%20site_category%3Aadventure_travel%20)';


        //markets

        $str4='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506165969228&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Astocks%20OR%20site_category%3Ainvesting%20)';

//Tech
        $str5='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506166291088&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Ascience%20OR%20site_category%3Atech%20)';

        //Business

        $str6='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506167264912&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Abusiness%20OR%20site_category%3Abusiness_software%20OR%20site_category%3Abusiness_travel%20)';


        //Economics

        $str7='http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506167881782&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Afinancial_news%20OR%20site_category%3Afinancial_planning%20)';


        $urlarray=array(

            'weather'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506162780632&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20(%20site_category%3Aenvironmental_safety%20OR%20site_category%3Aweather%20)',
            'sports'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506163583235&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Asports%20OR%20site_category%3Abaseball%20OR%20site_category%3Afootball%20)',
            'real_estate'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506163879813&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Areal_estate%20OR%20site_category%3Aconstruction%20)',
            'art_life'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506165374260&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Aentertainment%20OR%20site_category%3Amens_health%20OR%20site_category%3Aadventure_travel%20)',
            'market'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506165969228&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Astocks%20OR%20site_category%3Ainvesting%20)',
            'tech'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506166291088&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Ascience%20OR%20site_category%3Atech%20)',
            'business'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506167264912&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Abusiness%20OR%20site_category%3Abusiness_software%20OR%20site_category%3Abusiness_travel%20)',
            'economics'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506167881782&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(%20site_category%3Afinancial_news%20OR%20site_category%3Afinancial_planning%20)',
            'media'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506246770916&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20site_category%3Amedia%20social.facebook.likes%3A%3E500',
            'traffic'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506248162988&sort=crawled&q=language%3Aenglish%20site_type%3Anews%20social.facebook.likes%3A%3E5%20(site_category%3Atravel%20OR%20site_category%3Atraveling_with_kids)',
            'videos'=>'http://webhose.io/filterWebContent?token=efcbcf33-2afd-43be-90a0-ba396fb9f73d&format=json&ts=1506314249242&sort=crawled&q=language%3Aenglish%20has_video%3Atrue%20site_type%3Anews%20(site%3Areuters.com%20OR%20site%3Aespn.com%20OR%20site%3Acnn.com)%20social.facebook.likes%3A%3E20'

            );


        if (!file_exists('./news_api/' . $target_folder . '/world.json')) {
            foreach ($urlarray as $key => $val) {
                $curl = curl_init();

                curl_setopt_array($curl, array(

                    CURLOPT_RETURNTRANSFER => 1,

                    CURLOPT_URL => $val,

                    CURLOPT_USERAGENT => 'Codular Sample cURL Request'

                ));

                $resp = curl_exec($curl);

                curl_close($curl);
                $tempArray [$key] = json_decode($resp);

                // array_push($tempArray, json_decode($resp));
            }

            $fp = fopen('./news_api/' . date('Ymd') . '/world.json', 'w');

            fwrite($fp, json_encode($tempArray));




            /*if ($key > 0) {
                $inp = file_get_contents('./news_api/' . $target_folder . '/world.json');

                $tempArray = json_decode($inp);

                array_push($tempArray, $resp);
                $jsonData = json_encode($tempArray);
                file_put_contents('./news_api/' . date('Ymd') . '/world.json', $jsonData);

               // $fp = fopen('./news_api/' . date('Ymd') . '/world.json', 'w');

               // fwrite($fp, $resp);
                echo 'exist'.$key.'<br>';
            } else {
                echo 'not exist'.$key.'<br>';
                $fp = fopen('./news_api/' . date('Ymd') . '/world.json', 'w');

                fwrite($fp, $resp);
            }*/


            $this->set_news();

            $this->fill_news();


        }else{

            $this->fill_news();
        }





    }


    public function show_world_news(){

        $inp = file_get_contents('./news_api/' . date('Ymd') . '/world.json');

        echo '<pre>';print_r(json_decode($inp));


    }


    public function set_news(){
        $this->load->helper('file');
        $newscatgrp=array(
            'weather'=>array(10),
            'sports'=>array(9),
            'real_estate'=>array(8),
            'market'=>array(5),
            'art_life'=>array(6,7),
            'tech'=>array(4),
            'business'=>array(3),
            'economics'=>array(2),
            'media'=>array(1),
            'traffic'=>(11),
            'videos'=>(1)




        );






        $newsj = file_get_contents('./news_api/'.date('Ymd').'/world.json');
        $news_array = json_decode($newsj);
        //echo "<pre>";print_r($news_array);exit;

        foreach($newscatgrp as $key=>$val){

        foreach($news_array->$key->posts as $newspost) {
            $insert_data = array(
                'source_url' => $newspost->thread->url,
                'source_website' => $newspost->thread->site,
                'news_title' => $newspost->title,
                'news_text' => $newspost->text,
                'main_image' => $newspost->thread->main_image,
                'social' => json_encode($newspost->thread->social),
                'search_tags' => json_encode($newspost->entities),
                'cnt_id' => 0,
                'news_category_ids' => $key


            );


            $this->db->insert('news_main', $insert_data);
            $insert_id = $this->db->insert_id();



        }


        }


        /*$fp = fopen('./news_api/'.$target_folder.'entry_log.json', 'w');
        fwrite($fp,json_encode($country_collection));*/


    }



    public function fill_news(){

        $newscatgrp=array(
            'weather'=>array(10),
            'sports'=>array(9),
            'real_estate'=>array(8),
            'market'=>array(5),
            'art_life'=>array(6,7),
            'tech'=>array(4),
            'business'=>array(3),
            'economics'=>array(2),
            'media'=>array(1),
            'traffic'=>(11),
            'videos'=>(1)




        );

        $target_folder=date('Ymd');

        foreach($newscatgrp as $key=>$val){

            if (!file_exists('./news_api/' . $target_folder . '/news_array/'.$key.'.json') ||  filesize('./news_api/' . $target_folder . '/news_array/' . $key . '.json') >20) {
                $this->world_model->get_world_news($key);

            }




        }





    }






    public function set_territory_news(){
        $this->load->helper('file');
        $newscatgrp=array(
            'news'=>array(1),
            'entertainment'=>array(6,7),
            'shopping'=>array(5),
            'tech'=>array(4),
            'games'=>array(9),
            'sports'=>array(9),
            'finance'=>array(5,2),
            'social'=>array(1),
            'health'=>array(7),
            'travel'=>array(7),
            'education'=>array(1),
            'business'=>array(3),
            'real_estate'=>array(8),
            'media'=>array(1),



        );

        $target_folder=date('Ymd');
        $cnts=file_get_contents('./news_api/countrylist.json');
        $cnt_array=json_decode($cnts);
        // print_r($cnt_array);exit;
        $country_collection=array();
        foreach($cnt_array as $key=>$val){


            $country_collection[$key]=$val;
            // echo $key;exit;
            if($key) {

                if(file_exists('./news_api/' . $target_folder .'/' .$key . '.json')  ) {
                    $newsj = file_get_contents('./news_api/' . $target_folder . '/' . $key . '.json');
                    $news_array = json_decode($newsj);
                    echo "<pre>".$key;print_r($news_array);exit;
                    foreach ($news_array->posts as $newspost) {
                        $insert_data = array(
                            'source_url' => $newspost->thread->url,
                            'source_website' => $newspost->thread->site,
                            'news_title' => $newspost->title,
                            'news_text' => $newspost->text,
                            'main_image' => $newspost->thread->main_image,
                            'social' => json_encode($newspost->thread->social),
                            'search_tags' => json_encode($newspost->entities),
                            'cnt_id' => $key


                        );


                        $this->db->insert('news_main', $insert_data);
                        $insert_id = $this->db->insert_id();

                        $catCollection = array();
                        if (!empty($newspost->thread->site_categories)) {
                            foreach ($newspost->thread->site_categories as $cats => $val) {

                                foreach ($newscatgrp[$val] as $k => $v) {
                                    if (!in_array($v, $catCollection)) {
                                        $catCollection[] = $v;
                                    }

                                }


                            }

                        } else {
                            $catCollection[] = 1;

                        }


                        $updata = array(
                            'news_category_ids' => json_encode($catCollection)


                        );
                        $this->db->where('mnews_id', $insert_id);
                        $this->db->update('news_main', $updata);


                    }

                    //Creating reagons specific JSON Files
















                }
                // echo "<pre>";print_r($news_array);
                //  exit;
            }



        }


        $fp = fopen('./news_api/'.$target_folder.'entry_log.json', 'w');
        fwrite($fp,json_encode($country_collection));

$this->territory_news();
    }


    public function territory_news()
    {

       // error_reporting(0);
        //$con=$this->uri->segment(3);
        // $_SESSION['country'] = $con;

        $target_folder = date('Ymd');

        for($cont_id=1;$cont_id<8;$cont_id++){

        $rgid = $this->db->get_where('news_region', array('region_id' => $cont_id))->result_array();
        // echo $this->db->last_query();exit;
        $cntids = json_decode($rgid[0]['country_ids']);
        $strcnt = '0';
        foreach ($cntids as $key => $val) {
            $strcnt .= ',' . $val;
        }

        $strncat = "select * from news_categories";
        $qryncat = $this->db->query($strncat);
        $resncat = $qryncat->result_array();


        if (!file_exists('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json')) {
            if (!file_exists('./news_api/' . $target_folder . '/news_array/')) {
                mkdir('./news_api/' . $target_folder . '/news_array/', 0777, true);
                //  exit;
            }
            $str = "select * from news_main where cnt_id in(" . $strcnt . ") AND cnt_id !=0 AND DATE(added_on)='" . date('Y-m-d') . "'";
            $qry = $this->db->query($str);
            $res = $qry->result_array();
            // echo $this->db->last_query();exit;
            if (count($res) > 0) {


                $cnto = 1;
                foreach ($res as $nres) {
                    $file_sr = $nres['main_image'];
                    //$url=@getimagesize($file_sr);
                    $url = array(1);
                    if (is_array($url)) {

                        //echo "<pre>";print_r(json_decode($nres['social']));exit;
                        $social = json_decode($nres['social']);
                        //echo  $social->facebook->likes;exit;
                        if ($social->facebook->likes > 1000) {
                            $newsarray['top_stories'][] = $nres;
                        }

                        if (count($newsarray['top_stories']) < 20) {
                            if ($social->facebook->likes > 500) {
                                $newsarray['top_stories'][] = $nres;
                            }


                        }


                        $cats = json_decode($nres['news_category_ids']);
                        foreach ($cats as $key => $val) {
                            $newsarray[$val][] = $nres;

                        }


                        if (count($cats) > 2) {

                            $newsarray['scrolls'][] = $nres;

                        }


                    }


                }
                $fp = fopen('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json', 'w');
                fwrite($fp, json_encode($newsarray));


            } else {


                //$this->set_news();
                $str = "select * from news_main where cnt_id in(" . $strcnt . ") AND DATE(added_on)='" . date('Y-m-d') . "'";
                $qry = $this->db->query($str);
                $res = $qry->result_array();

                if (count($res) > 0) {


                    $cnto = 1;
                    foreach ($res as $nres) {
                        $file_sr = $nres['main_image'];
                        //$url=@getimagesize($file_sr);
                        $url = array(1);
                        if (is_array($url)) {

                            //echo "<pre>";print_r(json_decode($nres['social']));exit;
                            $social = json_decode($nres['social']);
                            //echo  $social->facebook->likes;exit;
                            if ($social->facebook->likes > 1000) {
                                $newsarray['top_stories'][] = $nres;
                            }

                            if (count($newsarray['top_stories']) < 20) {
                                if ($social->facebook->likes > 500) {
                                    $newsarray['top_stories'][] = $nres;
                                }


                            }


                            $cats = json_decode($nres['news_category_ids']);
                            foreach ($cats as $key => $val) {
                                $newsarray[$val][] = $nres;

                            }


                            if (count($cats) > 2) {

                                $newsarray['scrolls'][] = $nres;

                            }


                        }


                    }


                }

                $fp = fopen('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json', 'w');
                fwrite($fp, json_encode($newsarray));
            }

        }


    }



    }




    public function get_video(){

        $cnts = file_get_contents('./news_api/' . date('Ymd') . '/news_array/videos.json');


        echo '<div class="videoWrapper">
    <!-- Copy & Pasted from YouTube -->
    <iframe width="560" height="349" src="http://www.cnn.com/videos/world/2017/09/25/iraq-kurdish-referendum-elbagir-pkg.cnn" frameborder="0" allowfullscreen></iframe>
</div>';

      echo "<pre>";  print_r(json_decode($cnts));
    }




}
