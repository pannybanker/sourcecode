<style>
    .featured_posts .post .featured-img.featured-img-big, .inner-page-bannerHolder .inner-banner, .inner-page-bannerHolder .inner-banner img, .banner-top-story {
    height: auto !important;
}
</style>

<style>
    .gameBox{max-width:100%}
</style>
<?php
$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/matches/?apikey=qXprqu6LurerVQZ8p7gk3AZCuFS2'); // change with your API key
$cricketMatches = json_decode($cricketMatchesTxt);
?>
<script>
    function showTeams(unique_id) {
        $('.showtiming').load('<?php echo base_url(); ?>mycon/getlivescrore/' + unique_id)
    }
</script>
<?php //print_r($news_array); ?>
<div class="container">    
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-2 world-bg"> 
        </section>
    </div>
</div>
<div class="container">    
    <div class="parent no-gutters">        
        <section class="col-xs-12 col-sm-12 col-md-2 world-bg hide" style="background: none!important;">
            <article class="row no-gutters">   
                <?php if (!empty($cricketMatches->matches)) { ?>
                    <div class="col-xs-12 select-team">      
                        <div id="dd" class="wrapper-dropdown-2 life-bg white-color" tabindex="1">Team
                            <ul class="dropdown life-bg">   
                                <?php foreach ($cricketMatches->matches as $item) { ?>
                                    <?php if ($item->matchStarted == true) { ?>
                                        <li><a href="javascript:void(0)" onClick="showTeams(<?php echo $item->unique_id; ?>)" class="white-color"><?php echo ($item->{'team-2'}); ?></a></li>  
                                        <li><a href="javascript:void(0)" onClick="showTeams(<?php echo $item->unique_id; ?>)" class="white-color"><?php echo ($item->{'team-1'}); ?></a></li>  
                                    <?php } ?>
                                <?php } ?>

                            </ul>                   
                        </div>         
                    </div> 
                <?php } ?>
                <div class="col-xs-12">         
                    <div class="league scores">  
                        <div class="gameBox showtiming">    


                        </div>                   
                    </div>              
                </div>          
            </article>      
        </section>     


        <section class="col-xs-12 col-sm-12 col-md-12 white-bg">
            <?php
            $kk=1;
           //echo "<pre>"; print_r($news_array);

            if (!empty($news_array['top_stories'])) { ?>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <article class="row inner-page-bannerHolder no-gutters">
                        <?php $i = 1; ?>

                        <?php
                        $sr = shuffle($news_array['top_stories']);
                        $j=0;
                        foreach ($news_array['top_stories'] as $value) {


                            ?>
                            <?php

                            if ($j==0) {

                                $headers = get_headers($value->main_image);
                                if (!empty($headers)) {
                                    if (!in_array('Server: cloudflare-nginx', $headers)) {
                                        $j=1;

                                        ?>
                                        <div class="col-sm-8 no-padding">
                                            <div class="inner-banner">
                                                <img src="<?php echo $value->main_image; ?>" id="img_topn"
                                                     class="img-responsive">
                                                <div class="banner-ticket life-bg">News</div>
                                                <?php


                                                ?>
                                                <div class="featured_posts_content">
                                                    <a href="#"><h3><?php echo $value->news_title; ?></h3>
                                                    </a>
                                                    <ul class="post_meta nav nav-pills">
                                                        <li><a href="#"
                                                               target="_blank"><?php echo $value->published_on; ?></a>
                                                        </li>
                                                        <li><a href="#"  onclick="get_new_details(<?php echo $value->mnews_id; ?>,1)" data-toggle="modal" data-target="#product_view"
                                                               target="_blank"><i
                                                                    class="fa fa-thumbs-o-up"></i> Read
                                                                Story</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }
                            }
                            /*     $external_link ='http://www.nation.co.ke/image/view/-/4047872/medRes/1723086/-/136sx84z/-/UHUPIC.jpg';
                             if (@getimagesize($external_link)) {
                                 echo  "img exist";print_r(@getimagesize($external_link));

                                 echo '<img src="'.$external_link.'" >';
                             } else {
                                 echo  "not exist";
                             }*/

                            ?>




                            <?php $i++; ?>
                            <?php


                        } ?>

                        <div class="col-sm-4 no-padding">
                            <div class="banner-top-story white-color">
                                <h4>Top Stories</h4>
                                <ul>
                                    <?php
                                    $cni=0;
                                    foreach ($news_array['top_stories'] as $value) {
                                        if ($cni < 10) {
                                            ?>


                                            <li><a href="#"  onclick="get_new_details(<?php echo $value->mnews_id; ?>,1)" data-toggle="modal" data-target="#product_view"
                                                   target="_blank"><?php echo $value->news_title; ?></a></li>

                                        <?php }
                                        $cni++;
                                    }

                                    ?>

                                </ul>

                            </div>
                        </div>


                    </article>
                </div>
            <?php } ?>
            <div class="col-xs-12 col-sm-12 col-md-8 no-padding">
                <?php if (!empty($news_array['scrolls'])) {
                    //echo "<pre>";print_r($news_array['scrolls']);
                    $sr= shuffle($news_array['scrolls']);
                    ?>
                    <article class="inner-video-sliderHolder">  
                        <div class="inner-video-slider owl-carousel">  
                            <div class="item">  
                                <?php $i = 1; ?>
                                <?php foreach ($news_array['scrolls'] as  $value) { ?>

                                    <?php if (!empty($value->main_image) || $value->main_image !='') { ?>

                                        <?php if ($i == 1) { ?>
                                            <div class="col-sm-6 video-img no-padding"> 
                                                <h3 class="headlinetitle">
                                                    <a href="#"  onclick="get_new_details(<?php echo $value->mnews_id; ?>)" data-toggle="modal" data-target="#product_view"><?php echo $value->news_title; ?></a></h3>
                                                <img src="<?php echo $value->main_image; ?>" class="img-responsive" style="height:200px;">
                                                <span class="video-icon hide"><a href="<?php echo $value->url; ?>" target="_blank"><i class="fa fa-play"></i></a></span>
                                                <span class="js-asset-section world-bg white-color"> <?php echo $region; ?> </span>
                                            </div>    
                                        <?php } ?>
                                        <?php if ($i == 2 ) { ?>
                                            <?php $i = 0; ?>
                                            <div class="col-sm-6 video-img no-padding"> 
                                                <h3 class="headlinetitle">
                                                    <a href="#"  onclick="get_new_details(<?php echo $value->mnews_id; ?>,1)" data-toggle="modal" data-target="#product_view"><?php echo $value->news_title; ?></a></h3>
                                                <img src="<?php echo $value->main_image; ?>" class="img-responsive" style="height:200px;">
                                                <span class="video-icon hide"><a href="<?php echo $value->source_url; ?>" target="_blank"><i class="fa fa-play"></i></a></span>
                                                <span class="js-asset-section world-bg white-color"> <?php echo $region; ?> </span>
                                            </div>  
                                        </div>
                                        <div class="item">  
                                        <?php } ?>
                                        <?php  ?>

                                    <?php } $i++; ?>
                                <?php } ?>                    
                            </div>          
                        </div>          
                    </article>  
                <?php } ?>                     
                <article class="headline-container">    
                    <div class="col-xs-6">              
                        <h4>Headlines</h4>              
                    </div>               
                    <div class="col-xs-6 text-right">       
                        <div class="well well-sm">          
                            <div class="btn-group">
                                <a href="#" id="list" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-th-list"> </span>List</a>
                                <a href="#" id="grid" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-th"></span>Grid
                                </a> 
                            </div>       
                        </div>       
                    </div> 
                    <?php if (!empty($news_array['headings'])) {
                 //echo "<pre>"; print_r($news_array['headings']);exit;
                    $s = shuffle($news_array['headings']);

                    $cunt = 1;
                    ?>
                    <?php $j = 1; ?>

                    <div class="col-xs-12">
                        <div id="products" class="row list-group">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <?php foreach ($news_array['headings'] as $value) {

                                if($cunt < count($news_array['headings'])){ ?>
                                <div class="item col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img class="group list-group-image" src="<?php echo $value->main_image; ?>"
                                             alt=""/>
                                        <div class="caption">
                                            <ul class="hgpm-meta">
                                                <li><span
                                                        class="js-asset-section world-bg white-color"><?php echo $region; ?></span>
                                                </li>
                                                <li class="hide"><span
                                                        class="js-asset-timestamp"><?php echo $value->published_on; ?></span>
                                                </li>
                                            </ul>
                                            <h4 class="list-group-item-heading2">
                                                <a href="#"  onclick="get_new_details(<?php echo $value->mnews_id; ?>,1)" data-toggle="modal" data-target="#product_view"
                                                    target="_blank"><?php echo $value->news_title; ?></a></h4>
                                            <!--<p class="list-group-item-text"><?php echo $value->news_text; ?></p>  -->
                                        </div>
                                    </div>
                                </div>
                                <?php if ($j == 3 || count($news_array['headings']) == $j) { ?>
                                <?php $j = 0; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <?php } ?>
                                <?php $j++; ?>
                                <?php }
                                $cunt++;
                                }?>
                                </div>           
                            </div>



                        <?php } ?>


                        <div class="clearfix"></div>       
                </article>




                <article class="col-xs-12">     
                    <?php if (!empty($worldarticles) && $worldarticles['espn']) { ?>
                        <div id="slider" class="flexslider">   
                            <ul class="slides"> 
                                <?php foreach ($worldarticles['espn'] as $key => $value) { ?>
                                <li> <a href="<?php echo $value['url']; ?>" target="_blank"><img src="<?php echo $value['main_image']; ?>"/></a> </li>
                                <?php } ?>   
                            </ul>                
                        </div>  
                    <?php } ?>

                    <hr>          
                </article>        
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 no-padding">
                <section class="col-xs-12 col-sm-12 col-md-12 no-padding">     
                    <article class="home-right nopadding content-1"> 
                        <?php
                        $cricketMatchesTxtC = file_get_contents('http://cricapi.com/api/cricket/?apikey=qXprqu6LurerVQZ8p7gk3AZCuFS2'); // change with your API key
                        $cricketMatchesC = json_decode($cricketMatchesTxtC);
                        ?>
                        <?php if ($this->router->class === 'mycon' && $this->router->method === 'sports') { ?>
                            <?php if (!empty($cricketMatchesC->data)) { ?>
                                <div class="trending-social-holder">        
                                    <div class="trending-heading">          
                                        <h3 class="sidebar-title text-center">Match Score</h3>  
                                    </div>                
                                    <ul class="right-now">  

                                        <?php foreach ($cricketMatchesC->data as $item) { ?>
                                            <li> 
                                                <a href="#"><?php echo($item->title); ?></a> 
                                            </li> 
                                        <?php } ?>  


                                    </ul>    
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if ($this->router->class === 'mycon' && $this->router->method === 'sports') { ?>
                            <?php if (!empty($cricketMatches->matches)) { ?>
                                <div class="trending-social-holder">        
                                    <div class="trending-heading">          
                                        <h3 class="sidebar-title text-center">Up Coming Matchs</h3>  
                                    </div>                
                                    <ul class="right-now">  

                                        <?php foreach ($cricketMatches->matches as $item) { ?>
                                            <?php if ($item->matchStarted == false) { ?>
                                                <li> 
                                                    <a href="#"><?php echo ($item->{'team-2'}); ?> VS <?php echo ($item->{'team-1'}); ?></a> 
                                                </li> 
                                            <?php } ?>
                                        <?php } ?>  


                                    </ul>    
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if (!empty($worldarticles) && $worldarticles[$music]) { ?>
                            <div class="trending-social-holder">        
                                <div class="trending-heading">          
                                    <h3 class="sidebar-title text-center">Music Entertainment</h3>  
                                </div>                
                                <ul class="right-now">  

                                    <?php foreach ($worldarticles[$music] as $key => $value) { ?>
                                        <li> 
                                            <a href="<?php echo $value['url']; ?>" target="_blank">
                                                <div class="live-feed-thumb"> 
                                                    <img src="<?php echo $value['urlToImage']; ?>" alt="" class="live-feed-thumb-img" height="" width="60"> 
                                                </div>                             
                                                <div class="live-feed-txt">       
                                                    <div class="live-feed-layout">  
                                                        <p class="live-feed-action">Music</p>  
                                                        <p class="live-feed-timesince"><span class="live-feed-humanized"><?php echo $value['publishedAt']; ?></span></p>    
                                                    </div>                               
                                                    <p class="live-feed-headline"><?php echo $value['title']; ?></p>  
                                                </div>                     
                                            </a> 
                                        </li> 
                                    <?php } ?>  


                                </ul>    
                            </div>   
                        <?php } ?>
                        <?php if (!empty($worldarticles) && $worldarticles[$geographics]) { ?>
                            <div class="trending-social-holder">         
                                <div class="trending-heading">           
                                    <h3 class="sidebar-title">National Geographic</h3>    
                                </div>             
                                <ul> 
                                    <?php $nationcount = 1; ?>
                                    <?php foreach ($worldarticles[$geographics] as $key => $value) { ?>
                                        <?php if ($nationcount == 1) { ?>
                                            <li>
                                                <a href="<?php echo $value['url']; ?>" target="_blank">
                                                    <div class="live-feed-full-width-image-wrap"> 
                                                        <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">  
                                                        <div class="live-feed-hed-wrap">
                                                            <span class="live-feed-video-icon"><i class="fa fa-play-circle-o"></i></span> 
                                                            <p class="live-feed-video-headline"><?php echo $value['title']; ?></p>    
                                                        </div>                               
                                                    </div>                          
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a>
                                            </li> 
                                        <?php } ?>
                                        <?php $nationcount++; ?>
                                    <?php } ?>
                                </ul>              
                            </div>   
                        <?php } ?>
                        <div class="trending-social-holder">  
                            <div class="trending-heading">    
                                <h3 class="sidebar-title">Sports</h3>   
                            </div>               
                            <ul>                
                                <?php if (!empty($worldarticles) && $worldarticles['bbc-sport']) { ?>
                                    <?php $nationcount = 1; ?>
                                    <?php foreach ($worldarticles['bbc-sport'] as $key => $value) { ?>
                                        <?php if ($nationcount == 1) { ?>
                                            <li>
                                                <a href="<?php echo $value['url']; ?>" target="_blank">
                                                    <div class="live-feed-full-width-image-wrap"> 
                                                        <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">  
                                                        <div class="live-feed-hed-wrap">
                                                            <span class="live-feed-video-icon"><i class="fa fa-play-circle-o"></i></span> 
                                                            <p class="live-feed-video-headline"><?php echo $value['title']; ?></p>    
                                                        </div>                               
                                                    </div>                          
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a>
                                            </li> 
                                        <?php } ?>
                                        <?php $nationcount++; ?>
                                    <?php } ?>
                                <?php } ?>
                            </ul>           
                        </div> 
                        <?php if (!empty($worldarticles) && $worldarticles[$entertaiment]) { ?>           
                            <div class="trending-social-holder"> 
                                <div class="trending-heading">      
                                    <h3 class="sidebar-title">Entertainment</h3> 
                                </div>                
                                <ul>                

                                    <?php $nationcount = 1; ?>
                                    <?php foreach ($worldarticles[$entertaiment] as $key => $value) { ?>
                                        <?php if ($nationcount == 1) { ?>
                                            <li>
                                               <a href="<?php echo $value['url']; ?>" target="_blank">
                                                    <div class="live-feed-full-width-image-wrap"> 
                                                        <img src="<?php echo $value['urlToImage']; ?>" class="img-responsive">  
                                                        <div class="live-feed-hed-wrap">
                                                            <span class="live-feed-video-icon"><i class="fa fa-play-circle-o"></i></span> 
                                                            <p class="live-feed-video-headline"><?php echo $value['title']; ?></p>    
                                                        </div>                               
                                                    </div>                          
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?></a>
                                            </li> 
                                        <?php } ?>
                                        <?php $nationcount++; ?>
                                    <?php } ?>
                                </ul>             
                            </div>      
                        <?php } ?>

                    </article> 
                </section> 
            </div>   
        </section>    




        <?php if ($this->router->fetch_class() == 'mycon') { ?>
            <div class="front-overlay-arrows">
                <div class="front-arrow-wrapper">
                    <?php if (!empty($prev)) { ?>
                        <a href="<?php echo base_url(); ?>mycon/<?php echo!empty($prev) ? $prev : ''; ?>" rel="prev" data-ht="frontprev" id="cards-prev-link" class="front-arrow-news" style="visibility: visible;">
                            <div class="cards-nav-icon"></div>
                            <div class="front-overlay-prev-arrows-anchor news-theme-bg">
                                <div class="front-prev-story-content-holder">
                                    <p class="front-prev-arrow-label"><?php echo $prev; ?></p>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                    <?php if (!empty($next)) { ?>
                        <a href="<?php echo base_url(); ?>mycon/<?php echo!empty($next) ? $next : ''; ?>" rel="next" data-ht="frontnext" id="cards-next-link" class="front-arrow-life" style="visibility: visible;">
                            <div class="cards-nav-icon"></div>
                            <div class="front-overlay-next-arrows-anchor life-theme-bg">
                                <div class="front-next-story-content-holder">
                                    <p class="front-next-arrow-label"><?php echo $next; ?></p>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>   
</div>
<style>
    .front-overlay-arrows {
        height: 0;
        left: 0;
        position: fixed;
        top: 45%;
        width: 100%;
        z-index: 4;
    }
    .no-touch .front-overlay-arrows:hover {
        z-index: 101;
    }
    .high-impact-ad-visible .front-overlay-arrows {
        display: none;
    }
    @media only screen and (max-height: 395px) {
        .front-arrow-wrapper {
            display: none;
        }
    }
    @media (max-width: 979px) {
        .front-arrow-wrapper {
            display: none;
        }
    }
    @media (min-width: 980px) {
        .front-arrow-wrapper {
            margin: 0 auto;
            position: relative;
        }
    }
    @media (min-width: 1150px) {
        .front-arrow-wrapper {
            margin: 0 auto;
            position: relative;
        }
    }
    @media (min-width: 1250px) {
        .front-arrow-wrapper {
            margin: 0 auto;
            position: relative;
        }
    }
    #cards-next-link, #cards-prev-link {
        height: 55px;
        position: relative;
        transition: opacity 400ms ease-in-out 0s;
        visibility: hidden;
        width: 55px;
        z-index: 100;
    }
    #cards-prev-link {
        float: left;
    }
    #cards-next-link {
        float: right;
    }
    .cards-nav-icon::before {
        color: hsl(0, 0%, 30%);
        display: block;
        font-family: "Gannett Icons";
        font-size: 55px;
        height: 55px;
        line-height: 79px;
        position: relative;
        top: -11px;
        width: 29px;
    }
    #cards-prev-link .cards-nav-icon::before {
        content: "<";
    }
    #cards-next-link .cards-nav-icon::before {
        content: ">";
    }



    .front-overlay-next-arrows-anchor, .front-overlay-prev-arrows-anchor {
        background-color: hsl(0, 0%, 14%);
        height: 55px;

        position: absolute;
        top: 0;
        transition: left 0.1s ease-out 0s, right 0.1s ease-out 0s;
    }
    .front-overlay-next-arrows-anchor {
        padding: 0 20px 0 30px;
        right: -200px;
    }
    .front-overlay-prev-arrows-anchor {
        left: -200px;
        padding: 0 30px 0 20px;
    }
    #cards-prev-link:hover  .front-overlay-prev-arrows-anchor{left:0 !important;}
    #cards-next-link:hover  .front-overlay-next-arrows-anchor{right:0 !important;}
    .no-touch #cards-next-link:hover .front-overlay-next-arrows-anchor {
        right: 0;
    }
    .no-touch #cards-prev-link:hover .front-overlay-prev-arrows-anchor {
        left: 0;
    }
    .front-next-arrow-label, .front-prev-arrow-label {
        color: hsl(0, 0%, 100%);
        font: 13px/18px "Futura Today DemiBold",Arial,sans-serif;
        margin-top: 18px;
        text-align: center;
        text-shadow: 0 1px 0 hsla(0, 0%, 0%, 0.5);
        text-transform: uppercase;
        white-space: nowrap;
    }
    .front-next-arrow-label::after, .front-prev-arrow-label::before {
        display: inline-block;
        font-family: "Gannett Icons";
        font-size: 12px;
        font-weight: 700;
        position: relative;
        top: 1px;
    }
    .front-next-arrow-label::after {
        content: ">";
        margin-left: 6px;
    }
    .front-prev-arrow-label::before {
        content: "<";
        margin-right: 6px;
    }
    .front-prev-story-content-holder {
        transition: left 0.3s ease-in-out 0s;
    }
    .front-next-story-content-holder {
        transition: right 0.3s ease-in-out 0s;
    }
    .stag-masthead > h1 {
        color: hsl(0, 0%, 100%);
        font: 700 50px/54px "helvetica neue",arial,sans-serif;
        margin: 0 0 25px;
        text-shadow: 4px 3px 3px hsla(0, 0%, 0%, 0.4);
    }
    #topic-card.fixed {
        position: fixed;
        width: 100%;
    }
    #topic-card footer {
        position: relative;
    }
</style>
