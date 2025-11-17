
<?php
$page_title = "Мировые Новости - Качественная журналистика";
include TEMPLATE_DIR.'/partials/header.php';
?>


<section class="breaking-news">
    <div class="container">
        <div class="breaking-label">СРОЧНЫЕ НОВОСТИ</div>
        <div class="breaking-text">
            <span class="breaking-tag">LIVE</span>

        </div>
    </div>
</section>


<section class="main-hero">
    <div class="container">
        <div class="hero-grid">
            <div class="lead-story">
                <img src="https://placehold.co/800x500/cccccc/666666?text=Главная+новость" alt="Главная новость"
                     class="hero-image">
                <div class="story-content">
                    <span class="category">ПОЛИТИКА</span>
                    <h1>Новость</h1>
                    <p class="excerpt">Новость</p>
                    <div class="meta">
                        <span class="author">Автор</span>
                        <span class="date">• </span>
                    </div>
                </div>
            </div>

            <div class="side-stories">
                <div class="side-story">
                    <img src="https://placehold.co/300x180/cccccc/666666?text=Технологии" alt="Технологии">
                    <div class="side-content">
                        <span class="category">ТЕХНОЛОГИИ</span>
                        <h3>Прорыв в ИИ обещает революцию в медицинской диагностике</h3>
                        <div class="meta">
                            <span class="author">Сара Джонсон</span>
                        </div>
                    </div>
                </div>

                <div class="side-story">
                    <img src="https://placehold.co/300x180/cccccc/666666?text=Культура" alt="Культура">
                    <div class="side-content">
                        <span class="category">КУЛЬТУРА</span>
                        <h3>Новая выставка переопределяет стандарты современного искусства</h3>
                        <div class="meta">
                            <span class="author">Мария Родригес</span>
                        </div>
                    </div>
                </div>

                <div class="side-story">
                    <img src="https://placehold.co/300x180/cccccc/666666?text=Экономика" alt="Экономика">
                    <div class="side-content">
                        <span class="category">ЭКОНОМИКА</span>
                        <h3>новость</h3>
                        <div class="meta">
                            <span class="author">Автор</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="news-sections">
    <div class="container">

        <div class="section-content active" >
            <div class="articles-grid">
                <div class="row">
                    <div class="card col-6">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок</h5>
                            <p class="card-text">Краткое описание новости</p>
                            <a href="#" class="btn btn-primary">Перейти</a>
                        </div>
                    </div>
                    <div class="card col-6 ">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок</h5>
                            <p class="card-text">Краткое описание новости</p>
                            <a href="#" class="btn btn-primary">Перейти</a>
                        </div>
                    </div>
                    <div class="card col-6">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок</h5>
                            <p class="card-text">Краткое описание новости</p>
                            <a href="#" class="btn btn-primary">Перейти</a>
                        </div>
                    </div>
                    <div class="card col-6">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок</h5>
                            <p class="card-text">Краткое описание новости</p>
                            <a href="#" class="btn btn-primary">Перейти</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>


        <div class="section-content active" id="business">
            <div class="articles-grid">


            </div>
        </div>

        <div class="section-content active" id="technology">
            <div class="articles-grid">

            </div>
        </div>

        <div class="section-content active" id="culture">
            <div class="articles-grid">

            </div>
        </div>


    </div>
</section>

<?php include TEMPLATE_DIR.'/partials/footer.php'; ?>
