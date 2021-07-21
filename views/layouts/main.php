<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap4\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>

.my-navbar{
    background: #983627;
    min-height: 30px;
   padding:unset;
}

.my-navbar .nav-item:hover,
.my-navbar .nav-item:focus {
    color: #f0d1cc;
    background-color:  #842f22;
}

.account-masthead {
    min-height: 30px;
    color: #ffffff;
    background: #983627;
}

.account-masthead .my-navbar .navbar-nav > li > a {
    color: #f0d1cc;
    font-size: 13px;
    font-weight: bold;
    padding: 0 10px;
    line-height: 15px;
    text-decoration: none;
}

.account-masthead .my-navbar .navbar-nav > li {
    border-left: 1px solid #842f22;
    line-height: 20px;
    padding-top: 7px;
    padding-bottom: 8px;
}

.account-masthead .container{
    margin-right: auto;
    margin-left: auto;
    width: 940px;
}

.my-navbar2{
    min-height: 55px;
    background: #c14531;
    padding:unset;
}

.masthead{
    min-height: 55px;
    color: #ffffff;
    background: #c14531
}

@media (max-width: 979px)
{
    .masthead .container {
    padding-left: 20px;
    padding-right: 20px;
    }
}


.masthead .container{
    margin-right: auto;
    margin-left: auto;
    width: 940px;
    position: relative;
}

.masthead .my-navbar2 .navbar-nav > li > a {
    color: #fff;
    padding: 10px 15px 10px;
    margin-top: 2px;
    margin-bottom: 2px;
    line-height: 14px;
    border-radius: 5px;
    margin-right: 2px;
    text-decoration: none;
    text-shadow: none;
}

.masthead .my-navbar2 .navbar-nav > li {
    float: left;
    line-height: 20px;
}

.navbar-brand {
    display: inline-block;
    padding-top: unset;
    padding-bottom: unset;
    margin-right: unset;
}

.navbar-toggler{
    background-color: #983627;
    background-image: none;
    border: none;
    box-shadow: none;
    text-shadow: none;
    margin-bottom: 15px;
    padding: 7px 10px;
    margin-left: 5px;
    margin-right: 25px;
    color: #ffffff;
    line-height: 0;
}

.navbar-toggler-icon {
    width: 1px;
    height: 0px;
    vertical-align: middle;
}

.navbar-expand-sm > .container ,.navbar-expand > .container{
    padding-right: 20px;
    padding-left: 20px;
}

.site-footer {
    color: #e6b5ad;
    margin-top: 20px;
    background: #c14531 url(http://data.jatengprov.go.id/base/images/bg.png);
}


.row{
    margin-left: -20px;
    margin-right:unset;
}

.list-group-item{
    background-color:transparent;
    border: none;
    padding:unset;
    color:#e6b5ad;
}

.list-group-item:hover{
    color:#e6b5ad;
}

.main{
    background:#eeeeee url(http://data.jatengprov.go.id/base/images/bg.png);
}

.field{
    background-color:#ffffff;
    position: relative;
    border-radius: 3px;
}

.search-input {
    border:none;
    width: 200px;
    padding: 4px 10px;
    border-radius: 3px;
}

.search-button{
    position: absolute;
    display: block;
    height: 17px;
    width: 17px;
    padding: 0;
    top: 50%;
    right: 5px;
    margin-top: -10px;
    background-color: transparent;
    border: none;
    color: #999;
}

@media (max-width: 979px)
{
    .masthead .example {
    display: none;
    }
}

@media (max-width: 767px)
{
    .masthead .example {
    float: none;
    }
}

.example{
    margin: 2px 8px 2px 0;
}



body {
    background: #c14531 url(http://data.jatengprov.go.id/base/images/bg.png);

   font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
   font-size: 14px;
    color: #444444;
}


</style>
<body>

<?php $this->beginBody() ?>

<header class="account-masthead">
        <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar-expand my-navbar'
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'items' => [
                    ['label' => 'Log in', 'url' => ['/site/login']],
                    
                ],
            ]);
            NavBar::end();
        ?>
</header>
<header class="masthead">
        <?php
            NavBar::begin([
                'brandLabel' => html::img('http://data.jatengprov.go.id/uploads/admin/2017-08-28-053813.846570ckan-logo-copy.png'),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-expand-lg my-navbar2 navbar-static-top',
                    // 'title' => 'OPEN DATA PROVINSI JAWA TENGAH'
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'items' => [
                    ['label' => 'Datasets', 'url' => ['/site/index']],
                    ['label' => 'Organizations', 'url' => ['/']],
                    ['label' => 'Groups', 'url' => ['/site/contact']],
                    ['label' => 'About', 'url' => ['/site/about']],
                ],
            ]);
            echo"<form class='example' action='/'>
                    <div class='field'>
                    <input class='search-input' type='text' placeholder='Search' name='search'>
                    <button class='search-button' type='btn-search'><i class='fa fa-search'></i></button>
                    </div>
                </form>";
            NavBar::end();
            
        ?>
        

</header>



    

    <div class="main">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>


<footer class="site-footer">
    <div class="container-lg">
       <div class="row">
            <div class="col-1"></div>
            <div class="col-7">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="list-group-item" href="/site/about">About OPEN DATA PROVINSI JAWA TENGAH</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item" href="http://docs.ckan.org/en/ckan-2.7.0/api/">CKAN API</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item" href="http://www.ckan.org/">CKAN Association</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item" href="http://www.opendefinition.org/okd/"><img src="http://data.jatengprov.go.id/base/images/od_80x15_blue.png"></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4">
                <p>
                    <strong>Powered by</strong>
                    <a class="hide-text ckan-footer-logo" href="http://ckan.org">CKAN</a>
                </p>
                <p>
                    <strong>Language</strong>
                </p>
            </div>
       </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>