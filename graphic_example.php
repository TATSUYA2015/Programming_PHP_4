<?php
if (isset($_GET['message'])) {
    //フォントと画像を読み込み、テキストの横幅を計算
    $font = dirname(__FILE__) . '/fonts/BIZUDPGothic-Bold.ttf';
    $size = 12;
    $image = imagecreatefrompng("button.png");
    $tsize = imagettfbbox($size, 0, $font, $_GET['message']);


    //センターを計算
    $dx = abs($tsize[2] - $tsize[0]);
    $dx = abs($tsize[5] - $tsize[3]);
    $X  =  (imagesx($image) - $dx) / 2 ;
    $X  =  (imagesx($image) - $dx) / 2 + $dy;

    //ラベルを描画
    $black = imagecolorallocate($image,0,0,0);
    imagettftext($iamge, $size, 0, $x, $y, $black, $font,$_GET['message']);

    //画像を返す
    header("Content-type: image/png");
    imagepng($image);

    exit;
} ?>
<html>
    <head>
        <title>ホームボタン</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            ボタンのラベルにするメッセージを入力する:
            <input type="text" name="message" /><br />
            <input type="submit" value="ボタンを作成" />
        </form>
    </body>
</html>