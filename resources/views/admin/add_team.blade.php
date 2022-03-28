<!DOCTYPE html>
<html lang="en">
  <head>
      <style type="text/css">
        label {
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

            <div class="container"  style="padding-top: 100px">

                @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    X
                </button>
                {{ session()->get('message') }}

            </div>
            @endif
                
                <form action="{{ url('upload_team') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label style="display: inline-block; width: 200px" for="">Name</label>
                        <input type="text" name="name" style="color:black" placeholder="Name" required="">
                    </div>

                    <div style="padding:15px">
                        <label style="display: inline-block; width: 200px" for="">Phone Number</label>
                        <input type="number" name="number" style="color:black" placeholder="Phone Number" required="">
                    </div>

                    <div style="padding:15px">
                        <label style="display: inline-block; width: 200px" for="">Speciality</label>
                        <select name="speciality" style="width: 200px; color:black" >
                            <option value="">--Select--</option>
                            <option value="CEO">CEO</option>
                            <option value="COO">COO</option>
                            <option value="HR">HR</option>
                            <option value="HoD">HoD</option>
                        </select>
                    </div>

                    <div style="padding:15px">
                        <label style="display: inline-block; width: 200px" for="">Image</label>
                        <input type="file" name="file" required="">
                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>