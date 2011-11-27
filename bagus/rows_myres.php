<?php if (count($lep->tpl["resources"])) : ?>

  <?php foreach ($lep->tpl["resources"] as $k => $v) { ?>

    <div class="post">

      <div class="alignleft thumbnail_row">
        <a href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>" alt="<?php print $v['title'] ?>">
        <img class="thumbnail" src="http://open.thumbshots.org/image.aspx?url=<?php print $v['url'] ?>" alt="<?php print $v['title'] ?>" style="border:1px solid #777;"></a>
      </div>

      <h2 class="title"><a title="<?php print $v['title'] ?>" rel="bookmark" href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>"><?php print $v['title'] ?></a></h2>

      <p class="post-meta">
        <span class="post-date"><?php print date('F d, Y',$v['created_at']) ?></span>
        <span class="post-comments"> | in <?php print cat_get_category_path_url($v['category_id']); ?></span>

        <?php if ($v['user_id']): ?>
          <span class="post-comments"> | by <?php print user_get_username($v['user_id']) ?></span>
        <?php endif ?>
      </p>

      <div class="entry">
        <p><?php print $v['description'] ?></p>
      </div><!-- /.entry -->

      <div class="post-more">      
        <span class="read-more"><a class="button" href="usercp/res_edit.php?id=<?php print $v['res_id']?>"><?php print _t('Edit') ?></a></span>
        <span class="read-more"><a class="button" href="upgrade.php?id=<?php print $v['res_id']?>"><?php print _t('Upgrade') ?></a></span>
        <span class="read-more"><a class="button" title="<?php print $v['title'] ?>" rel="bookmark" href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>">View Detail</a></span>
        <span class="read-more"><a class="button" href="<?php print $v['url'] ?>" name="link_<?php print $v['res_id'] ?>" title="Visit <?php print $v['title'] ?>">Visit website</a></span>
      </div> 

      <div class="post-more">
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/image.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Upload image') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/video.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Upload video') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/promo.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Add promo') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/event.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Add event') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/product.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Add product') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/document.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Add document') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/news.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Add news') ?></a>
        <a class="woo-sc-button small silver" href="<?php print URL.'usercp/article.php?act=add&res_id='.$v['res_id'] ?>"><?php print _t('Add article') ?></a>
      </div>

    </div> <!--/.post -->
  
  <?php } ?>

<?php endif; ?>
