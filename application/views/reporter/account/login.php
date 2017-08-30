
    <div class="panel card">
        <div class="card-header">
         <div class="row">
                <div class="col-md-6">
            <h4>Login Masuk</h4>
            </div>
             <div class="col-md-6">
            <h4>Membuat Akun</h4>
            </div>
            </div>
        </div>
        <div class="panel-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="<?php echo base_url('account/login'); ?>">
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email address" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" />
                        </div>
                        <button type="suubmit" class="btn btn-primary">Log in</button> <a href="<?php echo base_url('account/retrieve'); ?>">Forgot password?</a>
                    </form>
                </div>
                <div class="col-md-6">
                    <p class="alert bg-info">Belum punya Akun? jangan kawatir. Daftar dibawah. Hanya beberapa menit.</p>
                    <form method="post" action="<?php echo base_url('account/signup'); ?>" class="form-inline center">
                        <div class="form-group">
                            
                            <input type="email" name="email" id="signup_email" placeholder="Email kamu ..." class="form-control" />
                        </div> &nbsp;
                        <button type="submit" class="btn btn-success">Sign up</button>
                    </form>
                </div>
            </div>
        
        </div>
        <div class="card-footer"></div>
    </div>
