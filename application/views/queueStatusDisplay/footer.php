<style>
  .footer {
    height: 8vh;
    /*background-image: url('./assets/resources/header2.png');*/
    background-size: cover;
    /* Makes the background cover the header */
    background-position: center;
    /* Centers the image */
    background-repeat: no-repeat;
    /* Prevents the image from repeating */
    height: 8vh;
    /* Adjust as needed */
    color: white;
    /* To make the text stand out */
    background-color: #1b4bb0;
  }

  #marqueeSlide {
    overflow: hidden;
    position: relative;
    height: 100%;
    /* Adjust height if needed */
  }

  #marqueeSlide p {
    position: relative;
    white-space: nowrap;
    animation: marquee 40s linear infinite;
  }

  @keyframes marquee {
    0% {
      transform: translateX(200%);
    }

    100% {
      transform: translateX(-200%);
    }
  }
</style>

<footer id="footerMarquee" class="footer">
</footer><!-- End Footer -->

<script src="./assets/js/digitalClock.js"></script>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="./assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/vendor/chart.js/chart.umd.js"></script>
<script src="./assets/vendor/echarts/echarts.min.js"></script>
<script src="./assets/vendor/quill/quill.js"></script>
<script src="./assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="./assets/vendor/tinymce/tinymce.min.js"></script>
<script src="./assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="./assets/js/main.js"></script>
<script>
  $(document).ready(function() {
    loadFooterMarquee();
    setInterval(loadFooterMarquee, 1000); // Check for updates every 10 seconds
  });

  let previousContent = '';

  function loadFooterMarquee() {
    $.ajax({
      url: '<?= base_url('qsdFooterMarquee') ?>',
      type: 'GET',
      success: function(data) {
        if (data !== previousContent) {
          $('#footerMarquee').html(data);
          previousContent = data;
        }
      },
      error: function(xhr, status, error) {
        console.error("Error: " + error);
      }
    });
  }
</script>

</body>

</html>