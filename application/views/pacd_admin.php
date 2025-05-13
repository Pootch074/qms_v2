<main id="main" class="main">

  <div class="pagetitle">
    <h1>PACD Admin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Admin</li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('qnd'); ?>">PACD</a></li>
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
              <h5 class="card-title">Category</h5>
              <a href="<?php echo base_url('createCat'); ?>" class="btn btn-primary">Add Category</a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($tbl_categories as $row) : ?>
                  <tr>
                    <td class="w-75"><?= $row->category_name; ?></td>
                    <td class="w-25">
                      <a href="<?= base_url('pacdEditCatFunc/' . $row->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                      <a href="<?= base_url('pacdDeleteCatFunc/' . $row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div><!--CATEGORY END-->

        <!--DIVISION-->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Divisions</h5>
              <a href="<?php echo base_url('createDiv'); ?>" class="btn btn-primary">Add Division</a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tbl_divisions as $row) : ?>
                  <tr>
                    <td class="w-70"><?= $row->division_name; ?></td>
                    <td class="w-25">
                      <a href="<?= base_url('pacdEditCatFunc/' . $row->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                      <a href="<?= base_url('pacdDeleteDivFunc/' . $row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this division?')">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div> <!--DIVISION END-->


        <!--SECTION-->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Sections</h5>
              <a href="<?php echo base_url('createSec'); ?>" class="btn btn-primary">Add Section</a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Division ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tbl_sections as $row): ?>
                  <tr>
                    <td><?= $row->division_id; ?></td>
                    <td class="w-70"><?= $row->section_name; ?></td>
                    <td class="w-25">
                      <a href="<?= base_url('pacdEditCatFunc/' . $row->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                      <a href="<?= base_url('pacdDeleteSecFunc/' . $row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this section?')">Delete</a>
                    </td>
                  </tr>

                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div> <!--SECTION END-->

        <!--SERVICES-->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Services</h5>
              <a href="<?php echo base_url('createServ'); ?>" class="btn btn-primary">Add Service</a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Section ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tbl_services as $row): ?>
                  <tr>
                    <td><?php echo $row->section_id; ?></td>
                    <td class="w-70"><?php echo $row->service_name; ?></td>
                    <td class="w-25">
                      <a href="<?= base_url('pacdEditCatFunc/' . $row->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                      <a href="<?= base_url('pacdDeleteServFunc/' . $row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                    </td>
                  </tr>

                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div> <!--SERVICES END-->




      </div>

    </div>
  </section>

</main>