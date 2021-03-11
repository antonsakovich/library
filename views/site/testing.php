<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Testing';
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
    <table class="table   table-hover">
        <thead>
        <td class="font-tittle-list" >Книга</td>
        <td class="font-tittle-list">Автор</td>
        </thead>
        <?php foreach($model as $value):?>
            <tr>
                <td><?=$value['tittle'] ?></td>

                <td><?=$value['name'] ?></td>
            </tr>


        <?php endforeach;?>
    </table>




</div>


