<?php
$htmlApril = 'pApril arrived! Happy spring!p
br
img src=httpwww.fabuloussavers.comnew_wallpaperBeautiful_Spring_Yellow_Flowers_freecomputerdesktopwallpaper_p.jpg';

$htmlElse = 'pIt is not April yet, but it will be soon....p
br
img src=httpdata.whicdn.comimages17730189tumblr_luo9u8Sim21qmejd3o1_400_large.jpg';

$datum = date('F');
if ($datum == 'April') {
    echo $htmlApril;
}
else{
echo $htmlElse;

}




