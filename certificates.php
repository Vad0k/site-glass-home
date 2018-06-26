<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div class="container">
        <?php require_once'assets/fragments/header-nav.php'; ?>
        <article id="certificates">
            <div class="sub-container">
            <?php for($i = 0; $i < 4; $i++):?>
            <section class="item">
                <div class="image" style="background-image: url('assets/images/certificates/1.jpg');">
                    <div class="panel">
                        <h2>Какое нибудь  длинное название сертификата</h2>
                        <a href="" class="btn-orange">Посмотреть сертификат</a>
                    </div>
                </div>
            </section>
            <?php endfor;?>
            </div>
        </article>
    </div>

    <style>
        #certificates{

        }
        #certificates .sub-container{
            font-size: 0;
            margin: 0 -26px;
            text-align: center;
        }
        #certificates .item{
            display: inline-block;
            background: #FFF;
            max-width: 579px;
            padding: 63px;
            margin: 13px;
            width: 100%;

        }
        #certificates .image{
            position: relative;
            min-height: 454px;
            -webkit-background-clip: content-box;
            -moz-background-clip: content-box;
            background-clip: border-box;
            background-position: center center;
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            background-size: cover;
            border-radius: 4px;
            overflow: hidden;
        }
        #certificates .item .panel{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 12px 24px 14px 19px;
            background-color: rgba(8,8,8,.8);
            color: #FFF;
            font-size: 17px;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            justify-content: space-between;
        }
        #certificates .item h2{
            max-width: 251px;
            margin-right: 19px;
            text-align: left;
        }
        #certificates .item a{
            font-size: 15px;
            padding: 7px 16px;
            white-space: nowrap;
        }

    </style>

    <?php require_once 'assets/fragments/footer.php'; ?>
</body>
</html>