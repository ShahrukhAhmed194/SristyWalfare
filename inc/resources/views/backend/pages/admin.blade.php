@extends('backend.layouts.template')

  @section('content')
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/FoundationLogo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sristry Foundation</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Comment Box
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('requests')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Member Request
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('members')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Member List
              </p>
            </a>
          </li>                     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard</h1>
             <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col-sm-2">Name</th>
                  <th scope="col-sm-2">Email</th>
                  <th scope="col-sm-2">Subject</th>
                  <th scope="col-sm-2">Message</th>
                </tr>
              </thead>
              {{-- {{$infos}} --}}

              <tbody>
                
              @foreach($infos as $info)
              <tr>
                {{-- {{dd($skill)}} --}}
                <td>{{$info->name}}</td>
                <td>{{$info->email}}</td>
                <td>{{$info->subject}}</td>
                <td>{{$info->message}}</td>
              </tr>
              @endforeach
              </tbody>
          </table>
            {{-- @include('frontend.includes.employee') --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection