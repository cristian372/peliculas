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
                        <a   href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-venus "></i>UI Elements </a>
                        
                    </li>
                    
                    <li>
                        <a class="active-menu" href="table.html"><i class="fa fa-bolt "></i>Data Tables </a>
                        
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
                        <a  href="blank.html"><i class="fa fa-dashcube "></i>Blank Page</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div class="reviews-section">
            <h3 class="head">Movie Review</h3>
            <div class="col-md-9 reviews-grids">
            @foreach($movies as $movie)
                <div class="review">
                    <div class="movie-pic">                       
                        <img src="movies/{{$movie->duracion}}" style="width: 400px"  />
                    </div>
                    <div class="review-info">
                        <a class="span" href="single.html">
                        <i>{{$movie->name}}</i></a>
                        <p class="info">CAST:&nbsp;&nbsp;{{$movie->cast}}</p>
                        <p class="info">DIRECCION:&nbsp;&nbsp;{{$movie->direccion}}</p>
                        <p class="info">GENERO:&nbsp;&nbsp;{{$movie->genero}}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
            </div>
        </div>



@stop