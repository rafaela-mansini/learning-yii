<?php

namespace app\controllers;

use Yii;
use app\models\MatriculaModel;
use yii\base\Controller;

class MatriculasController extends Controller{

    public function actionMatricular(){ //para acessar: index.php?r=matriculas/matricular (ver como faz url amigável)

        $matricula = new MatriculaModel;
        $post = Yii::$app->request->post(); //retorna $_POST()

        if($matricula->load($post) && $matricula->validate()){ //tenta popular o objeto Matricula com informações do $_POST se tiver
            return $this->render('confirmacao', [
                'model' =>$matricula
            ]);
        }
        else{
            return $this->render('formulario', [
                'model' =>$matricula
            ]);
        }

    }
    
}