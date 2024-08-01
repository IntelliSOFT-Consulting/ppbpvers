<?php
$this->assign('Login', 'active');
echo $this->Html->css('compatibility_hacks', array('inline' => false));
echo $this->Html->css('upgrade', array('inline' => false));
?>

<!-- LOGIN
================================================== -->
<section id="loginform">
    <div class="row-fluid">
        <div class="span12">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Login Area</a></li>
                <li><?php echo $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forgotPassword')); ?></li>
                <?php if ($this->request->getSession()->read('Auth.User')) { ?>
                    <li><?php echo $this->Html->link('Change Password', array('controller' => 'users', 'action' => 'changePassword')); ?></li>
                <?php } ?>
            </ul>

            <div class="whmcscontainer">
                <div class="contentpadded">
                    <div class="halfwidthcontainer">

                        <div class="page-header">
                            <div class="styled_title">
                                <h1>Login</h1>
                            </div>
                        </div>

                        <?php
                        echo $this->Flash->render();
                        echo $this->Form->create(null,['type'=>'post']);
                        ?>
                        <div class="logincontainer">
                            <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
                            <fieldset>
                                <div class="clearfix">
                                    <label for="username">Username</label>
                                    <div class="input">
                                        <input type="text" id="UserUsername" placeholder="Username/Email" maxlength="255" class="span10" name="username">
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <label for="password">Password:</label>
                                    <div class="input">
                                        <input type="password" id="UserPassword" placeholder="Password" class="span10" name="password">
                                    </div>
                                </div>

                                <div align="center">
                                    <div class="loginbtn"><input class="btn primary" value="Login" type="submit"></div>
                                    <div class="rememberme">
                                        <input name="rememberme" type="checkbox"> Remember Me
                                    </div>
                                    <br>
                                    <br>
                                    <p class="visible-desktop"><?php echo $this->Html->link('Forgot Password? click here to recover', array('controller' => 'users', 'action' => 'forgotPassword')); ?></p>
                                </div>

                            </fieldset>

                        </div>
                        <?php
                        echo $this->Form->end();
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row-fluid">
        <div class="blank_login"></div>
    </div>

</section>