@extends('layout/layouthome')
@section('content')
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
      <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active"><a href="{{URL::to('admin')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="{{URL::to('userform')}}"><i class="fa fa-edit"></i> <span>Create User</span></a></li>
            <li><a href="{{URL::to('edituserform')}}"><i class="fa fa-search"></i> <span>Edit User</span></a></li>
            <li><a href="{{URL::to('paramform')}}"><i class="fa fa-plus "></i> <span>Input Parameter</span></a></li>
          </ul>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>Home</h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-6">
             <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Case Status</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 250px; position: relative;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            
            <div class="col-md-6">
              <!-- Donut chart -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Case Type Percentage</h3>
                </div>
                <div class="box-body">
                  <div id="donut-chart" style="height: 250px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
              </div>

              <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Case Statistic per Year</h3>
                  <div class="box-tools pull-right">
                    
                  </div>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
              </div>
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer> -->


     
@endsection