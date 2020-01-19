<?php  include_once ('header.php')?>

<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="Dashboard.php">
                        <img class="align-content" src="<?php echo base_url(); ?>images/school.jpg" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button onClick="login()" type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="social-login-content">

                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

<script>
        function login(){
            alert('Login');
            var objData = {};
            objData['status'] = 1; //a.valu e;
            objData['id'] = 2; //b;
            $(".alert-danger").css('display', 'none');
            $(".alert-success").css('display', 'none');
            var statusArray = ['Pending', 'Approved', 'Rejected'];
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('index.php/users/validateLogin'); ?>",
                data: objData,
                success: function(response){
                    alert(response);
                    alert("Success ......!");
                    document.getElementById("demo"+b).innerHTML = statusArray[a.value];
                    $(".alert-danger").css('display', 'none');
                    $(".alert-success").css('display', 'block');
                },
                error: function(e) {
                    alert("Some Error Occured..!");
                    $(".alert-danger").css('display', 'block');
                    $(".alert-success").css('display', 'none');
                    console.log(e.status);
                }
            });
        }
</script>

</html>
