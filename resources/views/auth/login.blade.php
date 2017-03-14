<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AgroProjects</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <nav class="navbar navbar-inverse danger navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}"><strong class="text-white">AgroProjects</strong></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="container container-table">
		        <div class="row vertical-center-row">
              <div class="col-sm-12 col-md-4 col-md-offset-4 ">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h4 class=""><strong>AgroProjects</strong><small class="pull-right panel-hint">Administrator Login</small></h4>
                  </div>
                  <div class="panel-body">
                    <form class="" action="" method="post">
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" placeholder="Enter your Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Username">Password</label>
                        <input type="password" name="password" placeholder="Enter your Password" class="form-control">
                    </div>
                    <button type="button" name="button" class="btn btn-success">Login</button>


                    </form>
                  </div>
                  <div class="panel-footer">
                    <div class="footer-links">
                      <a href="#" class="text-success">Forgot my password</a>
                      <a href="{{route('register')}}" class="pull-right text-success">Register</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>

        <div class="footer-bottom">

        	<div class="container">

        		<div class="row">

        			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        				<div class="copyright">

        					© 2015, Agroprojects, All rights reserved

        				</div>

        			</div>

        			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        				<div class="design">

        				 <a target="_blank" href="#">Development by AbbeyLashly</a>

        				</div>

        			</div>

        		</div>

        	</div>

        </div>
    </body>
</html>
