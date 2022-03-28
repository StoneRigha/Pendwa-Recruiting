<!DOCTYPE html>
<html lang="en">
  <head>

      <base href="/public">
    
      <style>
          label{
              display: inline-block;
              width: 200px;
          }
      </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial nav bar-->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    X
                </button>
                {{ session()->get('message') }}

            </div>
            @endif

            <div class="container" style="padding: 100px">

                <form action="{{ url('editapplication', $data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding 15px">
                        <label for="">name</label>
                        <input type="text" name="name" style="color: black" value="{{ $data->name }}">
                    </div>

                    <div style="padding 15px">
                        <label for="">email</label>
                        <input type="text" name="email" style="color: black" value="{{ $data->email }}">
                    </div>

                    <div style="padding 15px">
                        <label for="">position</label>
                        <input type="text" name="position" style="color: black" value="{{ $data->position }}">
                    </div>

                    <div style="padding 15px">
                        <label for="">number</label>
                        <input type="text" name="number" style="color: black" value="{{ $data->number }}">
                    </div>

                    <div style="padding 15px">
                        <label for="">message</label>
                        <input type="text" name="message" style="color: black" value="{{ $data->message }}">
                    </div>

                    <div style="padding 15px">
                        <label for="">old file</label>
                        <img height="150" width="150" src="applicationimage/{{ $data->image }}" alt="">
                    </div>

                    <div style="padding 15px">
                        <label for="">change file</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding 15px">
                        
                        <input type="submit" class="btn btn-primary ">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>