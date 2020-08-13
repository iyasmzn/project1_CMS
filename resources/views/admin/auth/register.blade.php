<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Register page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    @include('admin.layouts.link')

    <!--=================================================-->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">


		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>


		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Create a New Account</h1>
		                <p>Come join the Nifty community! Let's set up your account.</p>
		            </div>
		            <form action="{{ route('register') }}" method="post">
		            	@csrf
		                <div class="row">
		                    <div class="col-sm-12">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Username" name="name">
		                        </div>
		                    </div>
		                    <div class="col-sm-12">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="E-mail" name="email">
		                        </div>
		                        <div class="form-group">
		                            <input type="password" class="form-control" placeholder="Password" name="password">
		                        </div>
		                    </div>
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">I agree with the <a href="#" class="btn-link text-bold">Terms and Conditions</a></label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
		            </form>
		        </div>
		        <div class="pad-all">
		            Already have an account ? <a href="/login" class="btn-link mar-rgt text-bold">Sign In</a>

		            <div class="media pad-top bord-top">
		                <div class="pull-right">
		                    <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
		                    <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
		                </div>
		                <div class="media-body text-left text-main text-bold">
		                    Sign Up with
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--===================================================-->

    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->



    <!--JAVASCRIPT-->
    <!--=================================================-->

    @include('admin.layouts.java')

    <!--=================================================-->


</body>
</html>
