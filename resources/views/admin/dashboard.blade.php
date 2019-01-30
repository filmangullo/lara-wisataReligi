@extends('layouts.dashboardLayout')

@section('subhead')
<h2>DASHBOARD ADMIN</h2>    
@endsection

@section('isi')

        <div id="page-inner">             
            <div class="row text-center pad-top">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                       <a href="dashboards/artikelPost" >
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Post Artikel</h4>
                        </a>
                    </div>
                </div> 
             
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="dashboards/wisataPost" >
                            <i class="fa fa-clipboard fa-5x"></i>
                                <h4>Post Wisata</h4>
                            </a>
                    </div> 
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="dashboards/eventPost" >
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Post Event</h4>
                        </a>
                    </div> 
                </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                  <div class="div-square">
                       <a href="blank.html" >
<i class="fa fa-users fa-5x"></i>
                  <h4>See Users</h4>
                  </a>
                  </div>
                 
                 
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                  <div class="div-square">
                       <a href="blank.html" >
<i class="fa fa-key fa-5x"></i>
                  <h4>Admin </h4>
                  </a>
                  </div>
                 
                 
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                  <div class="div-square">
                       <a href="blank.html" >
<i class="fa fa-comments-o fa-5x"></i>
                  <h4>Support</h4>
                  </a>
                  </div>
                 
                 
              </div>
          </div>
                 
</div>
         <!-- /. PAGE INNER  -->

@endsection