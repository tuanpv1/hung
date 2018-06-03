<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/8/2017
 * Time: 4:47 PM
 */
use common\models\Category;
use yii\helpers\Url;

?>
<div class="sidebar span4" id="sidebar" data-motopress-type="static-sidebar"
     data-motopress-sidebar-file="sidebar.php">
    <div id="categories-3" class="widget"><h3>Service</h3>
        <ul>
            <?php if ($listCat) {
                $i = 2;
                foreach ($listCat as $item) {
                    /** @var $item Category */
                    ?>
                    <li class="cat-item cat-item-<?= $i ?>">
                        <a href="<?= Url::to(['site/index-news','category_id'=>$item->id]) ?>"><?= $item->display_name ?></a>
                    </li>
                    <?php
                    $i++;
                }
            } else {
                ?>
                <li class="cat-item cat-item-2"><a
                            href="https://livedemo00.template-help.com/wordpress_53761/category/coding/">Coding</a>
                </li>
                <li class="cat-item cat-item-3"><a
                            href="https://livedemo00.template-help.com/wordpress_53761/category/css3/">CSS3</a>
                </li>
                <li class="cat-item cat-item-4"><a
                            href="https://livedemo00.template-help.com/wordpress_53761/category/html5/">HTML5</a>
                </li>
                <li class="cat-item cat-item-5"><a
                            href="https://livedemo00.template-help.com/wordpress_53761/category/webdesign/">Web
                        design</a>
                </li>
                <?php
            } ?>
        </ul>
    </div>
</div>
