<div class="container">

    <div class="row">
   <div class="col-sm-6 ">


       <?php
       $usrg= $this->uri->segment(3);
       if($usrg==""){?>
       <div id="forgot_fail" class="alert alert-danger" style="display: block;">
           <strong>Sorry!</strong> Email does not exist.
       </div>
       <?php }else{ ?>

           <div id="forgot_fail" class="alert alert-danger" style="display: none;">
               <strong>Sorry!</strong> Email does not exist.
           </div>


           <div id="password_fail" class="alert alert-danger" style="display: none;">
               <strong>Sorry!</strong> Password not matched.
           </div>

           <form id="frmremailcheck" style="display: none;">

               <div class="form-group">
                   <label>Email Id</label>
                   <input class="form-control"  type="email" id="txtemail" >



               </div>

               <button type="submit" class="btn btn-success" id="btnEmailCheck">Check Email</button>


           </form>


           <form id="frmreset" style="display: block">

               <div class="form-group">
                   <label>New Password</label>
                   <input class="form-control"  type="password" id="txtPassword" >



               </div>

               <div class="form-group">
                   <label>Confirm Password</label>
                   <input class="form-control"  type="password" id="txtCPassword" >

                  <input type="hidden" id="hndPass" value="<?php echo $this->uri->segment(4); ?>" />
                  <input type="hidden" id="hndPasskey" value="<?php echo $this->uri->segment(3); ?>" />

               </div>

               <button type="submit" class="btn btn-success" id="btnPassreset">Reset Password</button>


           </form>


       <div id="forgotp_success" class="alert alert-success" style="display: none;">
           <strong>Success!</strong> Password changed, <a href="javascript:void(0);"  data-toggle="modal" data-target="#login-modal">Login Now</a>.
       </div>

       <?php } ?>

   </div>

    </div>

</div>