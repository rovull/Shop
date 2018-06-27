<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Effloresce</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>


<?php


foreach ($newsList as $newsItem):?>
    <div class="post" style="padding-left: 700px">
        <h2 class="title" style="padding-left: 100px"><a
                    href='/news/<?php echo $newsItem['id']; ?>'><?php echo $newsItem['name']; ?></a></h2>
        <div class="entry">
            <p><img src="<?php echo $newsItem['img']; ?>" width="300" height="300" alt=""/></p>

        </div>
    </div>

    <?php
endforeach; ?>
<section class="row">
    <div class="col-12 col-md-12">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php if ($pagination['currP'] != 1){?>
                <li class="page-item">
                    <a class="page-link" href="/index/?page=<?php echo $pagination['currP'] - 1?>;" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php }?>
                <?php for ($i = 1; $i <= $pagination['pageCnt']; $i++){?>
                <li class="page-item <?php if ($pagination['currP'] == $i)?>"><a class="page-link" href="/index/?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                <?php }?>
                <?php if ($pagination['currP'] < $pagination['pageCnt']){?>
                <li class="page-item">
                    <a class="page-link" href="/index/?page=<?php echo $pagination['currP'] + 1;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <?php }?>
            </ul>
        </nav>
    </div>
</section>




</body>
</html>
