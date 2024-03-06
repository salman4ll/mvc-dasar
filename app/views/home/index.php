<div class="container">
    <div class="row">
        <?php foreach ($data['products'] as $product) : ?>
            <div class="col">
                <div class="card equal-height mb-3">
                    <img src="data:image;base64,<?php echo $product['imgs']; ?>" alt="Product Image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name_product']; ?></h5>
                        <h6 class="card-title">Rp<?php echo $product['price']; ?></h6>
                        <p class="card-text"><?php echo $product['desc']; ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
