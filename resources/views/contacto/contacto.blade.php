@extends('layouts.segundo')

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
                        <a   href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-venus "></i>UI Elements </a>
                        
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-bolt "></i>Data Tables </a>
                        
                    </li>
                   
                     
                     <li>
                        <a class="active-menu" href="forms.html"><i class="fa fa-code "></i>Forms</a>
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
                        <a  href="blank.html"><i class="fa fa-dashcube "></i>Blank Page</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                        {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                          <div class="form-group">
                            {!!Form::label('Nombre:')!!}
                            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
                          </div>
                          <div class="form-group">
                            {!!Form::label('Email:')!!}
                            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'email'])!!}
                          </div>
                          <div class="form-group">
                            {!!Form::label('Mensaje:')!!}
                            {!!Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'mensaje'])!!}
                          </div>
                          {!!Form::submit('SEND')!!}
                        {!!Form::close()!!}       
                        </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
@sendsection