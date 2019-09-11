<?php require_once VIEW . 'header.php'; ?>
<?php $image = $this->data['data']; ?>


<!-- image start -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-9">
            <h4><?= $image->getTitle() ?></h4>
        </div>
        <div class="col-md-3 text-right">
            <p>Next Post</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <img class="card-img-top" style="width:800px;" src="<?= $image->getPath(); ?>" alt="">
        </div>
        <div class="col-lg-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p>By <a href=""><?= $image->getUser(); ?></a> on <?= $image->getCreatedAt(); ?></p>
                            <div class="row">
                                <div class="col-4"><i class="fas fa-arrow-up"></i> 12</div>
                                <div class="col-4"><i class="fas fa-comments"></i> 5</div>
                                <div class="col-4"><i class="fas fa-eye"></i> <?= $image->getViews(); ?></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-small btn-success">Vote up</button>
                                    <button class="btn btn-small btn-danger">Vote down</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>Similar images...</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-4 mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC8ekRynROrR8Une5pTd-kgU7t5JXH00kNwc6_6MmobrM2GZTQnw" alt="" class="card-img-top">
                </div>
                <div class="col-lg-12 col-md-4 mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC8ekRynROrR8Une5pTd-kgU7t5JXH00kNwc6_6MmobrM2GZTQnw" alt="" class="card-img-top">
                </div>
                <div class="col-lg-12 col-md-4 mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC8ekRynROrR8Une5pTd-kgU7t5JXH00kNwc6_6MmobrM2GZTQnw" alt="" class="card-img-top">
                </div>
                <div class="col-lg-12 col-md-4 mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC8ekRynROrR8Une5pTd-kgU7t5JXH00kNwc6_6MmobrM2GZTQnw" alt="" class="card-img-top">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- image end -->

<?php require_once VIEW . 'footer.php'; ?>