<h2><?php echo $title; ?></h2>

<?php

//echo $aboutUsPrinciples;
    foreach ($aboutUsPrinciples as $n){
        echo $n->getPrincipleHeader();
    }
?>

<?php /*foreach ($news as $news_item): */?><!--

    <div class="main">
        <?php /*echo $news_item['name']; */?>
    </div>
    <p><a href="<?php /*echo site_url('news/'.$news_item['name']); */?>">View article</a></p>

--><?php /*endforeach; */?>