@extends('layouts.principal')

@section('content')

        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.jpg" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> Romelia Alexendra </strong></a>
                    </li>

                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-venus "></i>UI Elements </a>
                        
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-bolt "></i>Data Tables </a>
                        
                    </li>
                   
                     
                     <li>
                        <a href="forms.html"><i class="fa fa-code "></i>Forms</a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-cogs "></i>Second  Link</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-bullhorn "></i>Second Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third  Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-dashcube "></i>Blank Page</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            This is a free admin dashboard temple for personal and commercial use. Use this template for your projecs and save you money and time. Hope you will like it.
                        </div>
                    </div>
                </div>
                <div class="row">
            <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-one">
                            <a href="#">
                                <span class="glyphicon glyphicon-headphones"></span>
                                 <h5>Some Sample Text</h5>
                            </a>
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-two">
                            <a href="#">
                                <span class="glyphicon glyphicon-repeat"></span>
                                 <h5>Some Sample Text</h5>
                            </a>
                        </div>
                        </div>
             <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-three">
                            <a href="#">
                                <span class="glyphicon glyphicon-camera"></span>
                                 <h5>Some Sample Text</h5>
                            </a>
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-four">
                            <a href="#">
                                <span class="glyphicon glyphicon-cog"></span>
                                <h5>Some Sample Text</h5>
                            </a>
                        </div>
                        </div>      
            </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            This is a free admin dashboard temple for personal and commercial use. Use this template for your projecs and save you money and time. Hope you will like it.
                        </div>
                    </div>
                </div>
                <div class="row">
            <div class=" col-md-4 col-sm-4">
                <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Username</th>
                                        <th>User No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>1</td>
                                        <td><span class="label label-primary">Lolo Bird</span></td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>100090</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>4</td>
                                        <td><span class="label label-primary">the Bird</span></td>
                                        <td>@twitter</td>
                                        <td>100090</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><span class="label label-success">Thornton</span></td>
                                        <td>@fat</td>
                                        <td><span class="label label-danger">100090</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>6</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><span class="label label-info">100090</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                <div class="alert  alert-info">
                    <div class="current-notices">

                            <h3>Current Notices :</h3>
                    <hr />
                    <ul>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                    </ul>
                        </div>
                        </div>

                        </div>
              
             
              <div class=" col-md-8 col-sm-8">
                  <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">List Group Heading</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </a>
                        </div>
                  <br />
                <h2> Bootstrap Media Objects</h2>
                    <br />

                    <div class="media">
      <a class="media-left" href="#">
          <img src="assets/img/1.jpg" alt="" class="img-rounded" />
      </a>
      <div class="media-body">
        <h4 class="media-heading">Media heading </h4>
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
      </div>
    </div>
    <div class="media">
      <a class="media-left" href="#">
          <img src="assets/img/2.jpg" alt="" class="img-rounded" />
      </a>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
        <div class="media">
          <a class="media-left" href="#">
              <img src="assets/img/1.jpg" alt="" class="img-rounded" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Nested media heading</h4>
           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
          </div>
        </div>
      </div>
    </div>
    
          
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

@stop