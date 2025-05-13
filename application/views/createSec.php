<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('pacdAdmin');?>">Admin</a></li>
          <li class="breadcrumb-item active">Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            
        <!--CATEGORY-->
          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Please input</h5>
                    <a href="<?php echo base_url('pacdAdmin');?>" class="btn btn-danger float-right">Back</a>
                </div>
              <form class="row g-3" action="<?php echo base_url('pacdCreateSecFunc');?>" method="POST">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Section Name</label>
                  <input type="text" name="secName" class="form-control" id="secName">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div><!--CATEGORY END-->



            

            




        </div>

      </div>
    </section>

  </main>