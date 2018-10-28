<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                    Please configure the
                <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>
        <div class="row">
            <div class="col-lg-6">
                <img class="col-lg-12"
                     src="https://upload.wikimedia.org/wikipedia/id/thumb/3/33/Peta_indonesia.jpg/800px-Peta_indonesia.jpg"
                     alt="peta kita">
                <img class="col-lg-12"
                     src="https://upload.wikimedia.org/wikipedia/id/thumb/3/33/Peta_indonesia.jpg/800px-Peta_indonesia.jpg"
                     alt="peta kita">
            </div>
            <div class="col-lg-6">
                <p>IP Nasional</p>
                <p>Wilayah I</p>
                <p>Wilayah II</p>
                <p>Wilayah III</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Range Nilai</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Makna</th>
                    </tr>
                    </thead>
                    <tr>
                        <th scope="col">0-1,00</th>
                        <td>F</td>
                        <td>Gagal</td>
                    </tr>
                    <tr>
                        <th scope="col">1,01-1,50</th>
                        <td>E</td>
                        <td>Sangat Buruk</td>
                    </tr>
                    <tr>
                        <td>1,51-2,00</td>
                        <td>D</td>
                        <td>Buruk</td>
                    </tr>
                    <tr>
                        <th scope="col">2,01-2,50</th>
                        <td>C-</td>
                        <td>Cukup (DC)</td>
                    </tr>
                    <tr>
                        <th scope="col">2,51-3,00</th>
                        <td>C</td>
                        <td>Cukup</td>
                    </tr>
                    <tr>
                        <th scope="col">3,01-3,50</th>
                        <td>B-</td>
                        <td>Baik (DC)</td>
                    </tr>
                    <tr>
                        <th scope="col">3,51-4,00</th>
                        <td>B</td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <th scope="col">4,01-4,50</th>
                        <td>B-</td>
                        <td>Sangat Baik</td>
                    </tr>
                    <tr>
                        <th scope="col">4,51-5,00</th>
                        <td>B</td>
                        <td>Pelayanan Prima</td>
                    </tr>
                </table>
            </div>
        </div>

    <?php endif; ?>
</div>
