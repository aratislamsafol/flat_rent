<!-- Navbar Search -->
<div class="modal fade" id="search_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <input type="search" id="form1" class="form-control" placeholder="Search" />
      </div>
      </div>
  </div>
</div>
<!-- Login -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
		<div class="modal-content">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title m_t_color" id="exampleModalLabel">Login</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Email or Username</label>
            <input type="text" name="user_email" class="form-control" />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="user_pass" class="form-control" />
          </div>
          <div class="forget">
            <a href="">forget account?</a>
          </div>
          
				</div>
				<div class="modal-footer">
					<button type="submit" name="login_req" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Create Account -->
<div class="modal fade" id="Signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
		<div class="modal-content">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title m_t_color" id="exampleModalLabel">Create Account</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="" class="form-label">First Name</label>
              <input type="text" name="u_fname" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label for="" class="form-label">Last Name</label>
              <input type="text" name="u_lname" class="form-control" />
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label for="gender" class="form-label">Gender:</label>
                <select name="user_gender" class="form-select">
                  <option value="" selected>--Select--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="" class="form-label">Mobile</label>
              <input type="text" name="u_mobile" class="form-control" />
            </div>
            <div class="col-md-6 mb-3">
              <label for="post_img_1" class="form-label">Upload Photos:</label>
              <input type="file" name="user_img_1" class="form-control" />
            </div>
          </div>
          
          <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="text" name="user_email" class="form-control" />
          </div>

          <div class="mb-3">
						<label for="" class="form-label">Password</label>
						<input type="text" name="u_pass" class="form-control" />
					</div>

          <div class="mb-3">
						<label for="" class="form-label">Confirm Password</label>
						<input type="password" name="user_pass" class="form-control" />
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" name="login_req" class="btn btn-primary">SignUp</button>
				</div>
			</form>
		</div>
	</div>
</div>
