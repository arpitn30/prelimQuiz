
<!--Navbar-->
<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar bg-transparent">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>

    </button>

    <div class="container">
        <?php $this->renderFlashMessages(); ?>

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a class="navbar-brand" href="/" style="font-weight: 100"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbsp Back </a>
            <a class="navbar-brand" style="float: right;font-weight: 100 " href="/index/instructions"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp Instruction</a>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>
<!--/.Navbar-->


<!--Mask-->
<div class="view hm-black-light">
    <div class="full-bg-img flex-center" >
        <form action="/register/action" method="POST">
            <ul  style="margin: 40px">
                <li style="margin: 40px">
                    <h1 class="h1-responsive wow fadeInUp title" >Hey, Start your <?= ($this->quizName) ?? "CodeRush" ?> Test Level 0</h1></li>
                <li>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control" name="username" required>
                                <label for="form1">Username</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="text" id="form2" class="form-control" name="name" required>
                                <label for="form2">Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-form">
                                <input type="email" id="form3" class="form-control" name="email" required>
                                <label for="form3">Email</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="md-form">
                                <input type="text" id="form4" class="form-control" name="phone" required>
                                <label for="form4">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="md-form">
                                <input type="password" id="form5" class="form-control" name="password">
                                <input type="hidden" name="token" id="token" value="<?= $this->request_token; ?>"/>
                                <label for="form5">Password</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="md-form">
                        <button type="submit" class="btn btn-default btn-rounded">Register</button></li>
    </div>

    </li>
    </ul>
    </form>
</div>
</div>
<!--/.Mask-->
