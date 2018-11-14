    <!-- Page Footer-->
    <script>
    	window.addEventListener('load', async e =>{
            if('serviceWorker' in navigator){
                try {
                    navigator.serviceWorker.register('./sw.js');
                    console.log('Service Worker registration successful');
                } catch (error){
                    console.log('Service Worker registration failed')
                }
            }
          });
    </script>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>