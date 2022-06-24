@extends('layouts.app')
@include('includes.header')
@include('includes.sidenav')
@section('body')
  <body>
    <section class="section">
      <div class="container-fluid">
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">

            <div class="col-md-6">
              <div class="title mb-30">
                <h2>Project Head's Dashboard</h2>
                {{-- <h2>Project Head: {{Session::get('admin')}}'s Dashboard</h2> --}} 
              </div>
            </div>
            <!-- end col -->

            <div class="col-md-6">
              <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#0">Dashboard</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                      Head
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- end col -->

          </div>
          <!-- end row -->
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon purple">
                <i class="lni lni-cart-full"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Total Projects</h6>
                <h3 class="text-bold mb-10">{{$project_count}}</h3>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->

          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon success">
                <i class="lni lni-dollar"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Total Tasks</h6>
                <h3 class="text-bold mb-10">{{$task_count}}</h3>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->

          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon primary">
                <i class="lni lni-credit-cards"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Total Users</h6>
                <h3 class="text-bold mb-10">{{$user_count}}</h3>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->

          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon orange">
                <i class="lni lni-user"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">New Users</h6>
                <h3 class="text-bold mb-10">{{$pending_count}}</h3>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
        </div>
      </div>
    </section>
  </body>
@endsection