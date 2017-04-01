<?php
/**
 * Created by PhpStorm.
 * User: Guga-PC
 * Date: 3/25/2017
 * Time: 12:00 AM
 */

namespace frontend\controllers;


use centigen\i18ncontent\models\ArticleCategory;
use frontend\models\search\ArticleSearch;
use frontend\modules\api\v1\resources\Article;
use yii\web\Controller;

class PortfolioController extends Controller
{

    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams, true);
        $portfolio = ArticleCategory::find()->bySlug('portfolio')->active()->one();
        $categories = ArticleCategory::find()->byParentId($portfolio->id)->active()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => $categories
        ]);
    }

    public function actionView($slug){
        $model = Article::find()->bySlug($slug)->all();

    }

}