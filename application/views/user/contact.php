<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/header'); ?>
<?php $this->load->view('user/includes/mini_shopping_card'); ?>
      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="<?php echo base_url('assets/user/'); ?>assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

               <div class="sidebar__search p-relative mt-40 ">
                  <form action="#">
                     <input type="text" placeholder="Search...">
                     <button type="submit"><i class="fad fa-search"></i></button>
                  </form>
               </div>
               <div class="sidebar__cart mt-30">
                  <a href="#">
                     <div class="header__cart-icon">
                        <svg viewBox="0 0 24 24">
                           <circle class="st0" cx="9" cy="21" r="1"/>
                           <circle class="st0" cx="20" cy="21" r="1"/>
                           <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                        </svg>
                     </div>
                     <span class="cart-item">2</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Contact</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Contact</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- contact area start -->
         <section class="contact__area pt-115 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-7 col-xl-7 col-lg-6">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big">touch<img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg.png" alt=""></span></h2>
                           <p>Have a question or just want to say hi? We'd love to hear from you.</p>
                        </div>
                        <div class="contact__form">
                           <form action="https://themepure.net/template/educal/educal/assets/mail.php">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="email" placeholder="Your Email" name="email">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea placeholder="Enter Your Message" name="message"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__form-agree  d-flex align-items-center mb-20">
                                       <input class="e-check-input" type="checkbox" id="e-agree">
                                       <label class="e-check-label" for="e-agree">I agree to the<a href="#">Terms & Conditions</a></label>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="contact__btn">
                                       <button type="submit" class="e-btn">Send your message</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                     <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__shape">
                           <img class="contact-shape-1" src="<?php echo base_url('assets/user/'); ?>assets/img/contact/contact-shape-1.png" alt="">
                           <img class="contact-shape-2" src="<?php echo base_url('assets/user/'); ?>assets/img/contact/contact-shape-2.png" alt="">
                           <img class="contact-shape-3" src="<?php echo base_url('assets/user/'); ?>assets/img/contact/contact-shape-3.png" alt="">
                        </div>
                        <div class="contact__info-inner white-bg">
                           <ul>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="map" viewBox="0 0 24 24">
                                          <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"/>
                                          <circle class="st0" cx="12" cy="10" r="3"/>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>New York Office</h4>
                                       <p><a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Maypole Crescent 70-80 Upper St Norwich NR2 1LT</a></p>
   
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="mail" viewBox="0 0 24 24">
                                          <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"/>
                                          <polyline class="st0" points="22,6 12,13 2,6 "/>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Email us directly</h4>
                                       <p><a href="https://themepure.net/cdn-cgi/l/email-protection#82f1f7f2f2edf0f6c2e7e6f7e1e3eeace1edef"><span class="__cf_email__" data-cfemail="7e0d0b0e0e110c0a3e1b1a0b1d1f12501d1113">[email&#160;protected]</span></a></p>
                                       <p><a href="https://themepure.net/cdn-cgi/l/email-protection#e881868e87a88d8c9d8b8984c68b8785"> <span class="__cf_email__" data-cfemail="caa3a4aca58aafaebfa9aba6e4a9a5a7">[email&#160;protected]</span></a></p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="call" viewBox="0 0 24 24">
                                          <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"/>
                                          </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Phone</h4>
                                       <p><a href="tel:+(426)-742-26-44">+(426) 742 26 44</a></p>
                                       <p><a href="tel:+(224)-762-442-32">+(224) 762 442 32</a></p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="contact__social pl-30">
                              <h4>Follow Us</h4>
                              <ul>
                                 <li><a href="#" class="fb" ><i class="social_facebook"></i></a></li>
                                 <li><a href="#" class="tw" ><i class="social_twitter"></i></a></li>
                                 <li><a href="#" class="pin" ><i class="social_pinterest"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->

         <!-- contact info area start -->
         <section class="contact__area grey-bg-2 pt-120 pb-90 p-relative fix">
            <div class="contact__shape">
               <img class="contact-shape-5" src="<?php echo base_url('assets/user/'); ?>assets/img/contact/contact-shape-5.png" alt="">
               <img class="contact-shape-4" src="<?php echo base_url('assets/user/'); ?>assets/img/contact/contact-shape-4.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                     <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon d-flex justify-content-center align-items-end">
                           <svg viewBox="0 0 24 24">
                              <circle class="st0" cx="12" cy="12" r="10"/>
                              <path class="st0" d="M8,14c0,0,1.5,2,4,2s4-2,4-2"/>
                              <line class="st0" x1="9" y1="9" x2="9" y2="9"/>
                              <line class="st0" x1="15" y1="9" x2="15" y2="9"/>
                           </svg>
                        </div>
                        <div class="contact__content">
                           <h3 class="contact__title">Knowledge Base</h3>
                           <p>My good sir plastered cuppa barney cobblers mush argy bargy ruddy.</p>
                           <a href="contact.php" class="e-btn e-btn-border">Visit Documentation</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5  col-lg-5 col-md-6">
                     <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon d-flex justify-content-center align-items-end">
                           <svg viewBox="0 0 24 24">
                              <path class="st0" d="M21,10.8c0,1.3-0.3,2.6-0.9,3.8c-1.4,2.9-4.4,4.7-7.6,4.7c-1.3,0-2.6-0.3-3.8-0.9L3,20.3l1.9-5.7  C4.3,13.4,4,12.1,4,10.8c0-3.2,1.8-6.2,4.7-7.6c1.2-0.6,2.5-0.9,3.8-0.9H13c4.3,0.2,7.8,3.7,8,8V10.8z"/>
                              <g>
                                 <circle class="st1" cx="9.3" cy="10.5" r="0.5"/>
                                 <circle class="st1" cx="12.5" cy="10.5" r="0.5"/>
                                 <circle class="st1" cx="15.7" cy="10.5" r="0.5"/>
                              </g>
                              </svg>
                        </div>
                        <div class="contact__content">
                           <h3 class="contact__title">Online Support</h3>
                           <p>My good sir plastered cuppa barney cobblers mush argy bargy ruddy.</p>
                           <a href="contact.php" class="e-btn e-btn-border">Send a Ticket</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact info area end -->
      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>