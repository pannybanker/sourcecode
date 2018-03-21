<?php

class World_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();

    }


    function get_world_news($category = "")
    {


        $str = "select * from news_main where DATE(added_on)=CURDATE() AND cnt_id=0 AND news_category_ids='" . $category . "'";
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

                    if (count($newsarray['top_stories']) < 20) {
                        if ($social->facebook->likes > 10) {
                            $newsarray['top_stories'][] = $nres;
                        }


                    }


                    $newsarray['scrolls'][] = $nres;


                }


            }

            $fp = fopen('./news_api/' . date('Ymd') . '/news_array/' . $category . '.json', 'w');
            fwrite($fp, json_encode($newsarray));
        }else{

            return $res=$this->set_blank_news($category);

        }





    }



    function set_blank_news($category=""){
        $newsj = file_get_contents('./news_api/'.date('Ymd').'/world.json');
        $news_array = json_decode($newsj);

        foreach($news_array->$category->posts as $newspost) {
            $insert_data = array(
                'source_url' => $newspost->thread->url,
                'source_website' => $newspost->thread->site,
                'news_title' => $newspost->title,
                'news_text' => $newspost->text,
                'main_image' => $newspost->thread->main_image,
                'social' => json_encode($newspost->thread->social),
                'search_tags' => json_encode($newspost->entities),
                'cnt_id' => 0,
                'news_category_ids' => $category


            );


            $this->db->insert('news_main', $insert_data);
            $insert_id = $this->db->insert_id();


            $insert_data = array(
                'source_url' => $newspost->thread->url,
                'source_website' => $newspost->thread->site,
                'news_title' => $newspost->title,
                'news_text' => $newspost->text,
                'main_image' => $newspost->thread->main_image,
                'social' => json_encode($newspost->thread->social),
                'search_tags' => json_encode($newspost->entities),
                'cnt_id' => 0,
                'news_category_ids' => $category,
                'mnews_id'=>$insert_id


            );



            $social = $newspost->thread->social;
            //echo  $social->facebook->likes;exit;
            if ($social->facebook->likes > 1000) {
                $newsarray['top_stories'][] = $insert_data;
            }

            if (count($newsarray['top_stories']) < 20) {
                if ($social->facebook->likes > 500) {
                    $newsarray['top_stories'][] = $insert_data;
                }


            }

            if (count($newsarray['top_stories']) < 20) {
                if ($social->facebook->likes > 10) {
                    $newsarray['top_stories'][] = $insert_data;
                }


            }
            $newsarray['scrolls'][] = $insert_data;






        }


        $fp = fopen('./news_api/' . date('Ymd') . '/news_array/' . $category . '.json', 'w');
        fwrite($fp, json_encode($newsarray));
        return $newsarray;

    }


    function get_world_category_data($category)
    {
        $target_folder = date('Ymd');
        if (file_exists('./news_api/' . $target_folder . '/news_array/' . $category . '.json') && filesize('./news_api/' . $target_folder . '/news_array/' . $category . '.json') >20) {
         //echo 'exist';
            $cnts = file_get_contents('./news_api/' . $target_folder . '/news_array/' . $category . '.json');
            return $newsarray = json_decode($cnts);

        } else {
           // echo 'not';
            return $newsarray=  $this->get_world_news($category);
           // $cnts = file_get_contents('./news_api/' . $target_folder . '/news_array/' . $category . '.json');
            //return $newsarray = json_decode($cnts);

        }


    }

}

/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */
?>