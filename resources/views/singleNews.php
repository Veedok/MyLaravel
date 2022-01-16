<link rel="stylesheet" href="/css/style.css">
<div class="CategoryNews">


            <div>
                <h3><?= $news['title']?></h3>
                <h2><?= $news['id']?></h2>
                <a href="/categoryNews/<?=$news['id_category']?>">Категория <?=$news['id_category']?></a>
                <p><?= $news['disc']?></p>
                <p><?= $news['author']?></p>
                <p><?= $news['created_at']?></p>
            </div>


</div>
