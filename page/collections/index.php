<?php include_once($_SERVER['DOCUMENT_ROOT'].'/toy/app/config/path.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        
        <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_180,h_180/https://linhkienbandan.com/wp-content/uploads/2015/03/cropped-favicon-1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/toy/app/styles/styles.css">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        <link rel="icon" type="image/png" href="<?php echo MEDIA_PATH?>favicon.png">

    </head>
    <body>
    
        
        <!-- navbar -->
        <?php include(ROOT_PATH. ELEMENTS_PATH."Navbar.php")?>
        <div class="place-holder-n"></div>

        <!-- sidebar -->
        <div class="container-fluid px-5 mx-4">

            <div class="row">
                <div class="col-2">

                    <div class="rounded my-5 mb-4 ">    
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class=" p-2 ps-3 form-control rounded-pill border-0 font-family-jak text-text" placeholder="Tìm kiếm sản phẩm ...">
                            </div>
                        </form>
                    </div> 
                    <!-- End Search bar -->
                </div>
                <!-- Search bar -->

            </div>

             <!-- Sidebar -->
            <div class="row">
                <div class="col-2 ">
                    <?php include(ROOT_PATH. ELEMENTS_PATH."Sidebar.php")?>
                </div>
                <div class="col">
                
                    <div class="container-md d-flex flex-row flex-wrap row">

                        
                        
                        <?php 
                        include_once(ROOT_PATH . CORE_PATH."connDB.php");

                        if(isset($_GET['category'])) {
                            $category = $_GET['category'];
                            $sql = "SELECT * FROM produce WHERE category='".$category."'";
                        } else {
                            $sql = "SELECT * FROM produce";
                        }

                        // Câu truy vấn SQL
                        
                        $result = $db->query($sql);
                    

                        if($result->num_rows > 0) {
                            // Duyệt qua các dòng kết quả
                            while($row = $result->fetch_assoc()) {
                                // Bao gồm tệp Card.php để hiển thị từng sản phẩm
                                include(ROOT_PATH. ELEMENTS_PATH."Card.php");
                            }
                        } else {
                            echo "Không có sản phẩm nào";
                        } 
                        ?>
                        
                        
                        


                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include(ROOT_PATH. ELEMENTS_PATH."Footer.php")?>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>