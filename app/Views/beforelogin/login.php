<?php echo view("beforelogin/beforeloginCss");?>
  <body class="horizontal-layout horizontal-top-icon-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar" data-open="hover" data-menu="horizontal-menu" data-col="1-column">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark navbar-border navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="robust admin logo" src="<?php echo base_url();?>/assets/app-assets/images/logo/logo-light-sm.png">
                <h3 class="brand-text">Robust Admin</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container">
          <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
            <ul class="nav navbar-nav">
              <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="index.html"><i class="ficon ft-arrow-left"></i></a></li>
              <li class="dropdown nav-item"><a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-settings"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
			<div class="card border-grey border-lighten-3 m-0">
				<div class="card-header border-0">
					<div class="card-title text-center">
						<img src="<?php echo base_url();?>/assets/app-assets/images/logo/logo-dark.png" alt="branding logo">
					</div>
					<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login with Robust</span></h6>
				</div>
				<div class="card-content">
					<div class="card-body">
					<?php if($validation){echo $validation->listErrors();}?>
						<form class="form-horizontal" action="<?php echo base_url();?>/login/login_check" method="post" novalidate>
							<fieldset class="form-group position-relative has-icon-left">
								<input type="text" class="form-control input-lg" id="user-name" name ="user-name"  placeholder="Your Username" tabindex="1" required data-validation-required-message= "Please enter your username.">
								<div class="form-control-position">
								    <i class="ft-user"></i>
								</div>
								<div class="help-block font-small-3"></div>
							</fieldset>
							<fieldset class="form-group position-relative has-icon-left">
								<input type="password" class="form-control input-lg" id="password" name= "password" placeholder="Enter Password" tabindex="2" required data-validation-required-message= "Please enter valid passwords.">
								<div class="form-control-position">
								    <i class="fa fa-key"></i>
								</div>
								<div class="help-block font-small-3"></div>
							</fieldset>
							<div class="form-group row">
								<div class="col-md-6 col-12 text-center text-md-left">
									<fieldset>
						                <input type="checkbox" id="remember-me" class="chk-remember">
						                <label for="remember-me"> Remember Me</label>
						            </fieldset>
								</div>
								<div class="col-md-6 col-12 text-center text-md-right"><a href="#" class="card-link">Forgot Password?</a></div>
							</div>
							<button type="submit" class="btn btn-danger btn-block btn-lg"><i class="ft-unlock"></i> Login</button>
						</form>
					</div>
				</div>
				<div class="card-footer border-0">
					<p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to Robust ?</span></p>
					<a href="register-advanced.html" class="btn btn-info btn-block btn-lg mt-3"><i class="ft-user"></i> Register</a>
				</div>
			</div>
		</div>
    </div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

   
 <?php echo view("beforelogin/beforeloginJs");?>