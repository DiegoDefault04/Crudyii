<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $nombre
 * @property string $correo
 * @property string $contrasena
 * @property int $created_at
 * @property int $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['nombre', 'correo', 'contrasena'], 'required'],
            [['correo'], 'email'],
            [['nombre', 'correo'], 'string', 'max' => 50],
            [['contrasena'], 'string', 'max' => 255],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isAttributeChanged('contrasena')) {
                $this->contrasena = Yii::$app->security
                    ->generatePasswordHash($this->contrasena);
            }
            return true;
        }
        return false;
    }
}
