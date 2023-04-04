<?php
/**
 * Template Name: home page
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<!doctype html>
<html lang="en">
  <head>
   <?php get_header(); ?>
  </head>
  <body>
  
  <?php 
     include("inc/nav.php");
  ?>   
   <?php if(get_field('banner_section_visibility')) {  ?>
  <section class="illustration">
    <div class="container">
      <div class="illustration-bgcolor" <?php echo get_field('background_color');?>>
      <div class="row">
        
      <div class="col-md-6 align-self-center">
        <div class="illus-design">
         <h1 class="illustrate-design"><?php echo get_field('banner_title')?></h1>
        </div>
         <div class="lorem-illustrate">
          <p class="lorem"><?php echo get_field('banner_description')?></p></div>
          <div class="get-started">
            <button type="button" class="btn common-btn1"><?php echo get_field('get_started_button')?></button>
           </div>
        </div>
      <div class="col-md-6">
        <div>
          <img src="<?php echo get_field('banner_image')?>" class="img-fluid illusimg" alt=".....">
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>
<?php }?>
  <section class="professional">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
           <div class="profession">
            <div>
               <h2 class="profession1"><?php echo get_field('professional_title')?></h2>
              </div>
               <div class="proimg">
                   <img src="<?php echo get_field('professional_image')?>" class="img-fluid profesionimg" alt="professional_image">
               </div>
               <!-- <ul>
                <div class="design">
                  <div class="d-flex">
                  <li class="designn-btn">
                    <button type="button" class="btn common-btn1">Design</button>
                  </li>
                  <li class="designn-btn"> 
                    <button type="button" class="btn common-btn11">Photoshop</button>
                  </li>
                  </div>
                   <div class="design1">
                    <li class="designn-btn">
                      <button type="button" class="btn common-btn12">Get Started</button>
                    </li>
                   </div>
                </div>
             </ul> -->
             <div class="d-md-flex justify-content-between mt-4">
              <div class="d-flex">
                <div class="designn-btn mb-3">
                  <button type="button" class="btn common-btn1"><?php echo get_field('professional_button')?></button>
                </div>
                <div class="designn-btn Photoshop mx-2">
                  <button type="button" class="btn common-btn11"><?php echo get_field('photoshop_button')?></button>
                </div>
              </div>
              <div class="designn-btn col-m-12">
                <button type="button" class="btn common-btn12"><?php echo get_field('professional_getstarted_button')?></button>
              </div>
             </div>
             <!-- <div class="row mt-4">
              <div class="col-md-9">
                <div class="d-flex justify-content-between">
                  <div class="col-md-3 mb-3 col-6">
                  <div class="designn-btn">
                    <button type="button" class="btn common-btn1">Design</button>
                  </div>
                  </div>
                  <div class="col-md-9 mb-3 col-6">
                    <div class="designn-btn Photoshop">
                      <button type="button" class="btn common-btn11">Photoshop</button>
                    </div>
                </div>
                
              </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="designn-btn"> 
                  <button type="button" class="btn common-btn12">Get Started</button>
                </div>
              </div>
             
           </div> -->
           </div>

        </div>
        <div class="col-md-6">
             <div class="lerum-dolor">
               <div>
                <h2><?php echo get_field('lorum_title')?></h2>
               </div>
               <div class="read-btn">
                <button type="button" class="btn common-btn1"><?php echo get_field('lorum_button')?></button>
               </div>
             </div>
             <div class="nullam">
              <p class="nullam1"><?php echo get_field('lorum_nullam_lorem')?></p>
             </div>  
        </div>
      </div>
    </div>
  </section>

  <section class="about-us">
     <div class="container about-con">
      <div class="row">
        <div class="col-md-12">
            <div class="about">
              <h3 class="about1"><?php echo get_field('aboutus_title')?></h3>
            </div>
            <div class="lorem-about1">
              <p class="lorem-about"><?php echo get_field('aboutus_description')?></p>
            </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="our-features">
    <div class="container">
    <div class="our-features1">
          <h2 class="our-featuress"><?php echo get_field('our_features_title')?></h2>
    </div>
    <div class="row">
      
    <?php $i=1; while (have_rows('our_feature_cards')) : the_row(); ?>
      <div class="col-md-4 mb-4">
        <div class="profession1-art" style="background: <?php echo get_sub_field('background_color')?>">
          <div class="pro-kit">
             <h4 class="pro-kit1"><?php echo get_sub_field('our_feature_card_title');?></h4>
            </div>   
          <div class="pro-design">
            <p class="pro-design1"><?php echo get_sub_field('our_feature_card_description');?></p>
          </div>  
          <div class="designn-pro">
            <img src="<?php echo get_sub_field('our_feature_card_image');?>" class="img-fluid our-proimg" alt="">
          </div>
          <div class="dollar-btn">
          <div class="get-started-btn">
            <button type="button" class="btn common-btn1"><?php echo get_sub_field('our_feature_card_button');?></button>
          </div>
          <div class="number-dollor">
            <p class="number-dollor1"><?php echo get_sub_field('our_feature_dollar');?></p>
          </div>
        </div>
        </div>
      </div>

      <?php $i++; endwhile;?>
      <!-- <div class="col-md-4 mb-4">
        <div class="profession1-art">
            <div class="pro-kit">
               <h4 class="pro-kit1">professional Tool Kit </h4>
              </div>   
            <div class="pro-design">
              <p class="pro-design1">professional Art</p>
            </div>  
            <div class="designn-pro">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustratedesign.jpg" class="img-fluid our-proimg" alt="">
            </div>
            <div class="dollar-btn">
            <div class="get-started-btn">
              <button type="button" class="btn common-btn1">get-started</button>
            </div>
            <div class="number-dollor">
              <p class="number-dollor1">12$</p>
            </div>
          </div>
          
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="profession1-print">
            <div class="pro-kit">
               <h4 class="pro-kit1">professional Tool Kit </h4>
              </div>   
            <div class="pro-design">
              <p class="pro-design1">print Design</p>
            </div>  
            <div class="designn-pro">
              <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/illustratedesign.jpg" class="img-fluid our-proimg" alt="">
            </div>
            <div class="dollar-btn">
            <div class="get-started-btn">
              <button type="button" class="btn common-btn1">get-started</button>
            </div>
            <div class="number-dollor">
              <p class="number-dollor1">12$</p>
            </div>
          </div>
         
        </div>
      </div> -->
    </div>
  </div>
  </section>
  
  <section class="our-skills">
    <div class="container">
      <div class="row">
 
        <div class="col-md-6">
          <div class="our-skill">
            <h2 class="our-skills1"><?php echo get_field('our_skills_title')?></h2>
          </div>
          <div class="lorem-skills1">
            <p class="lorem-skills"><?php echo get_field('our_skills_description')?></p>
          </div>
        </div>  
          <div class="col-md-6">
          <?php  $i=1; while (have_rows('progress')) : the_row();?>
              <div class="progresss">
                <div class="ourskill-design1">
                <div class="ourskill-illustratee2">
                   <p class="ourskill-illustratee"><?php echo get_sub_field('progress_title');?></p>
                </div>
                <div>
                <p class="number92"><?php echo get_sub_field('progress_bar');?>%</p>
                </div>
               </div>
              </div>
              <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo get_sub_field('progress_bar');?>%" role="progressbar" aria-valuenow="<?php echo get_sub_field('progress_bar');?>" aria-valuemin="0" aria-valuemax="100"></div>    
               </div>
               <?php $i++; endwhile;?>
              </div>
          
          <!-- <div class="progresss">
            <div class="ourskill-design1">
              <div class="ourskill-illustratee2">
                <p class="ourskill-illustratee">illustrate-design</p>
              </div>
              <div>
                <p class="number71">71%</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated progressbar2" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>    
            </div>
          </div>
          <div class="progresss">
            <div class="ourskill-design1">
              <div class="ourskill-illustratee2">
                <p class="ourskill-illustratee">illustrate-design</p>
              </div>
              <div>
                <p class="number53">53%</p>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated progressbar3" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>    
            </div>
          </div> -->
        </div>
     
     </div>
     
   </div>
  </section>
  

 










  <section class="our-team">
    <div class="container">
    <div class="team1">  
     <div class="team">
      <h2 class="our-teamm"><?php echo get_field('our_team_title')?></h2>
    </div>
      <div>
        <p class="ourteam-lorem"><?php echo get_field('our_team_description')?></p>
     </div>
    </div>
    <div class="ourteam-bgcolor">
      <div class="row">
      <?php  while (have_rows('our_team')) : the_row();?>
      <div class="col-md-4 mb-4">
        <div class="our-jessica">
          <div class="our-jessica1">
            <img src="<?php echo get_sub_field('our_team_image');?>" class="img-fluid our-jessicaimg" alt="">
          </div>
          <div class="jessica-swift">
             <h4 class="jessica-swift1"><?php echo get_sub_field('our_team_title');?></h4>
            </div>   
          <div class="maneger">
             <?php echo get_sub_field('our_team_description');?>
          </div>  
          <div class="design1">
              <button type="button" class="btn common-btn13"><?php echo get_sub_field('our_team_button');?></button>
           </div>
         <div class="">

         </div>
        
      </div>
      </div>
      <?php endwhile;?>
      <!-- <div class="col-md-4 mb-4">
        <div class="our-jessica">
          <div class="our-jessica1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jessica.jpg" class="img-fluid our-jessicaimg" alt="">
          </div>
          <div class="jessica-swift">
             <h4 class="jessica-swift1">Ben palmer</h4>
            </div>   
          <div class="maneger">
            <p class="maneger1">Designer</p>
            <p class="ourjesica-lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>  
          <div class="design1">
              <button type="button" class="btn common-btn13">View Profile</button>
           </div>
         <div class="">

         </div>
       
      </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="our-jessica">
          <div class="our-jessica1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jessica.jpg" class="img-fluid our-jessicaimg" alt="">
          </div>
          <div class="jessica-swift">
             <h4 class="jessica-swift1">Adom Brown</h4>
            </div>   
          <div class="maneger">
            <p class="maneger1">Developer</p>
            <p class="ourjesica-lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>  
          <div class="design1">
              <button type="button" class="btn common-btn13">View Profile</button>
           </div>
       
      </div> -->
      </div>
    </div>
    </div>
    </div>
  </section>

  
  <section class="users-say">
    <div class="container">
      <div class="user">
        <h2 class="what"><?php echo get_field('user_say_title')?></h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      
        <div class="carousel-inner">
          <?php  $i=1; while (have_rows('users_say')) : the_row();?>
            <div class="carousel-item <?php if ($i==1){?>active <?php } ?>">
            
                <div class="jessicaa">
                <img src="<?php echo get_sub_field('users_say_image'); ?>" class="d-block img-fluid our-userimg" alt="...">
              </div>
                <div class="carousel-caption d-md-block">
                  <div class="first1">
                  <h5 class="first"><?php echo get_sub_field('users_say_description'); ?></h5>
                </div>
                  <p class="adam"><?php echo get_sub_field('users_say_name'); ?></p>
                  <p class="designer1"><?php echo get_sub_field('users_say_designation'); ?></p>
                </div>
              </div>
              <?php $i++; endwhile;?>
              <!-- <div class="carousel-item">
                <div class="jessicaa">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustratedesign.jpg" class="d-block img-fluid our-userimg" alt="...">
              </div>
                <div class="carousel-caption d-md-block">
                  <div class="first1">
                  <h5 class="first">First slide label Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur, odit magni veritatis modi doloribus minus eaque beatae nemo quasi sunt nihil voluptates. Illum similique in non minus quis mollitia omnis?</h5>
                </div>
                  <p class="adam">Adam</p>
                  <p class="designer1">Designer</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="jessicaa">
                <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/illustratedesign.jpg" class="d-block img-fluid our-userimg" alt="...">
              </div> -->
                <!-- <div class="carousel-caption d-md-block">
                  <div class="first1">
                  <h5 class="first">First slide label Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur, odit magni veritatis modi doloribus minus eaque beatae nemo quasi sunt nihil voluptates. Illum similique in non minus quis mollitia omnis?</h5>
                </div>
                  <p class="adam">Adam</p>
                  <p class="designer1">Designer</p>
                </div>
              </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      </div>

    <div class="container">
      <div class="obviously1">
         <div class="obvi">
            <div class="obvioslyimg">
               <img src="<?php echo get_field('obviosly_imgage')?>"  class="img-fluid" alt="">
            </div>
            <!-- <div class="yyyy">
            <div class="obviosly-btn">
                <div class="d-flex">
                  <div class="wwww">
                  <button type="button" class="btn common-btn1">View Profile</button> 
                </div>
                  <div class="wwww">
                    <button type="button" class="btn common-btn1">View Profile</button> 
                  </div>
               
                </div>
                <div class="wwww">
                  <button type="button" class="btn common-btn1">View Profile</button>
                </div>
            </div>
          </div> -->
          <!-- <div class="row">
            <div class="col-md-6 View">
              <div class="row mt-4">
                <div class="col-md-4 mb-4 col-12">
                  <button type="button" class="btn common-btn1">View Profile</button> 
                </div>
                <div class="col-md-4 col-12">
                  <button type="button" class="btn common-btn1 jjjj">View Profile</button> 
                </div>
                <div class="col-md-4 mb-4 col-12">
                  <button type="button" class="btn common-btn1 jjjj">View Profile</button> 
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div class="profilee">
              <button type="button" class="btn common-btn12">View Profile</button> 
            </div>
            </div>
          </div> -->

          <div class="d-md-flex justify-content-between mt-4">
            <div class="d-md-flex">
              <div class="designn-btn mb-3 view-profile">
                <button type="button" class="btn common-btn1"><?php echo get_field('view_profile_button')?></button>
              </div>
              <div class="designn-btn mb-3 view-profile">
                <button type="button" class="btn common-btn1"><?php echo get_field('view_profile_button1')?></button>
              </div>
              <div class="designn-btn mb-3 view-profile">
                <button type="button" class="btn common-btn1"><?php echo get_field('view_profile_button2')?></button>
              </div>
            </div>
            <div class="designn-btn mb-3 view-profile">
              <button type="button" class="btn common-btn12"><?php echo get_field('view_profile_button3')?></button>
            </div>
           </div>


         </div>
      </div>
    </div>

  </section>

  <section class="our-partner">
    <div class="container">
      <div class="row">
        <?php while(have_rows('our_partner')) : the_row();?>
        <div class="col-md-4 mb-3">
           <div class="our-partneer">
                <h2 class="our-partnerr"><?php echo get_sub_field('our_partner_title');?></h2>
                <div class="lorem-partner1">
                  <p class="lorem-partner"><?php echo get_sub_field('our_partner_description');?></p>
                </div>
                <div class="lorem-partnere">
                  <button type="button" class="btn common-btn12"><?php echo get_sub_field('our_partner_button');?></button>
                </div>
                
           </div>
          
        </div>
        <?php endwhile;?>
        <!-- <div class="col-md-4 mb-3">
          <div class="our-partneer">
               <h2 class="our-partnerr">Our Partner</h2>
               <div class="lorem-partner1">
                 <p class="lorem-partner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ut unde natus quibusdam quisquam ipsam doloribus exercitationem ex asperiores</p>
               </div>
               <div class="lorem-partnere">
                 <button type="button" class="btn common-btn12">View Profile</button>
               </div>
          </div>
       </div>
       <div class="col-md-4 mb-3">
        <div class="our-partneer">
             <h2 class="our-partnerr">Our Partner</h2>
             <div class="lorem-partner1">
               <p class="lorem-partner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ut unde natus quibusdam quisquam ipsam doloribus exercitationem ex asperiores</p>
             </div>
             <div class="lorem-partnere">
               <button type="button" class="btn common-btn12">View Profile</button>
             </div>
        </div>
     </div> -->
      </div>
    </div>
  </section>


  <section class="subscribe">
    <div class="container subs">
       <div class="sub">
          <h2 class="subscribe1"><?php echo get_field('subscribe_title')?></h2>
       </div>
       <div class="subscribe2">
        <form class="formValidation">
          <div class="row">
            <div class="col-md-9 align-self-center">
          <div class="row">
            <div class="col-md-6 mt-3 mb-3">
              <input type="text" name="fname" class="form-control" placeholder="Name"  required data-bv-notempty-message="Please enter name">
            </div>
            <div class="col-md-6 mt-3 mb-3">
              <input type="email" class="form-control email2" name="email" id="inputEmail4" placeholder="Email" required data-bv-notempty-message="Please enter email">
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3 mt-3">
          <div class="sign-in"> 
            <button type="submit" class="btn btn-primary common-btn14">Subscribe</button>
          </div>
        </div>
        </div>
        </form>
       </div>
    </div>

  </section>


  <section class="contacts">
    <div class="container">
       <div class="contactss1">
        <div class="contactss">
          <h2 class="contacts1"><?php echo get_field('contact_title')?></h2>
          </div>
          <div class="contacts2">
            <p class="contacts3"><?php echo get_field('contact_description')?></p>
          </div>
       </div>
       <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <div class="phone">
                 <div class="row">
                  <div class="col-md-3 col-6 align-self-center">
                    <i class="fa fa-phone icon-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9 col-6">
                       <h3><?php echo get_field('phone')?></h3>
                       <p><?php echo get_field('number')?></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="contact-email">
            <div class="row">
              <div class="col-md-3 col-6 align-self-center">
                <i class="fa fa-envelope-o icon-phone" aria-hidden="true"></i>
              </div>
              <div class="col-md-9 col-6">
                   <h3><?php echo get_field('email')?></h3>
                   <p><?php echo get_field('mailid')?></p>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-6 mb-4">
            <div class="phone">
                 <div class="row">
                  <div class="col-md-3 col-6 align-self-center">
                    <i class="fa fa-globe icon-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-md-9 col-6">
                       <h3><?php echo get_field('address')?></h3>
                       <p><?php echo get_field('addesss')?></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="contact-email">
            <div class="row">
              <div class="col-md-3 col-6 align-self-center">
                <i class="fa fa-bars icon-phone" aria-hidden="true"></i>
              </div>
              <div class="col-md-9 col-6">
                   <h3><?php echo get_field('working_hours')?></h3>
                   <p><?php echo get_field('working_hours_start_time')?> <?php echo get_field('working_hours_end_time')?></p>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15590.197992678546!2d76.6297076!3d12.346080099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7b4a58931e11%3A0x2e989c261f1eb16!2sDistrict%20Hospital%20Mysore!5e0!3m2!1sen!2sin!4v1673016637870!5m2!1sen!2sin" class="mapp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      <div>
        <div class="google-map"> <?php echo get_field('map_embeded_code');?></div>
    </div>
    </section>
   
   
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slim.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrapValidator.min.js"></script>
    <script>
 
if( $('.formValidation').length)
         {
     $('.formValidation').bootstrapValidator({
           feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'form-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
      });
             }
    </script>

  </body>
</html>
