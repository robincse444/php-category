<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($newspapers as $newspaper) { ?>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="<?php echo  $newspaper['image'] ?>" alt="" class="card-img-top" style="height: 300px">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $newspaper['name'] ?></h3>
                            <p class="text-justify"><?php echo $newspaper['description'] ?></p>
                            <a href="action.php?pages=newspaper-details&&newspaper_id=<?php echo $newspaper['id']; ?>" class="btn btn-outline-warning float-right">View</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>
<?php include 'pages/includes/footer.php'; ?>
