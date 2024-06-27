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

        <!-- banner -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Các chỉ mục -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="1" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="0"></li>
            </ol>
    
            <!-- Các slide -->
            <div class="carousel-inner ">
                
                <div class="container-fluid mb-3 mt-4 px-5 banner rounded carousel-item active">
                    <img src="<?php echo MEDIA_PATH?>banner.png" class="d-block w-100 rounded" alt="Second slide">
                    
                </div>
                <div class=" container-fluid mb-3 mt-4 px-5 banner rounded carousel-item">
                    <img src="<?php echo MEDIA_PATH?>banner1.png" class="d-block w-100 rounded" alt="Third slide">
                    
                </div>
            </div>
    
            <!-- Các nút điều hướng -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-normal fs-24  px-4"><p class="m-0">Trước</p></button>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-normal fs-24  px-4"><p class="m-0">Sau</p></button>
            </a>
        </div>




        

        <!-- button container -->
        <div class="container-fluid d-flex justify-content-center py-5 mb-4">
            <button onClick="window.location.href='<?php echo PAGE_PATH; ?>collections';" class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-normal fs-24  px-4 mx-1"><p class="m-0">Tất Cả</p></button>
            <button onClick="window.location.href='<?php echo PAGE_PATH; ?>collections';" class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-normal fs-24  px-4 mx-1"><p class="m-0">Hàng Mới</p></button>
            <button onClick="window.location.href='<?php echo PAGE_PATH; ?>collections';" class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-normal fs-24  px-4 mx-1"><p class="m-0">Sự Kiện</p></button>
            <button onClick="window.location.href='<?php echo PAGE_PATH; ?>collections';" class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-normal fs-24  px-4 mx-1"><p class="m-0">Giảm Giá</p></button>
        </div>


        <!-- banner 2 -->
        <div class="container-fluid  px-5 mb-5">
            <h1 class="text-secondary font-bold font-family-jak d-flex justify-content-center mb-4">Danh Mục Nổi Bật</h1>
            <div class="d-flex justify-content-center">

                <img class="w-100 mx-5 rounded " src="<?php echo MEDIA_PATH?>banner2.png" alt="">
            </div>

            <div class="container-fluid mt-4">
                <h2 class="font-family-jak d-flex justify-content-center">Đồ Chơi Mầm Non</h2>
                <div class="container-fluid d-flex justify-content-center mb-4">
                    <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

                </div>
            </div>

        </div>

        <!-- banner 3 -->
        <div class="container-fluid mb-5">
            <div class="row mx-5">
                <div class="col">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="w-100 rounded" src="<?php echo MEDIA_PATH?>banner3-1.png" alt="">
                    </div>
                    <h2 class="font-family-jak d-flex justify-content-center">Đồ Chơi Sưu Tập</h2>
                    <div class="container-fluid d-flex justify-content-center mb-4">
                        <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="w-100 rounded " src="<?php echo MEDIA_PATH?>banner3-2.png" alt="">
                    </div>
                    <h2 class="font-family-jak d-flex justify-content-center">Đồ Chơi Lắp Ghép
                    </h2>
                    <div class="container-fluid d-flex justify-content-center mb-4">
                        <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

                    </div>
                </div>
            </div>
        </div>

        <!-- banner 3 -->
        <div class="container-fluid mb-5">
            <div class="row mx-5">

                <div class="col">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="w-100 rounded " src="<?php echo MEDIA_PATH?>category-img.png" alt="">
                    </div>
                    <h2 class="font-family-jak d-flex justify-content-center">Văn Phòng Phẩm</h2>
                    <div class="container-fluid d-flex justify-content-center mb-4">
                        <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

                    </div>
                </div>

                <div class="col ">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="w-100  rounded " src="<?php echo MEDIA_PATH?>category-img1.png" alt="">
                    </div>
                    <h2 class="font-family-jak d-flex justify-content-center">Đồ Chơi Theo Phim</h2>
                    <div class="container-fluid d-flex justify-content-center mb-4">
                        <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

                    </div>
                </div>

                <div class="col">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="w-100  rounded " src="<?php echo MEDIA_PATH?>category-img2.png" alt="">
                    </div>
                    <h2 class="font-family-jak d-flex justify-content-center">Đồ Dã Ngoại</h2>
                    <div class="container-fluid d-flex justify-content-center mb-4">
                        <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

                    </div>
                </div>

                <div class="col">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="w-100  rounded " src="<?php echo MEDIA_PATH?>category-img3.png" alt="">
                    </div>
                    <h2 class="font-family-jak d-flex justify-content-center">Đồ Chơi Sáng Tạo</h2>
                    <div class="container-fluid d-flex justify-content-center mb-4">
                        <button class="btn mt-2 btn-outline-primary rounded-pill text-dark font-family-jak font-bold fs-16  px-4 py-2 mx-1"><p class="m-0">Xem Thêm</p></button>

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