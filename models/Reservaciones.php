<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservaciones".
 *
 * @property integer $id
 * @property integer $idVuelo
 * @property string $nombre
 * @property string $telefono
 * @property string $correo
 */
class Reservaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVuelo'], 'integer'],
            [['nombre', 'telefono', 'correo'], 'string', 'max' => 27],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idVuelo' => 'Id Vuelo',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
        ];
    }
}
