  <!-- Modal Sing-up-->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="signupModalLabel">Sign-Up</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    
                    <form  class="form-horizontal" action="<?=site_url('reg-save')?>" method="POST" id="reg-form" name="reg-form">
                        <div class="mb-3">
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                       
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <div>Already a user? <span class="btn text-success" data-bs-toggle="modal" data-bs-target="#signupModa2" data-bs-dismiss="modal">Sign-in</span></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 

     <!-- Modal Login-->
     <div class="modal fade" id="signupModa2" tabindex="-1" aria-labelledby="signupModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="signupModalLabel2">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="form-horizontal" action="<?=site_url('dologin')?>" method="POST" id="login-form" name="login-form">
                        
                        <div class="mb-3 is-valid">
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your email" required>
                            <span class="error-text-login text-danger"></span>

                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>