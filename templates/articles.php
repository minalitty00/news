<?php include_once TEMPLATE_DIR . '/layout.php' ?>
<section class="article-sections">
    <div class="container">

                <div class="row">
                    <?php foreach ($articles as $article) {
                    echo '
                    <div class="col-6>">
                            <div class="card">
                                <img src="' . $article['image'] . '" class="card-img-top" alt="' . $article['title'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $article['title'] . '</h5>
                                    <p class="card-text">' . $article['description'] . '</p>
                                    <a href="#" class="btn btn-primary">Перейти</a>
                                </div>
                            </div>
                    </div>';
                    }
                    ?>
                </div>

    </div>
</section>
<?php include TEMPLATE_DIR.'/partials/footer.php'; ?>
