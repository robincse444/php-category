<?php include 'pages/includes/header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="<?php echo $newsDetails['image']; ?>" alt="" class="img-fluid" style="height: 400px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body" style="min-height: 400px">
                        <h2 class="font-weight-bold"><?php echo $newsDetails['name']; ?></h2>
                        <p><?php echo $newsDetails['description']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php include 'pages/includes/footer.php'; ?>