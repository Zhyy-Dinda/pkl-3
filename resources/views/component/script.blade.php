<script src="dist/libs/jquery/dist/jquery.min.js"></script>
  <script src="dist/libs/aos/dist/aos.js"></script>
  <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="dist/js/custom.js"></script>
  <script>
    // change URL Js
    $(function () {
      let currentURL =
        window.location != window.parent.location
          ? document.referrer
          : document.location.href;
      if (currentURL == "https://themeforest.net/") {
        $("a.download-link").attr(
          "href",
          "#"
        );
      } else {
        $("a.download-link").attr(
          "href",
          "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
        );
      }
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>