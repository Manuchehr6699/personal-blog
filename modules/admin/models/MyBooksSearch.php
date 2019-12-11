<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MyBooks;

/**
 * MyBooksSearch represents the model behind the search form of `app\models\MyBooks`.
 */
class MyBooksSearch extends MyBooks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'page_count', 'created_at', 'created_by', 'updated_at', 'updated_by', 'status'], 'integer'],
            [['name', 'author', 'link_to_buy', 'publisher', 'publish_year', 'isbn', 'language', 'category', 'description', 'photo', 'ebook_file'], 'safe'],
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
        $query = MyBooks::find();

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
            'page_count' => $this->page_count,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'publisher', $this->publisher])
            ->andFilterWhere(['like', 'publish_year', $this->publish_year])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'ebook_file', $this->ebook_file]);

        return $dataProvider;
    }
}
