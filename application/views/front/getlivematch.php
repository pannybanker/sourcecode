<?php
$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricketScore/?apikey=qXprqu6LurerVQZ8p7gk3AZCuFS2&unique_id=' . $id); // change with your API key
$cricketMatches = json_decode($cricketMatchesTxt);
?>
<?php if (!empty($cricketMatches) && $cricketMatches->matchStarted == true) { ?>
    <div class="game "> 
        <div class="post-season"><?php echo ($cricketMatches->score); ?></div>
        <div class="eventstatus"><?php echo ($cricketMatches->type); ?></div>         
        <div class="eventstatus"> <div class=""> Vs </div>  </div>         
        <span class="text-center" style="margin: 0 auto;"> 
            <a style="float:left;" href="javascript:void(0);">    
                <div class="team away">    
                    <span class="suspender_team"><?php echo ($cricketMatches->{'team-1'}); ?></span>      
                </div>                                  
            </a>                                 
                   
            <a style="float:right;" href="javascript:void(0);">   
                <div class="team home">      
                    <span class="suspender_team"><?php echo ($cricketMatches->{'team-2'}); ?></span> 
                </div>                                
            </a>      

        </span> 
    </div>
<?php } else { ?>
    <div class="game "> 
        <div class="post-season">No Records</div>
    </div>
<?php } ?>
