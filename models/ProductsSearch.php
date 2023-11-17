<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Количество'], 'integer'],
            [['Название', 'Бренд', 'Категория', 'Описание', 'Картинка', 'Срок_годности', 'Поставщик'], 'safe'],
            [['Цена'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Цена' => $this->Цена,
            'Количество' => $this->Количество,
        ]);

        $query->andFilterWhere(['like', 'Название', $this->Название])
            ->andFilterWhere(['like', 'Бренд', $this->Бренд])
            ->andFilterWhere(['like', 'Категория', $this->Категория])
            ->andFilterWhere(['like', 'Описание', $this->Описание])
            ->andFilterWhere(['like', 'Картинка', $this->Картинка])
            ->andFilterWhere(['like', 'Срок_годности', $this->Срок_годности])
            ->andFilterWhere(['like', 'Поставщик', $this->Поставщик]);

        return $dataProvider;
    }
}
