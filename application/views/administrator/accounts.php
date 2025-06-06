<style>
  select.form-select,
  select.form-select option {
    color: #000 !important;
    background-color: #fff !important;
  }

  /* Optional: Improve contrast in dark modals */
  .modal .form-select,
  .modal .form-select option {
    color: #000 !important;
    background-color: #fff !important;
  }
</style>


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
    var table = $('#userAcc').DataTable({

      paging: false,
      scrollCollapse: true,
      scrollY: '500px',
      order: [
        [0, 'desc']
      ],
      ajax: '<?= base_url('jsonFetchAcc'); ?>',
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
                class="btn btn-danger btn-sm"
                data-bs-toggle="modal"
                data-bs-target="#deleteModal${row.id}"
                title="Delete">
                <i class='bx bx-trash'></i>
            </button>

            <div class="modal fade" id="deleteModal${row.id}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="${base_url}asdasddsa" method="post" class="modal-content">
                        <div class="modal-header">
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="${row.id}">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-center">Are you sure you want to delete this user?</h5>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                No
                            </button>
                            <button type="submit" class="btn btn-success">Yes</button>
                        </div>
                    </form>
                </div>
            </div>

            <button
                type="button"
                class="btn btn-info btn-sm"
                data-bs-toggle="modal"
                data-bs-target="#editModal${row.id}"
                title="Edit">
                <i class='bx bx-edit'></i>
            </button>

            <div class="modal fade" id="editModal${row.id}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="${base_url}cadfdfdf" method="post">
                    <div class="modal-header">
                        <h5>Edit user details</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="role" class="form-label">Name</label>
                                <div>Name</div>
                            </div>
                            <div class="col mb-0">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select text-dark" name="role" id="role${row.id}" aria-label="Role" required>
                                    <option disabled ${row.role ? '' : 'selected' }>Assign Role</option>
                                    <option class="text-dark" value="Preasses" ${row.role==='Preasses' ? 'selected' : '' }>Step 1 Preassesment</option>
                                    <option class="text-dark" value="Encoder" ${row.role==='Encoder' ? 'selected' : '' }>Step 2 Encode</option>
                                    <option class="text-dark" value="Assesment" ${row.role==='Assesment' ? 'selected' : '' }>Step 3 Assesment</option>
                                    <option class="text-dark" value="Release" ${row.role==='Release' ? 'selected' : '' }>Step 4 Release</option>
                                </select>
                                <div class="invalid-feedback">Please select your role!</div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <!-- Window Dropdown Wrapper -->
                            <div class="col mb-0" id="windowDropdownWrapper${row.id}">
                                <label for="window" class="form-label">Window</label>
                                <select class="form-select text-dark" name="window" id="window${row.id}" aria-label="Window" required>
                                    <option disabled selected>Assign Window</option>
                                    <option class="text-dark" value="1" ${row.ass_window === '1' ? 'selected' : ''}>1</option>
                                    <option class="text-dark" value="2" ${row.ass_window === '2' ? 'selected' : ''}>2</option>
                                    <option class="text-dark" value="3" ${row.ass_window === '3' ? 'selected' : ''}>3</option>
                                    <option class="text-dark" value="4" ${row.ass_window === '4' ? 'selected' : ''}>4</option>
                                </select>
                                <div class="invalid-feedback">Please select your window!</div>
                            </div>

                            <!-- Category Dropdown Wrapper -->
                            <div class="col mb-0" id="categoryDropdownWrapper${row.id}">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select text-dark" name="category" id="category${row.id}" aria-label="Category" required>
                                    <option disabled selected>Category</option>
                                    <option class="text-dark" value="Priority" <?= set_select('category', 'Priority'); ?>>Priority</option>
                                    <option class="text-dark" value="Regular" <?= set_select('category', 'Regular'); ?>>Regular</option>
                                </select>
                                <div class="invalid-feedback">Please select your category!</div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

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

<script>
  $(document).on('change', '[id^=role]', function() {
    const id = $(this).attr('id').replace('role', '');
    const role = $(this).val();
    const windowSelect = $(`#window${id}`);
    const windowWrapper = $(`#windowDropdownWrapper${id}`);
    const categoryWrapper = $(`#categoryDropdownWrapper${id}`);

    // Show all by default
    windowWrapper.show();
    categoryWrapper.show();

    // Hide all options first
    windowSelect.find('option').hide();

    if (role === "Preasses") {
      windowWrapper.hide();
    } else if (role === "Encoder") {
      windowSelect.find('option[value="1"], option[value="2"]').show();
    } else if (role === "Assesment") {
      windowSelect.find('option[value="1"], option[value="2"], option[value="3"], option[value="4"]').show();
    } else if (role === "Release") {
      windowSelect.find('option[value="1"], option[value="2"], option[value="3"]').show();
    }

    if (role === "Assesment" || role === "Release") {
      categoryWrapper.hide();
    }

    windowSelect.find('option:visible').first().prop('selected', true);
  });
</script>

<script>
  const base_url = "<?= base_url(); ?>";
</script>