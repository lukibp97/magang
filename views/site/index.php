<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\Breadcrumbs;
$this->title = 'Index';
?>
<div class="container-lg">
   
            <?php echo Breadcrumbs::widget([
                'class' => 'Home',
                'homeLink' => [
                    'label' => '<i class="fas fa-home"></i>',
                    'url' => '/',
                    'encode' => false,
                ],
                // template for all links
                'links' => [
                    [
                        'label' => 'Organizations',
                        'url' => ['/'],
                    ],
                    [
                        'label' => 'RSUD Tugurejo', 
                        'url' => ['/'],
                    ],
                    [
                        'label' => 'SP3B Bulan Mei 2020', 
                        'url' => ['/'],
                    ],
                    [
                        'label' => '<b>Sp3b Mei 2020</b>', 
                        'url' => ['/'],
                        'encode' => false,
                    ],
                ],
            ]);
            ?>
           
    <div class="container-lg pb-3">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-lg" style="background-color: white">
                <h1>
                    Sp3b Mei 2020
                </h1>
                <iframe src="https://docs.google.com/viewer?url=http://opendata.rstugurejo.jatengprov.go.id/dataset/17d92e15-f4d0-4720-97c0-8d04fba3ba64/resource/09e6c83a-d525-477c-8626-61c9cc5eac90/download/sp3b-mei-2020.xlsx&embedded=true" style="margin:0 auto; width:400px; height:500px;" frameborder="0"></iframe>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>
</div>


<style>

.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 7rem;
    margin-bottom: 0rem;
    list-style: none;
    background-color: transparent;
}

.breadcrumb >li >a{
    color: #505050;
    text-decoration: none;
    background-color: transparent;
    font-size: large;
    line-height:20px;
}

@media (max-width: 767px){
    .breadcrumb {
        color: #ffffff;
        text-shadow: none;
    }
}

/* @media (max-width: 767px){
    .breadcrumb >.home{
        display: none;
    }
} */
</style>