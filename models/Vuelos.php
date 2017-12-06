<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vuelos".
 *
 * @property integer $id
 * @property string $Origen
 * @property string $Destino
 * @property string $Salida
 * @property string $Aribo
 * @property string $tipo
 */
class Vuelos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vuelos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo'], 'string'],
            [['Origen', 'Destino'], 'string', 'max' => 127],
            [['Salida', 'Aribo'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Origen' => 'Origen',
            'Destino' => 'Destino',
            'Salida' => 'Salida',
            'Aribo' => 'Aribo',
            'tipo' => 'Tipo',
        ];
    }
}
