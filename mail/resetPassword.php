<?php

use yii\helpers\Html;

echo 'Hello '.Html::encode($user->username).' . ';
echo Html::a(' Click this link for reset your password!.',

	Yii::$app->urlManager->createAbsoluteUrl(
		[
			'admin/main/reset-password',
			'key'=>$user->secret_key
		]


	));