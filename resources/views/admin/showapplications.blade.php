<!DOCTYPE html>
<html lang="en">
  <head>
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
         
        <div style="padding-top: 100px">

          <table>
            <tr style="background-color: black">

              <th style="padding: 10px">Applicant Name</th>
              <th style="padding: 10px">email</th>
              <th style="padding: 10px">CV File</th>
              <th style="padding: 10px">Position</th>
              <th style="padding: 10px">Phone number</th>
              <th style="padding: 10px">Message</th>
              <th style="padding: 10px">Delete</th>
              <th style="padding: 10px">Update</th>

            </tr>

            @foreach ( $data as $data)
              
            <tr>

              <td style="padding: 10px">{{ $data -> name }}</td>
              <td style="padding: 10px">{{ $data -> email }}</td>
              <td><img src="applicationimage/{{$data->image}}" style="height: 100px; width:100px"></td>
              <td style="padding: 10px">{{ $data -> position }}</td>
              <td style="padding: 10px">{{ $data -> number }}</td>
              <td style="padding: 10px">{{ $data -> message }}</td>
              <td style="padding: 10px"><a onclick="return confirm('Do you want to delete this application?')" class="btn btn-danger" href="{{ url('deleteapplication', $data->id) }}">Delete</a></td>
              <td style="padding: 10px"><a class="btn btn-primary" href="{{ url('updateapplication', $data->id) }}">Update</a></td>

            </tr>
            @endforeach

          </table>
        </div>
       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>