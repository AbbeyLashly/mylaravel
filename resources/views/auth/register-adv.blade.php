<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AgroProjects | Registration </title>

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


        <div class="col-md-8 col-md-offset-2" style="margin-top:120px;">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class=""><a href="#" class="text-success"><strong>AgroProjects</strong></a><small class="panel-hint pull-right"> Fill in your details below | <a href="{{route('index')}}" > <strong class="already">Already registered</strong></a></small></h4>
            </div>

            <div class="panel-body">
              <form class="" action="#" method="post">
                <div class="form-group col-md-4 col-sm-6">
                          <label for="name">Name*	</label>
                          <input type="text" class="form-control input-sm" id="name" placeholder="">
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    <label for="email">Email*</label>
                    <input type="email" class="form-control input-sm" id="email" placeholder="">
                </div>

                <div class="form-group col-md-4 col-sm-6">
                    <label for="mobile">Mobile*</label>
                    <input type="text" class="form-control input-sm" id="mobile" placeholder="">
                </div>



                   <div class="form-group col-md-4 col-sm-6">
                             <label for="city">City*</label>
                             <input type="text" class="form-control input-sm" id="city" placeholder="">
                         </div>

                 	<div class="form-group col-md-4 col-sm-6">
                             <label for="state">State*</label>
                             <input type="text" class="form-control input-sm" id="state" placeholder="">
                         </div>

                 	<div class="form-group col-md-4 col-sm-6">
                             <label for="country">Country*</label>
                             <input type="text" class="form-control input-sm" id="country" placeholder="">
                         </div>



                   <div class="form-group col-md-4 col-sm-6">
                        <label for="address">Address*</label>
                        <textarea class="form-control input-sm" id="address" rows="3"></textarea>
                   </div>

                 	<div class="form-group">
                    <div class = "form-group col-md-2 col-sm-6">
                        <label for="name">Day*	</label>
                          <select class="form-control input-sm" id="years">
                         		<option>-- Select No of Year --</option>
                         		<option>1</option>
                         		<option>2</option>
                         		<option>3</option>
                         		<option>4</option>
                         		<option>5</option>
                         		<option>6</option>
                         		<option>7</option>
                         		<option>8</option>
                         		<option>9</option>
                         		<option>10</option>
                   	      </select>

                   	</div>

                   	<div class = "form-group col-md-3 col-sm-6">
                      <label for="name">Month*</label>
                         <select class="form-control input-sm" id="months">
                       		<option>-- Select No of Month --</option>
                       		<option>1</option>
                       		<option>2</option>
                       		<option>3</option>
                       		<option>4</option>
                       		<option>5</option>
                       		<option>6</option>
                       		<option>7</option>
                       		<option>8</option>
                       		<option>9</option>
                       		<option>10</option>
                 	      </select>

                    </div>

                    <div class = "form-group col-md-3 col-sm-6">
                        <label for="name">Year*</label>
                         <select class="form-control input-sm" id="months">
                       		<option>-- Select No of Month --</option>
                       		<option>1</option>
                       		<option>2</option>
                       		<option>3</option>
                       		<option>4</option>
                       		<option>5</option>
                       		<option>6</option>
                       		<option>7</option>
                       		<option>8</option>
                       		<option>9</option>
                       		<option>10</option>
                 	      </select>

                    </div>

                 	</div>




              </form>

            </div>

            <div class="panel-footer panel-success">
              <strong class="already">Instructions</strong>:
            </div>
          </div>
        </div>


        {{-- <div class="footer-bottom">

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

        </div> --}}
    </body>
</html>
