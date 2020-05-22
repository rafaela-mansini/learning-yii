<?php 

namespace app\models;

use yii\base\Model; //esta é uma classe simples, sem utilização de banco de dados. Para banco de dados ver "ActiveRecords"

class MatriculaModel extends Model{
    public $nome;
    public $email;
    public $idade;

    public function rules(){
        //regras dos atributos
        return [
            [['nome', 'email', 'idade'], 'required'], //todos os campos serão requeridos
            ['email', 'email'],
            ['idade', 'number', 'integerOnly'=>true, 'max'=>18 ],
        ];
    }

    public function attributesLabels(){
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' =>'Idade'
        ];
    }
}