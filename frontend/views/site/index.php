<?php
use yii\widgets\LinkPager; 
/* @var $this yii\web\View */

$this->title = 'Organization';
?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
 <div class="alert card card-topline-green alert-success" role="alert">
    <div class="card-head" id="alert-box">
        <p><?= Yii::$app->session->getFlash('success') ?></p>
        <a style="padding-top: 9px;padding-right: 20px;" class="t-close btn-color fa fa-times alert-close-btn" data-dismiss="alert" aria-label="Close" href="javascript:;"></a>
    </div>
</div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>

<div class="alert card card-topline-red alert-danger" role="alert">
<div class="card-head" id="alert-box">
    <p> <?= Yii::$app->session->getFlash('error') ?></p>
    <a style="padding-top: 9px;padding-right: 20px;" class="t-close btn-color fa fa-times alert-close-btn" data-dismiss="alert" aria-label="Close" href="javascript:;"></a>
</div>
</div>

<?php endif; ?>
<div class="row">
    <div class="col-md-12"> 
        <div class="label mt-5 mb-2">
            <h3>Employe Details</h3>
        </div>


            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</div>
                                <th scope="col">Employee Code</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Age</th>
                                <th scope="col">Experience in the organization</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($posts)) {
                            $count = $pages->getLimit() * $pages->getPage();
                            foreach($posts as $data) :
                                $from = new DateTime($data->dob);
                                $to   = new DateTime('today');
                                $experience = new DateTime($data->joining_date);

                        ?>
                            <tr scope="row">
                                <td><?=++$count?></td>
                                <td><?=(!empty($data->emp_code)) ? $data->emp_code : 'NA'?></td>
                                <td><?=(!empty($data->emp_name)) ? $data->emp_name : 'NA'?></td>
                                <td><?=(!empty($data->department)) ? $data->department : 'NA'?></td>
                                <td><?=(!empty($data->dob)) ? $from->diff($to)->y : 'NA'?></td>
                                <td><?=(!empty($data->joining_date)) ? $experience->diff($to)->y : 'NA'?></td>
                            </tr>
                            <?php
                                        endforeach;
                                    } else { 
                                    ?>
                                    <tr scope="row"><td colspan="5">No result found</td></tr>
                                    <?php
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right">
                        <?php
                            echo LinkPager::widget ( [
                            'id'=>'my-pager',
                            'pagination' => $pages ,
                            'disableCurrentPageButton'=>false,
                            'activePageCssClass' => 'active' ,
                            'disabledPageCssClass'=>'paginate_button page-item disabled-page',
                            'prevPageLabel' => "Previous" ,
                            'nextPageLabel' => "Next" ,
                            'pageCssClass'=>'paginate_button page-item',
                            'linkOptions'=>['class'=>'page-link'],
                            'maxButtonCount' => 5 ,
                            'options' => [
                            'class' => 'pagination',
                            ]
                            ] );
                        ?>	
                        </div>
                    </div>
                </div>

    </div>
</div>
