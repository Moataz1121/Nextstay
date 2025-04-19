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
              <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Login</p>
              <h2 class="cs_fs_67 cs_mb_18">Become a part of our Family Today!</h2>
              <!-- <p class="mb-0">Reach out to us via phone, email, or through our convenient online form.  We look forward to hearing from you and helping you plan your  unforgettable experience at Seapearl Resort.</p> -->
            </div>
   <div class="cs_height_37 cs_height_lg_37"></div>
   <div class="cs_height_37 cs_height_lg_37"></div>
<form action="Index.php" method="POST" class="cs_form cs_style_2" onsubmit="return validateLoginForm()">
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
  <button type="submit" name="login" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
      Login
  </button>
</form>

<script>
function validateLoginForm() {
  // Email validation (must end with .com, .net, .org, etc.)
  var email = document.getElementById("email").value;
  var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (!emailPattern.test(email)) {
      document.getElementById("emailError").innerText = "Invalid email format!";
      return false;
  } else {
      document.getElementById("emailError").innerText = "";
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

    <div class="cs_height_5 cs_height_lg_5"></div>
  </section>


  @include('user.layouts.footer')
  @include('user.layouts.script')