<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\ContactProfile;
use Yii;

class ContactProfileController extends ActiveController
{
    public $modelClass = 'app\models\ContactProfile';

    // Enable authentication and access control if needed.

    public function actionIndex()
    {
        $profiles = ContactProfile::find()->all();

        if ($profiles) {
            return $profiles;
        } else {
            Yii::$app->response->setStatusCode(404);
            return ['message' => 'Data not found'];
        }
    }

    public function actions()
    {
        $actions = parent::actions();

        // Disable unnecessary actions.
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);

        return $actions;
    }

    public function actionCreate()
    {
        $model = new ContactProfile();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            return $model;
        } else {
            return $model->getErrors();
        }
    }

    public function actionUpdate($id)
    {
        $model = ContactProfile::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $model;
        } else {
            return $model->getErrors();
        }
    }

    public function actionDelete($id)
    {
        $model = ContactProfile::findOne($id);
        $model->delete();
        return ['message' => 'Contact profile deleted successfully.'];
    }

}
