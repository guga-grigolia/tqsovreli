<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use centigen\i18ncontent\models\WidgetCarousel;

/**
 * WidgetCarouselSearch represents the model behind the search form about `centigen\i18ncontent\models\WidgetCarousel`.
 */
class WidgetCarouselSearch extends WidgetCarousel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['key'], 'safe'],
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
        $query = WidgetCarousel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'key', $this->key]);

        return $dataProvider;
    }
}
