<section class="business_section">
               <div class="container">
                 <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-9 alert_box">
                        <?php $a=$this->session->flashdata("message"); if(!empty($a)){?>
                          <div class="alert ">
                           <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                           <strong>Success!</strong> User document successfully uploaded
                           </div>
                        <?php }?>             

                        <?php $a=$this->session->flashdata("error"); if(!empty($a)){?>
                          <div class="alert-dangers">
                           <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                           <strong>Error!</strong> <?php echo $a;?>
                           </div>
                        <?php }?> 
                        </div>
                      </div>



                  <div class="row">
                  <div class="col-md-3">
                       <div class="sidebar_desboard">
                        <div class="edit_profile">
                           <div class="frofile_images">
                              <img src="<?php echo $this->session->userdata('image');?>">
                              <h5><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name');?></h5>
                              <h6>Joined <?php echo $this->session->userdata('created_on');?></h6>
                              <!-- <button type="button" class="btn edit_profile_btn">Edit Profile</button> -->
                              <button type="button" class="btn edit_profile_btn"><a href="<?php echo base_url().'front/user_dashbaord';?>">Edit Profile<a></button>
                           </div>
                        </div>

                        <div class="munu_sidbar_main">
                          <div class="menu_sidbar">
                           
                              
                              <ul id="accordion" class="accordion">
                                <li><a  href="<?php echo base_url().'front/user_dashbaord';?>"><i class="fa fa-user-o icon_menu"></i>Personal details</a></li>
                                  <!--<li><a href="client-enquiries.html"><i class="fa fa-cog icon_menu"></i>Enquiries</a></li>-->
                                   <li>
                                       <div class="link"><i class="fa fa-users icon_menu"></i>Enquiries<i class="fa fa-sort-desc"></i></div>
                                       <ul class="submenu">
                                           <li><a href="<?php echo base_url().'front/client_enquiries_draft';?>"><i class="fa fa-pencil-square-o icon_menu"></i>Draft</a></li>
                                           <li><a href="<?php echo base_url().'front/client_enquiries';?>"> <i class="fa fa-paper-plane icon_menu"></i>Submitted</a></li>
                                           </ul>
                                          </li>
                                  <li><a  href="<?php echo base_url().'front/user_account_setting';?>"><i class="fa fa-cog icon_menu"></i> Account settings</a></li>
                                  <li><a href="<?php echo base_url().'front/clientAdminRequest';?>"><i class="fa fa-exchange icon_menu"></i>Request Admin</a></li>
                                  <li><a class="active" href="<?php echo base_url().'front/client_partnership_documents';?>"><i class="fa fa-file-text-o icon_menu"></i>Partnership Documents</a></li>
                                  <li><a href="<?php echo base_url().'front/logout';?>"><i class="fa fa-sign-out icon_menu"></i> Logout</a></li>
                                  </ul>
                              
                              
                          </div>
                        </div>
                         
                       </div>
                     </div>
                     <div class="col-md-9">
                     

                       <div class="content_desboard">
                         <div class="row">
                           
                           <div class="col-md-12 business_profile">
                              <div class="row register_feild">
                                    <div class="col-md-12 file_feild_upload">
                                      <h4 class="heading_form">Upload your NDA and Referral Partner Agreement </h4>

                                      <p>Select a File to Upload</p>
                                     
                                          <form action="<?php echo site_url('front/user_upload_document');?>" id="editFormAjaxProfile"  name="editFormAjaxProfile" method="POST" enctype='multipart/form-data'>
                                            <input type="file" class="file-field" name="file_pic">
                                            <input class="upload_btn"  type="submit" value="Upload">
                                          </form>
                                          <!--<p class="upload_text"><b>Note:</b> Not be further allowed to edit or re-upload so fresh copies can be uploaded</p>-->
                                          <div class="alert alert-info">
   <strong>Note:</strong> Not be further allowed to edit or re-upload so fresh copies can be uploaded
 </div>

                                    </div>

                                    
                                    
                                 </div>

                                 </div>
                           </div>
                         </div>
                       </div>
                     </div>
               </div>
              
            </section>
            
           
            <!--  *** content *** -->