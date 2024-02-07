  <!-- Signup modal content -->
  <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4"> <a href="index.html" class="text-success"> <span><img class="img-fluid" src="../landingpage/dist/images/logos/favicon.svg" alt=""></span> </a> </div>
                <form class="ps-3 pe-3 text-start" action="#">
                    <div class="mb-3"> <label for="username">Name</label> <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty"> </div>
                    <div class="mb-3"> <label for="emailaddress">Email address</label> <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com"> </div>
                    <div class="mb-3"> <label for="password">Password</label> <input class="form-control" type="password" required="" id="password" placeholder="Enter your password"> </div>
                    <div class="mb-3">
                        <div class="form-check"> <input type="checkbox" class="form-check-input" id="customCheck1"> <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label> </div>
                    </div>
                    <div class="mb-3 text-center"> <button class="btn btn-primary" type="submit"> Sign Up Free </button> </div>
                </form>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<!-- SignIn modal content -->
<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4"> <a href="index.html" class="text-success"> <span><img class="img-fluid" src="../landingpage/dist/images/logos/favicon.svg" alt=""></span> </a> </div>
                <form action="#" class="ps-3 pe-3 text-start">
                    <div class="mb-3"> <label for="emailaddress1">Email</label> <input class="form-control" type="email" id="emailaddress1" required="" placeholder="Email@gmail.com"> </div>
                    <div class="mb-3"> <label for="password1">Password</label> <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password"> </div>
                    <div class="mb-3">
                        <div class="form-check"> <input type="checkbox" class="form-check-input" id="customCheck2"> <label class="form-check-label" for="customCheck2">Remember me</label> </div>
                    </div>
                    <div class="mb-3 text-center"> <button class="btn btn-rounded btn-primary" type="submit"> Sign In </button> </div>
                </form>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<div class="button-group">
    <!-- Custom width modal --> <button type="button" class="btn  me-1 btn-success" data-bs-toggle="modal" data-bs-target="#signup-modal" fdprocessedid="mb0mrj"> Sign Up Modal </button> 
    <!-- Full width modal -->   <button type="button" class="btn mb-1 me-1 btn-light" data-bs-toggle="modal" data-bs-target="#login-modal" fdprocessedid="8q33om"> Log in Modal </button>
</div>
@include('component.script')