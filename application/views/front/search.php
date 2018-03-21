<div class="container">    
    <h2>
        <?php echo count($worldarticles); ?> Entries were found for <?php echo $keyword; ?>
    </h2>  
    <section class="middle-part">   

        <?php if (!empty($worldarticles)) { ?>  
            <?php $count = 1; ?>
            <article class="col-md-12">  
                <div class="row">       
                    <?php foreach ($worldarticles as $key => $value) { ?>
                        <?php if (!empty($value['urlToImage'])) { ?>
                            <div class="item col-sm-6 col-md-3">          
                                <div class="thumbnail"> 
                                    <a href="<?php echo $value['url']; ?>" target="_blank"><img class="group list-group-image" src="<?php echo $value['urlToImage']; ?>" alt="" /></a>  
                                    <div class="caption">   
                                        <a href="<?php echo $value['url']; ?>" target="_blank"><h4 class="list-group-item-heading"><?php echo $value['title']; ?></h4>   </a>
                                    </div>                         
                                </div>                       
                            </div> 

                            <?php if ($count == 4 || $count == count($worldarticles)) { ?>
                                <?php $count = 0; ?>
                            </div>
                        </article>
                        <hr> 
                        <div class="clearfix"></div>
                        <article class="col-md-12">  
                            <div class="row">  

                            <?php } ?>
                            <?php $count++; ?>
                        <?php } ?>
                    <?php } ?>       
                </div> 
            </article>       
        <?php } ?>


        <div class="clearfix"></div>  
    </section> 
</div>
