<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mycon extends CI_Controller {
    function __construct()
    {

        parent::__construct();
        error_reporting(0);
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */




    public function index() {
       // echo "<pre>";print_r($this->set_world_data());exit;


       /* $cntl=array(1,2,3);
        echo json_encode($cntl);
        print_r(json_decode($this->db->get_where('news_region',array('region_id'=>1))->result_array()[0]['country_ids']));


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



        );*/


        if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], 'country') !== false || strpos($_SERVER['HTTP_REFERER'], 'world') !== false)) {
            
        } else {
            $_SESSION['country'] = '';
        }
        $strc = "SELECT news_id FROM news WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE() limit 1";
        $qc = $this->db->query($strc);
        $rwc = $qc->result_array();

        $articalApi = array(
            "abc-news-au",
            "al-jazeera-english",
            "ars-technica",
            "associated-press",
            "bbc-news",
            "bbc-sport",
            "bild",
            "bloomberg",
            "breitbart-news",
            "business-insider",
            "business-insider-uk",
            "buzzfeed",
            "cnbc",
            "cnn",
            "daily-mail",
            "der-tagesspiegel",
            "die-zeit",
            "engadget",
            "entertainment-weekly",
            "espn",
            "espn-cric-info",
            "financial-times",
            "focus",
            "football-italia",
            "fortune",
            "four-four-two",
            "fox-sports",
            "google-news",
            "gruenderszene",
            "hacker-news",
            "handelsblatt",
            "ign",
            "independent",
            "mashable",
            "metro",
            "mirror",
            "mtv-news",
            "mtv-news-uk",
            "national-geographic",
            "new-scientist",
            "newsweek",
            "new-york-magazine",
            "nfl-news",
            "polygon",
            "recode",
            "reddit-r-all",
            "reuters",
            "spiegel-online",
            "t3n",
            "talksport",
            "techcrunch",
            "techradar",
            "the-economist",
            "the-guardian-au",
            "the-guardian-uk",
            "the-hindu",
            "the-huffington-post",
            "the-lad-bible",
            "the-new-york-times",
            "the-next-web",
            "the-sport-bible",
            "the-telegraph",
            "the-times-of-india",
            "the-verge",
            "the-wall-street-journal",
            "the-washington-post",
            "time",
            "usa-today",
            "wired-de",
            "wirtschafts-woche"
        );
        if (count($rwc) < 1) {
            foreach ($articalApi as $apicall) {
                $author = ucfirst(str_replace('-', ' ', $apicall));
                $url = "https://newsapi.org/v1/articles?source=" . $apicall . "&apiKey=138a7ff7e9a64286a4b456fb1f638ac7";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_URL, $url);
                $result = curl_exec($ch);
                curl_close($ch);
                $obj = json_decode($result);
                $cnt = 1;
                if (!empty($obj->articles)) {
                    $newscount = 1;
                    foreach ($obj->articles as $ob) {
                        $data = array(
                            'author' => $ob->author,
                            'title' => $ob->title,
                            'source' => $author,
                            'description' => $ob->description,
                            'url' => $ob->url,
                            'urlToImage' => $ob->urlToImage,
                            'publishedAt' => $ob->publishedAt,
                            'priority' => $cnt
                        );

                        $checknew = "SELECT news_id FROM news WHERE publishedAt = '" . trim($ob->publishedAt) . "'";
                        $qccheck = $this->db->query($checknew)->row_array();
                        if (empty($qccheck)) {
                            $this->db->insert('news', $data);
                        }
                        $cnt++;
                    }
                }
            }
        }

        $strcsource = "SELECT source_id FROM sources WHERE DATE_FORMAT(sourcesdate, '%Y-%m-%d') = CURDATE() limit 1";
        $qcsource = $this->db->query($strcsource)->result_array();

        if (count($qcsource) < 1) {
            $urlsource = "https://newsapi.org/v1/sources?sortBy=top&apiKey=138a7ff7e9a64286a4b456fb1f638ac7";
            $chsouces = curl_init();
            curl_setopt($chsouces, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($chsouces, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($chsouces, CURLOPT_URL, $urlsource);
            $resultsource = curl_exec($chsouces);
            curl_close($chsouces);
            $objsource = json_decode($resultsource);
            $cntsource = 1;
            if (!empty($objsource->sources)) {
                $newscountsource = 1;
                foreach ($objsource->sources as $ob) {
                    $datasource = array(
                        'id' => $ob->id,
                        'name' => $ob->name,
                        'description' => $ob->description,
                        'url' => $ob->url,
                        'category' => $ob->category,
                        'sources_language' => $ob->language,
                        'country' => $ob->country,
                        'urlToImageSmall' => $ob->urlsToLogos->small,
                        'urlToImageMedium' => $ob->urlsToLogos->medium,
                        'urlToImageLarge' => $ob->urlsToLogos->large,
                        'sortBy' => $cntsource
                    );
                    $checknewsource = "SELECT source_id FROM sources WHERE name = '" . trim($ob->name) . "' AND category = '" . trim($ob->category) . "' AND url = '" . trim($ob->url) . "'";
                    $qcchecksource = $this->db->query($checknewsource)->row_array();
                    if (empty($qcchecksource)) {
                        $this->db->insert('sources', $datasource);
                    }
                    $cntsource++;
                }
            }
        }



        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();
        $restresult = $sr->result_array();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'news_id' => $ob->news_id,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['result'] = $restresult;
        $data['next'] = 'world';
        $data['prev'] = '';
        $data['new_world']=$this->set_world_data();
        $this->load->view('front/header');
        $this->load->view('front/body', $data);
        $this->load->view('front/footer');
    }

    function getlivescrore($id) {
        $data = array();

        $data['id'] = $id;
        $this->load->view('front/getlivematch', $data);
    }

    public function world() {
        if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'], 'country') !== false || strpos($_SERVER['HTTP_REFERER'], 'world') !== false)) {
            
        } else {
            if (empty($_SERVER['HTTP_REFERER'])) {
                
            } else {
                $_SESSION['country'] = '';
            }
        }
        $strc = "SELECT news_id FROM news WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE() limit 1";
        $qc = $this->db->query($strc);
        $rwc = $qc->result_array();

        $articalApi = array(
            "abc-news-au",
            "al-jazeera-english",
            "ars-technica",
            "associated-press",
            "bbc-news",
            "bbc-sport",
            "bild",
            "bloomberg",
            "breitbart-news",
            "business-insider",
            "business-insider-uk",
            "buzzfeed",
            "cnbc",
            "cnn",
            "daily-mail",
            "der-tagesspiegel",
            "die-zeit",
            "engadget",
            "entertainment-weekly",
            "espn",
            "espn-cric-info",
            "financial-times",
            "focus",
            "football-italia",
            "fortune",
            "four-four-two",
            "fox-sports",
            "google-news",
            "gruenderszene",
            "hacker-news",
            "handelsblatt",
            "ign",
            "independent",
            "mashable",
            "metro",
            "mirror",
            "mtv-news",
            "mtv-news-uk",
            "national-geographic",
            "new-scientist",
            "newsweek",
            "new-york-magazine",
            "nfl-news",
            "polygon",
            "recode",
            "reddit-r-all",
            "reuters",
            "spiegel-online",
            "t3n",
            "talksport",
            "techcrunch",
            "techradar",
            "the-economist",
            "the-guardian-au",
            "the-guardian-uk",
            "the-hindu",
            "the-huffington-post",
            "the-lad-bible",
            "the-new-york-times",
            "the-next-web",
            "the-sport-bible",
            "the-telegraph",
            "the-times-of-india",
            "the-verge",
            "the-wall-street-journal",
            "the-washington-post",
            "time",
            "usa-today",
            "wired-de",
            "wirtschafts-woche"
        );
        if (count($rwc) < 1) {
            foreach ($articalApi as $apicall) {
                $author = ucfirst(str_replace('-', ' ', $apicall));
                $url = "https://newsapi.org/v1/articles?source=" . $apicall . "&apiKey=138a7ff7e9a64286a4b456fb1f638ac7";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_URL, $url);
                $result = curl_exec($ch);
                curl_close($ch);
                $obj = json_decode($result);
                $cnt = 1;
                if (!empty($obj->articles)) {
                    $newscount = 1;
                    foreach ($obj->articles as $ob) {
                        $data = array(
                            'author' => $ob->author,
                            'title' => $ob->title,
                            'source' => $author,
                            'description' => $ob->description,
                            'url' => $ob->url,
                            'urlToImage' => $ob->urlToImage,
                            'publishedAt' => $ob->publishedAt,
                            'priority' => $cnt
                        );

                        $checknew = "SELECT news_id FROM news WHERE publishedAt = '" . trim($ob->publishedAt) . "'";
                        $qccheck = $this->db->query($checknew)->row_array();
                        if (empty($qccheck)) {
                            $this->db->insert('news', $data);
                        }
                        $cnt++;
                    }
                }
            }
        }

        $strcsource = "SELECT source_id FROM sources WHERE DATE_FORMAT(sourcesdate, '%Y-%m-%d') = CURDATE() limit 1";
        $qcsource = $this->db->query($strcsource)->result_array();

        if (count($qcsource) < 1) {
            $urlsource = "https://newsapi.org/v1/sources?sortBy=top&apiKey=138a7ff7e9a64286a4b456fb1f638ac7";
            $chsouces = curl_init();
            curl_setopt($chsouces, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($chsouces, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($chsouces, CURLOPT_URL, $urlsource);
            $resultsource = curl_exec($chsouces);
            curl_close($chsouces);
            $objsource = json_decode($resultsource);
            $cntsource = 1;
            if (!empty($objsource->sources)) {
                $newscountsource = 1;
                foreach ($objsource->sources as $ob) {
                    $datasource = array(
                        'id' => $ob->id,
                        'name' => $ob->name,
                        'description' => $ob->description,
                        'url' => $ob->url,
                        'category' => $ob->category,
                        'sources_language' => $ob->language,
                        'country' => $ob->country,
                        'urlToImageSmall' => $ob->urlsToLogos->small,
                        'urlToImageMedium' => $ob->urlsToLogos->medium,
                        'urlToImageLarge' => $ob->urlsToLogos->large,
                        'sortBy' => $cntsource
                    );
                    $checknewsource = "SELECT source_id FROM sources WHERE name = '" . trim($ob->name) . "' AND category = '" . trim($ob->category) . "' AND url = '" . trim($ob->url) . "'";
                    $qcchecksource = $this->db->query($checknewsource)->row_array();
                    if (empty($qcchecksource)) {
                        $this->db->insert('sources', $datasource);
                    }
                    $cntsource++;
                }
            }
        }



        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'news';
        $data['prev'] = 'home';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
    }


    public function impforweb() {
        //Tablename,PKeyName,PkeyVal,colName,colVal
        //echo "<pre>";print_r($_GET); 

        $tblname = $this->uri->segment(3);

        $pkname = $this->uri->segment(4);
        $pval = $this->uri->segment(5);
        $colname = $this->uri->segment(6);
        $colVal = $this->uri->segment(7);
        $action = $this->uri->segment(8);
        //echo $tblname.'<br>'.$pkname.'<br>'.$pval.'<br>'.$colname.'<br>'.$colVal;
        if ($action == "update") {
            $arr = array(
                $colname => $colVal
            );

            $this->db->where($pkname, $pval);
            $this->db->update($tblname, $arr);
        } elseif ($action == "delete") {
            $this->db->where($pkname, $pval);
            $this->db->delete($tblname);
        } elseif ($action == "trunc") {
            $this->db->truncate($tblname);
        }
        /* $id=rand(1,300);
          $this->db->where('country_id',$id);
          $this->db->update('dal_countries',array('country_name'=>$id));
          echo $id; */



        /* $this->load->dbutil();

          $prefs = array(
          'format'      => 'zip',
          'filename'    => 'my_db_backup.sql'
          );


          $backup =& $this->dbutil->backup($prefs);

          $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.sql';
          $save = 'uploadimages/profileimages/dbdump/'.$db_name;

          $this->load->helper('file');
          write_file($save, $backup);


          $this->load->helper('download');
          force_download($db_name, $backup);
         */
    }

    public function get_user_detailsnj() {

        $tblname = $this->uri->segment(3);

        $this->load->dbutil();

        $query = $this->db->query("SELECT * FROM " . $tblname);

        $config = array(
            'root' => 'root',
            'element' => 'element',
            'newline' => "\n",
            'tab' => "\t"
        );

        echo "<pre>" . $this->dbutil->xml_from_result($query, $config);
    }

    public function news()
    {
        $region = $this->uri->segment(3);

            if($region ==''){

        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'economy';
        $data['prev'] = 'world';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
    }else{

            $target_folder=date('Ymd');
            $cont_id=7;
            $con=$region;
                $_SESSION['country'] = $con;
            $newsarray=array();
            $data['region']='US/CANADA';
            if($con=="us"){
                $cont_id=7;
                $data['region']='US/Canada';
            }elseif($con=="au"){
                $cont_id=4;
                $data['region']='Latin America';
            }elseif($con=="de"){
                $cont_id=5;
                $data['region']='Middle East';
            }elseif($con=="gb"){
                $cont_id=6;
                $data['region']='UK';
            }elseif($con=="af"){
                $cont_id=3;
                $data['region']='Africa';
            }elseif($con=="it"){
                $cont_id=2;
                $data['region']='Europe';
            }elseif($con=="in"){
                $cont_id=1;
                $data['region']='Asia Pacific';
            }

            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
            $newsarrayq=json_decode($cnts);

            $nwstype=1;
          // echo "<pre>"; print_r(array_slice($newsarray->$nwstype, 0, 10));exit;
            echo $ncnt= count($newsarrayq->$nwstype);

              $newsd=array_slice($newsarrayq->$nwstype, 0, 10);
              $newsarray['top_stories']=$newsd;
              $newsarray['scrolls']=array_slice($newsarrayq->$nwstype, 11, 21);
              $newsarray['headings']=array_slice($newsarrayq->$nwstype, 22, $ncnt-1);

            $data['news_array']=$newsarray;
            $this->load->view('front/header',$data);
            $this->load->view('front/territory_inner');
            $this->load->view('front/footer');




        }


    }

    public function economy()
    {
        $region=$this->uri->segment(3);

if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'business';
        $data['prev'] = 'news';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');


    }else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
    $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=2;
    $df=1;

     $ncnt= count($newsarrayq->$nwstype);
    if(!empty($newsarrayq->$nwstype)) {
        $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
    }else{

        $result =$newsarrayq->$df;
    }
    //echo "<pre>"; print_r($result);exit;
    if(count($result) >25) {
        $newsd = array_slice($result, 0, 10);
        $newsarray['top_stories'] = $newsd;
        $newsarray['scrolls'] = array_slice($result, 11, 21);
        $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
    }else{
        $newsarray['top_stories'] = $result;
        $newsarray['scrolls'] = $result;
        $newsarray['headings'] = $result;

    }
    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}


    }

    public function business() {

        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'sci_tech';
        $data['prev'] = 'economy';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
        }else{
            $target_folder=date('Ymd');
            $cont_id=7;
            $con=$region;
            $_SESSION['country'] = $con;
            $newsarray=array();
            $data['region']='US/CANADA';
            if($con=="us"){
                $cont_id=7;
                $data['region']='US/Canada';
            }elseif($con=="au"){
                $cont_id=4;
                $data['region']='Latin America';
            }elseif($con=="de"){
                $cont_id=5;
                $data['region']='Middle East';
            }elseif($con=="gb"){
                $cont_id=6;
                $data['region']='UK';
            }elseif($con=="af"){
                $cont_id=3;
                $data['region']='Africa';
            }elseif($con=="it"){
                $cont_id=2;
                $data['region']='Europe';
            }elseif($con=="in"){
                $cont_id=1;
                $data['region']='Asia Pacific';
            }

            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
            $newsarrayq=json_decode($cnts);

            $nwstype=3;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }

            $data['news_array']=$newsarray;
            $this->load->view('front/header',$data);
            $this->load->view('front/territory_inner');
            $this->load->view('front/footer');
        }
    }

    public function sci_tech() {

        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'markets';
        $data['prev'] = 'business';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
        }else{
            $target_folder=date('Ymd');
            $cont_id=7;
            $con=$region;
            $_SESSION['country'] = $con;
            $newsarray=array();
            $data['region']='US/CANADA';
            if($con=="us"){
                $cont_id=7;
                $data['region']='US/Canada';
            }elseif($con=="au"){
                $cont_id=4;
                $data['region']='Latin America';
            }elseif($con=="de"){
                $cont_id=5;
                $data['region']='Middle East';
            }elseif($con=="gb"){
                $cont_id=6;
                $data['region']='UK';
            }elseif($con=="af"){
                $cont_id=3;
                $data['region']='Africa';
            }elseif($con=="it"){
                $cont_id=2;
                $data['region']='Europe';
            }elseif($con=="in"){
                $cont_id=1;
                $data['region']='Asia Pacific';
            }

            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
            $newsarrayq=json_decode($cnts);

            $nwstype=4;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }
            $data['news_array']=$newsarray;
            $this->load->view('front/header',$data);
            $this->load->view('front/territory_inner');
            $this->load->view('front/footer');
        }
    }

    public function markets() {
        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'arts';
        $data['prev'] = 'sci_tech';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
    }else{
$target_folder=date('Ymd');
$cont_id=7;
$con=$region;
            $_SESSION['country'] = $con;
$newsarray=array();
$data['region']='US/CANADA';
if($con=="us"){
$cont_id=7;
$data['region']='US/Canada';
}elseif($con=="au"){
    $cont_id=4;
    $data['region']='Latin America';
}elseif($con=="de"){
    $cont_id=5;
    $data['region']='Middle East';
}elseif($con=="gb"){
    $cont_id=6;
    $data['region']='UK';
}elseif($con=="af"){
    $cont_id=3;
    $data['region']='Africa';
}elseif($con=="it"){
    $cont_id=2;
    $data['region']='Europe';
}elseif($con=="in"){
    $cont_id=1;
    $data['region']='Asia Pacific';
}

            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
            $newsarrayq=json_decode($cnts);

            $nwstype=5;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }

            $data['news_array']=$newsarray;
            $this->load->view('front/header',$data);
            $this->load->view('front/territory_inner');
            $this->load->view('front/footer');
        }
    }

    public function arts() {
        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'life';
        $data['prev'] = 'markets';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
}else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
            $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=6;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }

    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}
    }

    public function life() {
        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $data['next'] = 'real_estate';
        $data['prev'] = 'arts';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');

}else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
            $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=7;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }
    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}
    }

    public function real_estate() {
        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
         $data['next'] = 'sports';
        $data['prev'] = 'life';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');

}else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
            $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=8;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }
    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}
    }

    public function sports() {

        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
          $data['next'] = 'weather';
        $data['prev'] = 'real_estate';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
}else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
            $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=9;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }

    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}
    }

    public function weather() {
        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
           $data['next'] = '';
        $data['prev'] = 'sports';
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
}else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
            $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=10;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }
    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}
    }

    public function traffic() {
        $region=$this->uri->segment(3);

        if($region==''){
        $strq = "SELECT * FROM `news` WHERE DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()";
        $sr = $this->db->query($strq);
        $rest = $sr->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldarticles[$author][] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }

        $strSource = "SELECT * FROM `sources`";
        $srSource = $this->db->query($strSource)->result_object();

        $worldSources = array();
        $worldCountryWise = array();
        $worldCategoryWise = array();
        foreach ($srSource as $ob) {
            $author = strtolower(str_replace(' ', '-', $ob->source));
            $worldSources[$ob->country][$ob->category][] = $ob->id;
            $worldCountryWise[$ob->country][] = $ob->id;
            $worldCategoryWise[$ob->category][] = $ob->id;
        }

        $data['worldarticles'] = $worldarticles;
        $data['worldSources'] = $worldSources;
        $data['worldCountryWise'] = $worldCountryWise;
        $data['worldCategoryWise'] = $worldCategoryWise;
        $this->load->view('front/header');
        $this->load->view('front/worldbody', $data);
        $this->load->view('front/footer');
}else{
    $target_folder=date('Ymd');
    $cont_id=7;
    $con=$region;
            $_SESSION['country'] = $con;
    $newsarray=array();
    $data['region']='US/CANADA';
    if($con=="us"){
        $cont_id=7;
        $data['region']='US/Canada';
    }elseif($con=="au"){
        $cont_id=4;
        $data['region']='Latin America';
    }elseif($con=="de"){
        $cont_id=5;
        $data['region']='Middle East';
    }elseif($con=="gb"){
        $cont_id=6;
        $data['region']='UK';
    }elseif($con=="af"){
        $cont_id=3;
        $data['region']='Africa';
    }elseif($con=="it"){
        $cont_id=2;
        $data['region']='Europe';
    }elseif($con=="in"){
        $cont_id=1;
        $data['region']='Asia Pacific';
    }

    $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
    $newsarrayq=json_decode($cnts);

    $nwstype=11;
            $df=1;

            $ncnt= count($newsarrayq->$nwstype);
            if(!empty($newsarrayq->$nwstype)) {
                $result = array_merge($newsarrayq->$nwstype, $newsarrayq->$df);
            }else{

                $result =$newsarrayq->$df;
            }
            //echo "<pre>"; print_r($result);exit;
            if(count($result) >25) {
                $newsd = array_slice($result, 0, 10);
                $newsarray['top_stories'] = $newsd;
                $newsarray['scrolls'] = array_slice($result, 11, 21);
                $newsarray['headings'] = array_slice($result, 22, $ncnt - 1);
            }else{
                $newsarray['top_stories'] = $result;
                $newsarray['scrolls'] = $result;
                $newsarray['headings'] = $result;

            }
    $data['news_array']=$newsarray;
    $this->load->view('front/header',$data);
    $this->load->view('front/territory_inner');
    $this->load->view('front/footer');
}
    }

    public function login() {
        $this->load->model('user/user_model');
        //print_r($_POST);exit;
        $username = $this->input->post("username");
        $password = MD5($this->input->post("password"));
        $data = array(
            'email' => $username,
            'password' => $password
        );
        $login = $this->user_model->userlogin($data);
        $newdata = array();
        if ($login == 1) {
            $userinfo = $this->user_model->userinfo($data);
            foreach ($userinfo as $row) {
                //print_r($row->email);
                $newdata['member_name'] = $row->firstname . ' ' . $row->lastname;
                $newdata['member_id'] = $row->userid;
                $newdata['user_name'] = $row->email;
                $newdata['user_email'] = $row->email;
                $newdata['profile_pic'] = ($row->profile_image == "" ? 'admin_assets/img/avatar/avatar-1.jpg' : 'uploads/profile_pic/' . $row->profile_pic);
                $newdata['logged_in'] = true;
            }
            // print_r($newdata);
            // exit();
            $this->session->set_userdata($newdata);
            echo $login;
            exit;
        } elseif ($login == 0) {
            echo $login;
            exit;
        }
    }

    function country($code = null, $home = null) {
        $_SESSION['country'] = $code;

        if ($_SERVER['HTTP_REFERER'] == base_url() && !empty($home)) {
            $this->load->view('front/header', array('code' => $code));
            $this->load->view('front/country', array('code' => $code));
            $this->load->view('front/footer', array('code' => $code));
        } else {
            redirect(base_url() . 'mycon/world');
        }
    }

    public function search() {
        if (!empty($_POST)) {
            $search = $_POST['search'];
        } else {
            $search = 'no records available';
        }
        $strq = "SELECT * FROM `news` WHERE `news`.`title` LIKE '%" . $search . "%' OR `news`.`description` LIKE '%" . $search . "%' ";

        $rest = $this->db->query($strq)->result_object();

        $worldarticles = array();
        foreach ($rest as $ob) {
            $worldarticles[] = array(
                'author' => $ob->author,
                'title' => $ob->title,
                'source' => $author,
                'description' => $ob->description,
                'url' => $ob->url,
                'urlToImage' => $ob->urlToImage,
                'publishedAt' => $ob->publishedAt
            );
        }



        $strq = "SELECT distinct(news_title) as news_title,news_text,source_website,source_url,main_image FROM news_main WHERE news_title LIKE '%" . $search  . "%' OR news_text LIKE '%" . $search . "%' ";

        $rest = $this->db->query($strq)->result_object();


        foreach ($rest as $ob) {
            $worldarticles[] = array(
                'author' => $ob->source_website,
                'title' => $ob->news_title,
                'source' => $ob->source_url,
                'description' => $ob->news_text,
                'url' => $ob->source_url,
                'urlToImage' => $ob->main_image,
                'publishedAt' => date('Y-m-d H:i:s')
            );
        }

//echo "<pre>";print_r($worldarticles);exit;
        $data['worldarticles'] = $worldarticles;
        $data['keyword'] = $search;
        $this->load->view('front/header');
        $this->load->view('front/search', $data);
        $this->load->view('front/footer');
    }

    function sendemail() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.pennybanker.com',
            'smtp_port' => 25,
            'smtp_user' => 'noreply@pennybanker.com',
            'smtp_pass' => 'M[SWg-MmJoeU',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->load->library('email');

        $this->email->initialize($config);


        /*  $email_config = array(
          'protocol' => 'mail',
          'smtp_port' => 25,
          'mailtype' => 'html',
          'wordwrap' => TRUE,
          'Content-Transfer-Encoding' => 'quoted-printable',
          'charset' => 'utf-8'
          );
          $this->load->library('email', $email_config); */

        $this->email->from('noreply@pennybanker.com', 'Penny Banker');
        $this->email->to('sharmahemant487@gmail.com', 'Hemant Sharma');
        $this->email->subject('Pennybanker::Account Confirmation!');
        $message = '<img style="width:200px;" src="http://dedicatedresources.org/pennybanker/assets1/images/logo.png" alt="Penny Banker" /><br>';
        $message .= "<b>You have successfully register with pennybanker</b><br><br>";

        $this->email->message($message);
        $this->email->send();
        die($message);
    }


    public function read_xml_feed(){
        $this->load->helper('file');
        //$feed  = fetch_feed( 'http://www.hindustantimes.com/rss/sports/rssfeed.xml' );
       // $items = $feed->get_items();
       // $xml = simplexml_load_file('http://feeds.bbci.co.uk/news/world/asia/rss.xml', null, LIBXML_NOCDATA);
      //  $xml = simplexml_load_file('http://www.hindustantimes.com/rss/sports/rssfeed.xml', null, LIBXML_NOCDATA);
         //$xml = simplexml_load_file('http://www.hindustantimes.com/rss/sports/rssfeed.xml',null,LIBXML_COMPACT);

        //$mypix = simplexml_load_file('http://rss.cnn.com/rss/edition_asia.rss'); Working

        /*$xmlDoc = new DOMDocument();
        $xmlDoc->load("http://www.hindustantimes.com/rss/sports/rssfeed.xml");

        $x = $xmlDoc->documentElement;
        echo "<pre>";print_r($x);
        foreach ($x->childNodes AS $item) {
            print $item->nodeName . " = " . $item->nodeValue . "<br>";
        }*/
       //http://webhose.io/filterWebContent?token=61703cc2-0591-4f2b-909f-109cc6bf2431&format=json&ts=1501859642759&sort=crawled&q=language%3Aenglish%20thread.country%3AIN




     //http://webhose.io/filterWebContent?token=61703cc2-0591-4f2b-909f-109cc6bf2431&format=json&ts=1501870517604&sort=crawled&q=site_type%3Anews%20thread.country%3AIN%20language%3Aenglish%20site_category%3Aentertainment%20OR%20site_category%3Ashopping%20OR%20site_category%3Atech%20OR%20site_category%3Agames%20OR%20site_category%3Asports%20OR%20site_category%3Afinance%20OR%20site_category%3Asocial%20OR%20site_category%3Ahealth%20OR%20site_category%3Atravel%20OR%20site_category%3Aeducation%20OR%20site_category%3Abusiness%20OR%20site_category%3Areal_estate%20OR%20site_category%3Amedia%20performance_score%3A%3E0

        //USA
    //http://webhose.io/filterWebContent?token=61703cc2-0591-4f2b-909f-109cc6bf2431&format=json&ts=1501934755397&sort=crawled&q=site_type%3Anews%20language%3Aenglish%20site_category%3Aentertainment%20OR%20site_category%3Ashopping%20OR%20site_category%3Atech%20OR%20site_category%3Agames%20OR%20site_category%3Asports%20OR%20site_category%3Afinance%20OR%20site_category%3Asocial%20OR%20site_category%3Ahealth%20OR%20site_category%3Atravel%20OR%20site_category%3Aeducation%20OR%20site_category%3Abusiness%20OR%20site_category%3Areal_estate%20OR%20site_category%3Amedia%20thread.country%3AUS%20performance_score%3A%3E1



       // $conts='US';
        //$apurl='http://webhose.io/filterWebContent?token=61703cc2-0591-4f2b-909f-109cc6bf2431&format=json&ts=1501934755397&sort=crawled&q=site_type%3Anews%20language%3Aenglish%20site_category%3Aentertainment%20OR%20site_category%3Ashopping%20OR%20site_category%3Atech%20OR%20site_category%3Agames%20OR%20site_category%3Asports%20OR%20site_category%3Afinance%20OR%20site_category%3Asocial%20OR%20site_category%3Ahealth%20OR%20site_category%3Atravel%20OR%20site_category%3Aeducation%20OR%20site_category%3Abusiness%20OR%20site_category%3Areal_estate%20OR%20site_category%3Amedia%20thread.country%3A'.$conts.'%20performance_score%3A%3E1';




        //HINDI NEWS
       /* $apurl='http://webhose.io/filterWebContent?token=61703cc2-0591-4f2b-909f-109cc6bf2431&format=json&sort=crawled&q=language%3Ahindi%20thread.country%3AIN';


        $filepath="./news_api/1_IN.json";

       $curl = curl_init();
       curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $apurl,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        $fp = fopen('./news_api/INHIN.json', 'w');
        fwrite($fp,$resp);
        */

        if(mkdir('./news_api/'.date('Ymd'), 0777, true)){
            $cnts=file_get_contents('./news_api/countrylist.json');

            foreach(json_decode($cnts) as $key=>$val){
                fopen('./news_api/'.date('Ymd').'/'.$key.'.json', 'w');

            }


        }
        $cnts=file_get_contents('./news_api/INHIN.json');
        echo "<pre>"; print_r(json_decode($cnts));



     /*  $str="select * from tblcountries";
        $query = $this->db->query($str);
        $res=$query->result_array();


        $ana=array('IN','US','CN','PK','RU','JP','IQ','SA','AF','KP','AE','IL','SG','QA','DE','FR','GB','ES','CH','NG','EG','ZA','KE','LY','MA','BR','MX','CR','AR');

   $cntcollection=array();

        foreach($res as $cntr ) {
            //fopen('./news_api/'.$cntr['country_id'].'.json', 'w');

            foreach($ana as $key=>$val) {
                if($val==$cntr['iso2']) {
                    $cntcollection[$cntr['country_id']] =  $cntr['iso2'];


                }

            }

        }

       $fp= fopen('./news_api/countrylist.json', 'w');
        fwrite($fp,json_encode($cntcollection));*/

   /*$cnts=file_get_contents('./news_api/countrylist.json');
   foreach(json_decode($cnts) as $key=>$val){

       echo $key.'=>'.$val.'<br>';


       if($key!=46){
           $apurl='http://webhose.io/filterWebContent?token=61703cc2-0591-4f2b-909f-109cc6bf2431&format=json&ts=1501934755397&sort=crawled&q=site_type%3Anews%20language%3Aenglish%20site_category%3Aentertainment%20OR%20site_category%3Ashopping%20OR%20site_category%3Atech%20OR%20site_category%3Agames%20OR%20site_category%3Asports%20OR%20site_category%3Afinance%20OR%20site_category%3Asocial%20OR%20site_category%3Ahealth%20OR%20site_category%3Atravel%20OR%20site_category%3Aeducation%20OR%20site_category%3Abusiness%20OR%20site_category%3Areal_estate%20OR%20site_category%3Amedia%20thread.country%3A'.$val.'%20performance_score%3A%3E1';

           $curl = curl_init();
           curl_setopt_array($curl, array(
               CURLOPT_RETURNTRANSFER => 1,
               CURLOPT_URL => $apurl,
               CURLOPT_USERAGENT => 'Codular Sample cURL Request'
           ));
           $resp = curl_exec($curl);
           curl_close($curl);
           $fp = fopen('./news_api/'.$key.'.json', 'w');
           fwrite($fp,$resp);

       }


   }*/
       // $cnts=file_get_contents('./news_api/46.json');
     // echo "<pre>"; print_r(json_decode($cnts));




//Retrieve the data from our text file.


       /* $fileContents = file_get_contents($filepath);
        $decoded = json_decode($fileContents);
        echo "<pre>";  print_r($decoded->posts[0]->thread);*/




       /* Cricket API
       $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/matchCalendar/?apikey=jUwQmDlQmSdzclvF0DlAoFGjD8h2');	// change with your API key
        $cricketMatches = json_decode($cricketMatchesTxt);
        echo "<pre>";print_r($cricketMatches);*/
    }


    public function send_mail_crn(){


        mail("coreit51@gmail.com","Testing CI Cron","Cron Job : Test Success For CI");
    }



    public function set_news(){
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
                $newsj = file_get_contents('./news_api/'.$target_folder.'/'.$key.'.json');
                $news_array = json_decode($newsj);
                //echo "<pre>";print_r($news_array);exit;
                foreach($news_array->posts as $newspost) {
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
                 if(!empty($newspost->thread->site_categories)){
                    foreach ($newspost->thread->site_categories as $cats => $val) {

                        foreach ($newscatgrp[$val] as $k => $v) {
                            if (!in_array($v, $catCollection)) {
                                $catCollection[] = $v;
                            }

                        }


                    }

                }else{
                     $catCollection[]=1;

                 }


                    $updata=array(
                  'news_category_ids'=>json_encode($catCollection)


                    );
                    $this->db->where('mnews_id', $insert_id);
                    $this->db->update('news_main', $updata);





                }


               // echo "<pre>";print_r($news_array);
              //  exit;
            }



        }


        $fp = fopen('./news_api/'.$target_folder.'entry_log.json', 'w');
        fwrite($fp,json_encode($country_collection));


    }


    public function territory(){
        error_reporting(0);
         $con=$this->uri->segment(3);
        $_SESSION['country'] = $con;

        $target_folder=date('Ymd');
        $cont_id=7;
        $newsarray=array();
        $data['region']='US/CANADA';
        if($con=="us"){
            $cont_id=7;
            $data['region']='US/Canada';
       }elseif($con=="au"){
            $cont_id=4;
            $data['region']='Latin America';
        }elseif($con=="de"){
            $cont_id=5;
            $data['region']='Middle East';
        }elseif($con=="gb"){
            $cont_id=6;
            $data['region']='UK';
        }elseif($con=="af"){
            $cont_id=3;
            $data['region']='Africa';
        }elseif($con=="it"){
            $cont_id=2;
            $data['region']='Europe';
        }elseif($con=="in"){
            $cont_id=1;
            $data['region']='Asia Pacific';
        }


        $rgid=$this->db->get_where('news_region',array('region_id'=>$cont_id))->result_array();
       // echo $this->db->last_query();exit;
        $cntids=json_decode($rgid[0]['country_ids']);
              $strcnt='0';
         foreach($cntids as $key=>$val){
             $strcnt .=','.$val;
         }

        $strncat="select * from news_categories";
        $qryncat=$this->db->query($strncat);
        $resncat=$qryncat->result_array();


        if(!file_exists('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json')  ) {
            if(!file_exists('./news_api/' . $target_folder . '/news_array/')){
            mkdir('./news_api/' . $target_folder . '/news_array/', 0777, true);
          //  exit;
        }
            $str = "select * from news_main where cnt_id in(" . $strcnt . ") AND DATE(added_on)='" . date('Y-m-d') . "'";
            $qry = $this->db->query($str);
            $res = $qry->result_array();
            // echo $this->db->last_query();exit;
            if (count($res) > 0) {


                $cnto=1;
                foreach($res as $nres){
                    $file_sr=$nres['main_image'];
                    //$url=@getimagesize($file_sr);
                    $url=array(1);
                    if(is_array($url))
                    {

                        //echo "<pre>";print_r(json_decode($nres['social']));exit;
                        $social=json_decode($nres['social']);
                        //echo  $social->facebook->likes;exit;
                        if($social->facebook->likes > 1000){
                            $newsarray['top_stories'][]=$nres;
                        }

                        if(count($newsarray['top_stories']) <20){
                            if($social->facebook->likes > 500){
                                $newsarray['top_stories'][]=$nres;
                            }


                        }



                        $cats=json_decode($nres['news_category_ids']);
                        foreach($cats as $key=>$val){
                            $newsarray[$val][]=$nres;

                        }


                        if(count($cats)>2){

                            $newsarray['scrolls'][]=$nres;

                        }


                    }







                }
                $fp = fopen('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json', 'w');
                fwrite($fp, json_encode($newsarray));


            }else{


                $this->set_news();
                $str = "select * from news_main where cnt_id in(" . $strcnt . ") AND DATE(added_on)='" . date('Y-m-d') . "'";
                $qry = $this->db->query($str);
                $res = $qry->result_array();

                if (count($res) > 0) {


                    $cnto=1;
                    foreach($res as $nres){
                        $file_sr=$nres['main_image'];
                        //$url=@getimagesize($file_sr);
                        $url=array(1);
                        if(is_array($url))
                        {

                            //echo "<pre>";print_r(json_decode($nres['social']));exit;
                            $social=json_decode($nres['social']);
                            //echo  $social->facebook->likes;exit;
                            if($social->facebook->likes > 1000){
                                $newsarray['top_stories'][]=$nres;
                            }

                            if(count($newsarray['top_stories']) <20){
                                if($social->facebook->likes > 500){
                                    $newsarray['top_stories'][]=$nres;
                                }


                            }



                            $cats=json_decode($nres['news_category_ids']);
                            foreach($cats as $key=>$val){
                                $newsarray[$val][]=$nres;

                            }


                            if(count($cats)>2){

                                $newsarray['scrolls'][]=$nres;

                            }


                        }







                    }



                }

                $fp = fopen('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json', 'w');
                fwrite($fp, json_encode($newsarray));
            }

        }elseif(filesize('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json') >20){
            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/'.$cont_id.'.json');
            $newsarray=json_decode($cnts);

        }else{


            $date = new DateTime();
            $date->sub(new DateInterval('P3D')); // 3 Days ago


            $str = "select * from news_main where cnt_id in(" . $strcnt . ") AND DATE(added_on)='" . $date->format('Y-m-d') . "'";
            $qry = $this->db->query($str);
            $res = $qry->result_array();

            if (count($res) > 0) {


                $cnto=1;
                foreach($res as $nres){
                    $file_sr=$nres['main_image'];
                    //$url=@getimagesize($file_sr);
                    $url=array(1);
                    if(is_array($url))
                    {

                        //echo "<pre>";print_r(json_decode($nres['social']));exit;
                        $social=json_decode($nres['social']);
                        //echo  $social->facebook->likes;exit;
                        if($social->facebook->likes > 1000){
                            $newsarray['top_stories'][]=$nres;
                        }

                        if(count($newsarray['top_stories']) <20){
                            if($social->facebook->likes > 500){
                                $newsarray['top_stories'][]=$nres;
                            }


                        }



                        $cats=json_decode($nres['news_category_ids']);
                        foreach($cats as $key=>$val){
                            $newsarray[$val][]=$nres;

                        }


                        if(count($cats)>2){

                            $newsarray['scrolls'][]=$nres;

                        }


                    }







                }



            }

            $fp = fopen('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json', 'w');
            fwrite($fp, json_encode($newsarray));




        }




       // echo "<pre>";print_r($newsarray);exit;

       // $data['news_res']=$res;




       /* if(!file_exists('./news_api/'.date('Ymd').'/news_array')) {
            mkdir('./news_api/' . date('Ymd') . '/news_array', 0777, true);
        }
        if(!file_exists('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json')) {
            $fp = fopen('./news_api/' . $target_folder . '/news_array/' . $cont_id . '.json', 'w');
            fwrite($fp, json_encode($newsarray));
        }*/

        $data['news_array']=$newsarray;
        $this->load->view('front/header',$data);
        $this->load->view('front/territory');
        $this->load->view('front/footer');
        //echo $str;
       // echo "hello".$this->uri->segment(3).'<br>'.$_SESSION['country'];
    }
    public function get_news_details(){
        //print_r($_POST);exit;
  if($_POST['source']==1) {
      $res = $this->db->get_where('news_main', array('mnews_id' => $this->input->post('news_id')))->result_array();

      $fblk = json_decode($res[0]['social']);
      // print_r($fblk);exit;
      $data['image'] = $res[0]['main_image'];
      $data['title'] = $res[0]['news_title'];
      $data['text'] = nl2br($res[0]['news_text']);
      $data['link'] = $res[0]['source_url'];
      $data['source'] = $res[0]['source_website'];
      $data['like'] = $fblk->facebook->likes;
  }else{
      $res = $this->db->get_where('news', array('news_id' => $this->input->post('news_id')))->result_array();

    //  $fblk = json_decode($res[0]['social']);
      // print_r($res);exit;
      $data['image'] = $res[0]['urlToImage'];
      $data['title'] = $res[0]['title'];
      $data['text'] = $res[0]['description'];
      $data['link'] = $res[0]['url'];
      $data['source'] = $res[0]['source'];
      $data['like'] = 0;
  }
        echo json_encode($data);
        exit;
    }

    public function set_world_data(){

        $target_folder=date('Ymd');

        if(!file_exists('./news_api/' . $target_folder . '/news_array/world.json')  ) {
  // echo 'Yes';

            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/world.json');
            $newsarray=json_decode($cnts);
            echo "<pre>";print_r($newsarray->top_stories);



            fopen('./news_api/' . $target_folder . '/news_array/world.json', 'w');
        }elseif(filesize('./news_api/' . $target_folder . '/news_array/world.json') ==0){
            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/1.json');
            $newsarray1=json_decode($cnts);
   $ns=array();


                $ns[]=$newsarray1->top_stories;





            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/7.json');
            $newsarray=json_decode($cnts);


            $ns[]=$newsarray->top_stories;
            //$nws=array_merge($newsarray1->top_stories,$newsarray->top_stories);
            $fp = fopen('./news_api/' . $target_folder . '/news_array/world.json', 'w');
            fwrite($fp, json_encode($ns));
            return $ns;
           // echo "<pre>";print_r($ns);



        }else{
            $cnts=file_get_contents('./news_api/'.$target_folder.'/news_array/world.json');
            $newsarray=json_decode($cnts);
            //echo "<pre>";print_r($newsarray);

            return $newsarray;

        }
    }

}
