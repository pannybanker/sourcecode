<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mycon extends CI_Controller {

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

    public function news() {
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
    }

    public function economy() {
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
    }

    public function business() {
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
    }

    public function sci_tech() {
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
    }

    public function markets() {
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
    }

    public function arts() {
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
    }

    public function life() {
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
    }

    public function real_estate() {
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
    }

    public function sports() {
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
    }

    public function weather() {
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
    }

    public function traffic() {
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

 public function send_mail_crn(){


        mail("coreit51@gmail.com","Testing CI Cron","Cron Job : Test Success For CI");
    }

}
