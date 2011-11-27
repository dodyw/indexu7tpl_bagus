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
        <span class="read-more"><a class="button" href="usercp/claim.php?act=claim&id=<?php print $v['res_id']?>"><?php print _t('Claim this listing') ?></a></span>
        <span class="read-more"><a class="button" title="<?php print $v['title'] ?>" rel="bookmark" href="<?php print seo_detail_url2($v['res_id'], $v['title']) ?>">View Detail</a></span>
        <span class="read-more"><a class="button" href="<?php print $v['url'] ?>" name="link_<?php print $v['res_id'] ?>" title="Visit <?php print $v['title'] ?>">Visit website</a></span>
      </div> 

    </div> <!--/.post -->
  
  <?php } ?>

<?php endif; ?>
