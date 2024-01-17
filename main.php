<?php
$news = $news->index();
?>

<div class="container">
    <h1>Centar Neformalne Edukacije</h1>

    <section id="news">
        <h2>Vesti</h2>
        <div class="row">
            <?php foreach($news as $single) : ?>
                <div class="col-md-4">
                    <div class="card">
                    <img src="<?php echo $single->featured_image; ?>" class="card-img-top" alt="<?php echo $single->title; ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $single->title; ?></h3>
                            <span class="badge badge-secondary"><?php echo date('d.m.Y', strtotime($single->created_at)); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>