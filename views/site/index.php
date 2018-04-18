<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Продукты пользователя</h1>   
    </div>
       <?= 
            GridView::widget([
              'dataProvider' => $dataProvider,
              'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'name',
                'user_id',
              ]
            ])
       ?>
    <div class="body-content">
 
    </div>
</div>
