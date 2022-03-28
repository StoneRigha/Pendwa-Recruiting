<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Apply For A Position</h1>

      <form class="main-form" action="{{ url('application') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address...">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="file" name="file" placeholder="upload CV" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="position" id="departement" class="custom-select">
              <option value="Available Positions">Available Positions</option>
              <option value="Manager">Manager</option>
              <option value="Operations and production">Operations and production</option>
              <option value="Marketing">Marketing</option>
              <option value="Product Manager">Product Manager</option>
              <option value="Project Manager">Project Manager</option>
              <option value="Business Analyst">Business Analyst</option>
              <option value="Accountant">Accountant</option>
              <option value="Administrative assistant">Administrative assistant</option>
              <option value="Interns">Interns</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Phone Number...">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Write Cover Letter..."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> 