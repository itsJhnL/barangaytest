        
        <!-- Camera -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.24/webcam.js"></script>
        <!-- Alert -->
        <script src="../../includes/js/sweetalert.min.js"></script>
        <?php 
            // session_start();
            
            if(isset($_SESSION['status']) && $_SESSION['status'] !="")
            {
                ?>
                <script>
                    swal(
                    {
                        title: "<?php echo $_SESSION['status']; ?>",
                        // text: "You clicked the button!",
                        icon: "<?php echo $_SESSION['status_code']; ?>",
                        button: "Ok!",
                    });
                </script>
                <?php 
                unset($_SESSION['status']);
            }

        ?>

        <!-- Alternative CSS -->
        <link href="../../includes/assets/css/style2.css" rel="stylesheet" />
        <!-- Bootstrap 5.1.3 bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jquery CDN link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>
        <!-- Header and sidenav CSS -->
        <!-- <link rel="stylesheet" href="../../includes/assets/css/styles.css"> -->
        <!-- FontAwesome -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Dashboard CSS -->
        <link rel="stylesheet" href="../../includes/assets/css/dashboard.css">
        <!-- Script for toggle button -->
        <script src="../../includes/js/scripts.js"></script>
        <!-- Script for search  bar -->
        <script src="../../includes/js/search.js"></script>
        <!-- Validate -->
        <script src="../../includes/js/validate.js"></script>
        <!-- Bootstrap icons 5.1.3 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/a26cd4790f.js" crossorigin="anonymous"></script>
        <!-- Ajax -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        
    </body>
</html>