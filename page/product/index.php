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
        <div class="place-holder-n mb-5"></div>

        <!-- sidebar -->
        <div class="container-md mb-5">

            <?php
                include(ROOT_PATH. CORE_PATH.'connDB.php');

                $id = $_GET['id'];

                $sql = "SELECT * FROM produce WHERE id='".$id."'";
                // echo $sql;

                $result = $db->query($sql);
                $i = 1;
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $category = $row['category'];
                        $imgPath = $row['imgPath'];
                        $modelName = $row['modelName'];
                        $price = $row['price'];

                    }
                }else{
                    echo'Không có sản phẩm nào';
                }

            ?>


            <div class="row">
                <div class=" item-img col-md-7 bg-white rounded-4 p-3 me-3 d-flex justify-content-center">
                    <img src="<?php echo UPLOAD_PATH.$imgPath;?>" alt="" class="h-100  px-3">
                </div>
                <div class="col-md rounded-4 bg-white p-4 ">

                    <h1 class="fs-24 mb-3"><?php echo $modelName; ?></h1>

                    <div class="container d-flex p-0">
                        <p class="text-gray fs-14 me-2">Danh mục </p>
                        <p class="fs-14 text-gray"> <?php echo $category; ?></p>
                    </div>

                    <div class="row">
                        <p class="col-3 text-gray fs-14 ">Giá thành viên </p>
                        <p class="col fs-14 text-primary fs-18"> <?php echo $price; ?> VND</p>
                    </div>

                    <div class="row mb-4">
                        <p class="col-3 text-gray fs-14 ">Giá bán </p>
                        <p class="col fs-14 text-primary fs-18"> <?php echo $price; ?> VND</p>
                    </div>

                    <div class="container p-0 mb-5">
                        <p class="text-gray mb-3 fs-14">Hàng Chính Hãng</p>
                        <p class="text-gray mb-3 fs-14">Miễn Phí Giao Hàng Toàn Quốc Đơn Trên 500k</p>
                        <p class="text-gray mb-3 fs-14">Giao Hàng Hỏa Tốc 4 Tiếng</p>
                    </div>

                    <div class="container m-0 p-0">
                        <button class="btn btn-primary w-100 font-bold py-2">Thêm vào giỏ hàng</button>
                 
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