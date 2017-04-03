<?php

namespace frontend\models\search;

use centigen\base\helpers\QueryHelper;
use centigen\i18ncontent\models\Article;
use centigen\i18ncontent\models\ArticleCategoryArticle;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ArticleSearch represents the model behind the search form about `centigen\i18ncontent\models\Article`.
 */
class ArticleSearch extends Article
{
    public $category_id;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['slug', 'title'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $a = Article::tableName();
        $query = Article::find()->published();
        $query->innerJoin(ArticleCategoryArticle::tableName().' ac',"ac.article_id = $a.id");

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        if(isset($params['ArticleSearch']['category_id'])){
            $query->andWhere(['ac.category_id' => $params['ArticleSearch']['category_id']]);

        }
        $query->orderBy("$a.position ASC");
        $query->andFilterWhere([
            'id' => $this->id,
            'slug' => $this->slug,
        ]);


        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
