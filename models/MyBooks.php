<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_books".
 *
 * @property int $id
 * @property string $name
 * @property string|null $author
 * @property string|null $publisher
 * @property string|null $publish_year
 * @property string|null $isbn
 * @property int|null $page_count
 * @property string|null $language
 * @property string|null $category
 * @property string|null $description
 * @property string $photo
 * @property string|null $ebook_file
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 */
class MyBooks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'photo'], 'required'],
            [['page_count', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 500],
            [['author', 'publisher', 'category'], 'string', 'max' => 250],
            [['publish_year'], 'string', 'max' => 5],
            [['isbn'], 'string', 'max' => 200],
            [['language'], 'string', 'max' => 100],
            [['photo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['ebook_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf, djvu, txt, doc, docx, rtf']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'author' => 'Author',
            'publisher' => 'Publisher',
            'publish_year' => 'Publish Year',
            'isbn' => 'Isbn',
            'page_count' => 'Page Count',
            'language' => 'Language',
            'category' => 'Category',
            'description' => 'Description',
            'photo' => 'Photo',
            'ebook_file' => 'Ebook File',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
