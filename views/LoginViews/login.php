<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img width="640" height="640" src="https://gosub.ooona.net/wp-content/uploads/2021/08/login-page-01.svg" class="attachment-large size-large wp-image-2090" alt="" loading="lazy">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <div id="email-error" style="color: red" hidden></div>
            <input type="email" id="email-username" class="form-control form-control-lg" />
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <div id="pass-error" style="color: red" hidden></div>
            <input type="password" id="pass" class="form-control form-control-lg" />
            <label class="form-label" for="pass">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>
        </form>
         
        <div class="alert alert-danger" role="alert" id="warning-alert" hidden></div>
        <!-- Submit button -->
        <button class="btn btn-primary btn-lg btn-block" id="login">Login</button>
      </div>
    </div>
  </div>
</section>