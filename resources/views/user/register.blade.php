@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<section>
    <div class="cs_height_150 cs_height_lg_72"></div>
    <div class="container">
      <div class="row cs_gap_y_50">
        <div class="col-lg-6">
          <div class="cs_pr_100">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Register</p>
              <h2 class="cs_fs_67 cs_mb_18">Become a part of our Family Today!</h2>
              <!-- <p class="mb-0">Reach out to us via phone, email, or through our convenient online form.  We look forward to hearing from you and helping you plan your  unforgettable experience at Seapearl Resort.</p> -->
            </div>
   <div class="cs_height_37 cs_height_lg_37"></div>
<form action="login.php" method="POST" class="cs_form cs_style_2" onsubmit="return validateForm()">
  <label>Username*</label>
  <input type="text" name="username" class="cs_form_field_2 cs_radius_20" required>

  <div class="cs_height_16 cs_height_lg_16"></div>
  <label>Email*</label>
  <input type="email" name="email" id="email" class="cs_form_field_2 cs_radius_20" required>
  <small id="emailError" style="color: red;"></small>

  <div class="cs_height_16 cs_height_lg_16"></div>
  <label>Password*</label>
  <div class="password-wrapper">
      <input type="password" name="password" id="password" class="cs_form_field_2 cs_radius_20" required>
      <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
  </div>

  <div class="cs_height_25 cs_height_lg_25"></div>
  <label>Confirm Password*</label>
  <div class="password-wrapper">
      <input type="password" name="confirm_password" id="confirm_password" class="cs_form_field_2 cs_radius_20" required>
      <span class="toggle-password" onclick="togglePassword('confirm_password')">👁️</span>
  </div>
  <small id="passwordError" style="color: red;"></small>

  <div class="cs_height_25 cs_height_lg_25"></div>
  <button type="submit" name="register" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
      Register
      <span>
                  <i>
                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                    </svg>
                  </i>
                  <i>
                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                    </svg>
                  </i>
                </span>
  </button>
</form>

<script>
function validateForm() {
  // Email validation (must end with .com, .net, .org, etc.)
  var email = document.getElementById("email").value;
  var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (!emailPattern.test(email)) {
      document.getElementById("emailError").innerText = "Invalid email format!";
      return false;
  } else {
      document.getElementById("emailError").innerText = "";
  }

  // Password match validation
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm_password").value;
  if (password !== confirmPassword) {
      document.getElementById("passwordError").innerText = "Passwords do not match!";
      return false;
  } else {
      document.getElementById("passwordError").innerText = "";
  }

  return true;
}

// Show/Hide password function
function togglePassword(fieldId) {
  var field = document.getElementById(fieldId);
  if (field.type === "password") {
      field.type = "text";
  } else {
      field.type = "password";
  }
}
</script>

<style>
.password-wrapper {
  position: relative;
  display: flex;
  align-items: center;
}

.toggle-password {
  position: absolute;
  right: 10px;
  cursor: pointer;
}
</style>

                <!-- <b>Register</b>
                <span>
                  <i>
                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                    </svg>
                  </i>
                  <i>
                    <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                    </svg>
                  </i>
                </span>
              </button> -->
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_image_layer cs_style_3 position-relative">
            <img src="assets/img/contact_img copy.jpg" alt="Contact" class="cs_radius_5">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Start Contact Info -->
  <section>
    <div class="cs_height_150 cs_height_lg_72"></div>
    <div class="container">
      <!-- <div class="cs_contact_info_boxes">
        <div class="cs_contact_info_box">
          <div class="cs_iconbox cs_style_4">
            <div class="cs_iconbox_icon cs_center rounded-circle">
              <img src="assets/img/icons/contact_icon_1.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_right">
              <h3 class="cs_fs_28 cs_mb_5">SeaPearl Address</h3>
              <p class="mb-0">452 15h Street, Office 741, Ohio, De 47754, USA</p>
            </div>
          </div>
        </div>
        <div class="cs_contact_info_box">
          <div class="cs_iconbox cs_style_4">
            <div class="cs_iconbox_icon cs_center rounded-circle">
              <img src="assets/img/icons/contact_icon_2.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_right">
              <h3 class="cs_fs_28 cs_mb_5">Email address</h3>
              <p class="mb-0"><a href="mailto:info@seapearl.com">info@seapearl.com</a></p>
            </div>
          </div>
        </div>
        <div class="cs_contact_info_box">
          <div class="cs_iconbox cs_style_4">
            <div class="cs_iconbox_icon cs_center rounded-circle">
              <img src="assets/img/icons/contact_icon_3.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_right">
              <h3 class="cs_fs_28 cs_mb_5">For Reservation</h3>
              <p class="mb-0"><a href="tel:+214544512009">+21 454 451 2009</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="cs_height_5 cs_height_lg_5"></div>
  </section>

  @include('user.layouts.footer')
  @include('user.layouts.script')
  