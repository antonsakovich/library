<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
    <table class="table   table-hover">
        <thead>
        <td class="font-tittle-list">Автор</td>
        <td class="font-tittle-list">Количество книг</td>
        </thead>
        <?php foreach($data as $value):?>
            <tr>
                <td><?=$value['name'] ?></td>

                <td><?=$value['amount'] ?></td>
            </tr>


        <?php endforeach;?>
    </table>





</div>

