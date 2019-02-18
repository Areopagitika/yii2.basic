<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Articles</h1>

<ul>
    <?php foreach ($articles as $article): ?>
        <li>
            <?= Html::encode("{$article->id} ({$article->title})") ?>:
            <?= $article->description ?>
        </li>
    <?php endforeach;?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
