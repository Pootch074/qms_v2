<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped" id="userAcc">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th>Name</th>
              <th>Employee ID</th>
              <th>Role</th>
              <th class="text-center">Step</th>
              <th class="text-center">Window</th>
              <th>Category</th>
              <th>Action</th>
              <!-- <th class="text-center">Status</th> -->
            </tr>
          </thead>
          <tfoot class="table-border-bottom-0">
            <tr>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <!--/ Striped Rows -->
  </div>
  <!-- / Content -->
</div>
<!-- Content wrapper -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    var table = new DataTable('#userAcc', {
      paging: false,
      scrollCollapse: true,
      scrollY: '500px',
      order: [
        [0, 'desc']
      ],
      ajax: '<?= base_url('jsonFetchAccReq'); ?>',
      columns: [{
          data: "id",
          className: "text-center"

        },
        {
          data: null,
          render: function(data, type, row) {
            return row.fname + ' ' + row.lname;
          }
        },
        {
          data: "employee_id",
        },
        {
          data: "role",
        },
        {
          data: "ass_step",
          className: "text-center"
        },
        {
          data: "ass_window",
          className: "text-center"
        },
        {
          data: "ass_category",

        },
        {
          data: "status",
          render: function(data, type, row) {
            return `
                                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Approve
                        </button>

                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="<?= base_url('accReqAddPass') ?>" method="post" class="modal-content">
                                <div class="modal-header">
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>

                              <div class="modal-body">
                              <input type="hidden" name="user_id" value="${row.id}">
                                <div class="row">

                                  <div class="col mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" required class="form-control" placeholder="Enter Password" />
                                  <div class="invalid-feedback">
                                        Please enter your password!
                                    </div>
                                    </div>

                                  <div class="col mb-3">
                                    <label for="cpassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" required class="form-control" placeholder="Enter Confirm Password" />
                                  </div>



                                </div>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                                `;
          }

        }


      ]
    });
  });
</script>