<link rel="stylesheet" href="/css/style.css">
<div class="CategoryNews">
<?php foreach ($news as $key => $value) :?>

            <div>
                <h3><?= $value['title']?></h3>
                <a href="/categoryNews/<?=$value['id_category']?>">Категория <?=$value['id_category']?></a>
                <p><?= $value['disc']?></p>
                <p><?= $value['author']?></p>
                <p><?= $value['created_at']?></p>
            </div>

            <?php endforeach; ?>
</div>
