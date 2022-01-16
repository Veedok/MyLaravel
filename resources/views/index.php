<link rel="stylesheet" href="/css/style.css">
<div class="flex">
<div class="cat1"><a href="/categoryNews/0">Категория1</a>

<?php foreach ($new as $key => $value) :?>
        <?php if ($value['id_category']==0):?>
            <div>
                <h3><a href="/singleNews/<?=$value['id']?>"><?= $value['title']?></a></h3>
                <a href="/categoryNews/<?=$value['id_category']?>">Категория1</a>
                <p><?= $value['disc']?></p>
                <p><?= $value['author']?></p>
                <p><?= $value['created_at']?></p>
            </div>
            <?php endif?>
            <?php endforeach; ?>
        </div>
<div class="cat2"><a href="/categoryNews/1">Категория2</a>

<?php foreach ($new as $key => $value) :?>
        <?php if ($value['id_category']==1):?>
            <div>
                <h3><a href="/singleNews/<?=$value['id']?>"><?= $value['title']?></a></h3>
                <a href="/categoryNews/<?=$value['id_category']?>">Категория2</a>
                <p><?= $value['disc']?></p>
                <p><?= $value['author']?></p>
                <p><?= $value['created_at']?></p>
            </div>
            <?php endif?>
            <?php endforeach; ?>
        </div>
<div class="cat3"><a href="/categoryNews/2">Категория3</a>

<?php foreach ($new as $key => $value) :?>
        <?php if ($value['id_category']==2):?>
            <div>
                <h3><a href="/singleNews/<?=$value['id']?>"><?= $value['title']?></a></h3>
                <a href="/categoryNews/<?=$value['id_category']?>">Категория3</a>
                <p><?= $value['disc']?></p>
                <p><?= $value['author']?></p>
                <p><?= $value['created_at']?></p>
            </div>
            <?php endif?>
            <?php endforeach; ?></div>
<div class="cat4"><a href="/categoryNews/3">Категория4</a>
<?php foreach ($new as $key => $value) :?>
        <?php if ($value['id_category']==3):?>
            <div>
                <h3><a href="/singleNews/<?=$value['id']?>"><?= $value['title']?></a></h3>
                <a href="/categoryNews/<?=$value['id_category']?>">Категория4</a>
                <p><?= $value['disc']?></p>
                <p><?= $value['author']?></p>
                <p><?= $value['created_at']?></p>
            </div>
            <?php endif?>
            <?php endforeach; ?></div>
</div>

