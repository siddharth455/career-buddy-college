<?php
$success = $_GET['success'] ?? null;
require "common/header.php";
?>
    <div class="body-overlay"></div>
    <!-- header search end -->

    <!-- main area start  -->
    <main>
       
        <!-- breadcrumb start -->
        <section class="breadcrumb bg_img ul_li" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="breadcrumb__content text-center">
                    <h2 class="breadcrumb__title">contact us</h2>
                    <p class="breadcrumb__desc">Get in Touch with Our Career Buddy College</p>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->

        <!-- contact start -->
        <section class="contact_section section_space" data-bg-color="#F1F1E9">
          <div class="container">
            <div class="row justify-content-lg-between mt-none-30">
              <div class="col-lg-7 mt-30">
              <?php if ($success === '1'): ?>
  <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
    ✅ Your message has been sent successfully.
  </div>
<?php elseif ($success === '0'): ?>
  <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
    ❌ Something went wrong. Please try again.
  </div>
<?php endif; ?>

                <div class="contact_form mb-0">
                  <h3 class="title">send us a message 👍🏻</h3>
                  <p class="content">
                    Give us chance to serve and bring magic to your brand.
                  </p>
                  <form action="save_contact.php" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="input_title" for="input_name">Full Name
                        </label>
                        <input id="input_name" class="form-control" type="text" name="name" placeholder="Goladra Gomaz"
                          required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="input_title" for="input_email">Your Email
                        </label>
                        <input id="input_email" class="form-control" type="email" name="email"
                          placeholder="Career Buddy College@example.com" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="input_title" for="input_phone">Your Phone</label>
                        <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="+8250-3560 6565">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="input_title" for="input_textarea">Message</label>
                        <textarea id="input_textarea" class="form-control" name="message"
                          placeholder="How can we help you?"></textarea>
                      </div>
                      <button type="submit" class="thm-btn">Send Message
                        <span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.0364 2.63798C11.6702 1.79536 10.0512 1.33203 8.37891 1.33203C3.82654 1.33203 0 4.72368 0 9.06641C0 10.589 0.473 12.0486 1.37148 13.3092L0.116359 17.2497C-0.0162422 17.6659 0.295539 18.0898 0.730598 18.0898C0.83007 18.0898 0.930188 18.0669 1.02257 18.0198L4.83957 16.0791C4.99413 16.1456 5.15062 16.2076 5.3087 16.265C4.42496 14.8857 3.95312 13.3023 3.95312 11.6445C3.95312 6.70755 8.10726 2.91208 13.0364 2.63798Z" fill="#170006"></path>
                          <path d="M20.6285 15.8873C21.527 14.6267 22 13.1671 22 11.6445C22 7.30022 18.1718 3.91016 13.6211 3.91016C9.06873 3.91016 5.24219 7.30181 5.24219 11.6445C5.24219 15.9888 9.07036 19.3789 13.6211 19.3789C14.8421 19.3789 16.0588 19.1301 17.1602 18.6571L20.9774 20.598C21.2091 20.7157 21.4889 20.6829 21.6869 20.5146C21.885 20.3463 21.9626 20.0755 21.8837 19.8278L20.6285 15.8873ZM11 12.2891C10.644 12.2891 10.3555 12.0005 10.3555 11.6445C10.3555 11.2886 10.644 11 11 11C11.356 11 11.6445 11.2886 11.6445 11.6445C11.6445 12.0005 11.356 12.2891 11 12.2891ZM13.5781 12.2891C13.2222 12.2891 12.9336 12.0005 12.9336 11.6445C12.9336 11.2886 13.2222 11 13.5781 11C13.9341 11 14.2227 11.2886 14.2227 11.6445C14.2227 12.0005 13.9341 12.2891 13.5781 12.2891ZM16.1562 12.2891C15.8003 12.2891 15.5117 12.0005 15.5117 11.6445C15.5117 11.2886 15.8003 11 16.1562 11C16.5122 11 16.8008 11.2886 16.8008 11.6445C16.8008 12.0005 16.5122 12.2891 16.1562 12.2891Z" fill="#170006"></path>
                        </svg></span>
                    </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-5 mt-30">
                <div class="gmap_canvas ps-lg-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.859186772509!2d77.90445807535711!3d30.344492274773838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f2abcda28d3c7%3A0xd5dabd271dbcbc2e!2sGuru%20Nanak%20College%20of%20Pharmaceutical%20%26%20Paramedical%20Sciences!5e1!3m2!1sen!2sin!4v1751264581121!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            
            <div class="contact_info_box_inner pt-110">
              <h2 class="text-center">Let us know how we can help</h2>
            </div>
            <div class="contact_info_box row mt-none-30">
              
              <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="contact_iconbox">
                  <div class="iconbox_icon">
                    <img src="assets/img/icon/call-calling.svg" alt="Calling SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h2 class="iconbox_title">Call Us On</h2>
                    <p>
                      Mon-Fri from 8am to 5pm
                    </p>
                    <h3>+91 7456000100</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="contact_iconbox">
                  <div class="iconbox_icon">
                    <img src="assets/img/icon/sms-edit.svg" alt="SMS SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h2 class="iconbox_title">Email Us</h2>
                    <p>
                      Speak to our Friendly team.
                    </p>
                    <h3>Career Buddy College@example.com</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="contact_iconbox">
                  <div class="iconbox_icon">
                    <img src="assets/img/icon/location-add.svg" alt="Location SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h2 class="iconbox_title">Our Location</h2>
                    <p>
                      Guru Nanak Colleg Jhajra
                    </p>
                    <h3>Dehradun, 248007</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact end -->

    </main>
</div>
<?php require "common/footer.php" ?>
<script>
  if (window.location.search.includes('success=')) {
    window.history.replaceState(null, null, window.location.pathname);
  }
</script>
