 <?php $images = $this->data['data']; ?>

 <!-- trending start -->
 <div class="container mt-4">
     <div class="row">
         <div class="col-md-3">
             <div class="dropdown">
                 <p class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Trending
                 </p>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Most views</a>
                     <a class="dropdown-item" href="#">Most comments</a>
                     <a class="dropdown-item" href="#">Most votes</a>
                 </div>
             </div>
         </div>
     </div>
     <div class="row">
         <?php foreach ($images as $image) { ?>
             <div class="col-md-4">
                 <a href="/image?id=<?= $image->getId(); ?>">
                     <div class="card">
                         <img class="card-img-top" src="<?= $image->getPath(); ?>" alt="" />
                         <div class="card-body">
                             <h4 class="card-text"><?= $image->getTitle(); ?></h4>
                             <div class="row">
                                 <div class="col-4"><i class="fas fa-arrow-up"></i> 12</div>
                                 <div class="col-4"><i class="fas fa-comments"></i> 5</div>
                                 <div class="col-4"><i class="fas fa-eye"></i> <?= $image->getViews(); ?>k</div>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>
         <?php } ?>
     </div>
 </div>

 <!-- trending end -->