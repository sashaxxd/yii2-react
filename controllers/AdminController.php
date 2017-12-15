<?php



namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\News;

class AdminController extends Controller
{

	public function  actionIndex()
	{
		$model = new News();
		if($model->load(Yii::$app->request->post()) && $model->validate()):
			if($model->save()):
				$this->refresh();
			endif;
		endif;
        return $this->render('index',[
            'model' => $model,
        ]);
	}
}