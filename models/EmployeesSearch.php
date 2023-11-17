<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form of `app\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Имя', 'Фамилия', 'Отчество', 'Должность', 'Адрес', 'Телефон', 'email', 'Фотография'], 'safe'],
            [['Зарплата'], 'number'],
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
        $query = Employees::find();

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
            'Зарплата' => $this->Зарплата,
        ]);

        $query->andFilterWhere(['like', 'Имя', $this->Имя])
            ->andFilterWhere(['like', 'Фамилия', $this->Фамилия])
            ->andFilterWhere(['like', 'Отчество', $this->Отчество])
            ->andFilterWhere(['like', 'Должность', $this->Должность])
            ->andFilterWhere(['like', 'Адрес', $this->Адрес])
            ->andFilterWhere(['like', 'Телефон', $this->Телефон])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'Фотография', $this->Фотография]);

        return $dataProvider;
    }
}
