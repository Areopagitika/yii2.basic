<?php

namespace app\controllers;

use yii\data\Pagination;
use yii\web\Controller;
use app\models\Article;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        $query = Article::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $articles = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'articles' => $articles,
            'pagination' => $pagination
        ]);
    }
}