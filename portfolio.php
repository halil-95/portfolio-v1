<?php include 'header.php';?>
<?php 
$dirgif = "dist/img/gif/"; 
$links = array(
'https://saglykhm.gov.tm/ru',
'https://lalezar-apteka.com.tm/',
'https://www.business.com.tm/ru/',
'https://portf.codertime.site/plit16_v1/',
'https://site1.codertime.site/',
'http://www.titizmermer.com.tr/en/projects/',
'https://turkmenmobilya.com/',
'https://turkmen-tranzit.com/',
'https://yyldyzhotel.gov.tm/ru',
);
$imgs = array(
    'apteka2',
    'apteke',
    'biznes',
    'plit',
    'stroy',
    'titi',
    'tmobile',
    'tt',
    'yyldyz',
);
?>
<section class="portfolio" id="portfolio">
    <div class="bg_img" style="background-image: url('dist/img/1.webp');"></div>
    <div class="portfolio__block container flex">
        <?php $i = 0;?>
        <?php foreach($imgs as $img ):?>
        <div class="portfolio__block__list">
            <video autoplay loop muted playsinline>
                <source src="<?=$dirgif.$img;?>.webm" type="video/webm"  width="200" height="200"/>
            </video>            
            <p><a href="<?=$links[$i++];?>" target="_blank">Ссылка на сайт</a></p>
        </div>
       <?php endforeach;?>
    </div>
</section>
<?php include 'footer.php'; ?>

<amp-img></amp-img>