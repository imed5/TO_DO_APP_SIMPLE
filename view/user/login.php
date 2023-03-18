<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center"><?php echo LANG_APP_NAME;?></div>
        <div class="card-body">
            <p class="login-box-msg"><?php echo LANG_SIGN_IN_INSTRUCTION;?></p>
            <form action="index.php?action=do_login" method="post">
                <?php if (isset($vars['error_message'])){ ?><b style="color:red;"><?php echo $vars['error_message'] ?></b> <?php } ?>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="<?php echo LANG_EMAIL;?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="pass" placeholder="<?php echo LANG_PASSWORD;?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                	<button type="submit" class="btn btn-primary"><?php echo LANG_LOGIN;?></button>
                </div>
            </form>
        </div>
        <p class="m-1">
        	<a href="index.php?action=signup" class="text-center"><?php echo LANG_SIGNUP_NOT_ACCOUNT;?></a>
        </p>
    </div>
</div>

