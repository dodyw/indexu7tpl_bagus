<?php include TPL_PATH."header.php"; ?>


  <div class="col-full" id="content">
    <div class="col-left" id="main">      
      
      <?php print html_content("main"); ?>                    
    
    </div><!-- /#main -->

    <div class="col-right" id="sidebar">

      <div class="primary">

        <div class="widget widget_woo_search">
          <div class="search_main">
            <form method="get" class="searchform" action="search.php" >
              <input type="text" class="field s" name="q" value="Search for listing" onfocus="if (this.value == 'Search for listing') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search for listing';}" />

              <input type="image" src="<?php print TPL_URL ?>images/ico-search.png" class="search-submit" name="submit" value="Go" />
            </form>    
            <div class="fix"></div>
          </div> <!--/*search_main -->  
        </div>


        <?php print html_content("sidebar"); ?> 
      </div>

    </div><!-- /#sidebar -->


    

  </div><!-- /#container -->

  <div id="footer-out">
    <div class="col-full col-4" id="footer-widgets">
      <div class="block footer-widget-1">
        <?php print html_content("footer1"); ?> 
      </div><!-- /.block footer-widget-1 -->

      <div class="block footer-widget-2">
        <?php print html_content("footer2"); ?> 
      </div><!-- /.block footer-widget-2 -->

      <div class="block footer-widget-3">
        <?php print html_content("footer3"); ?> 
      </div><!-- /.block footer-widget-3 -->

      <div class="block footer-widget-4">
        <?php print html_content("footer4"); ?> 
      </div><!-- /.block footer-widget-4 -->                    
                  
      <div class="fix"></div>
    </div><!-- /#footer-widgets -->
    
    <div class="col-full" id="footer">
      <div class="col-left" id="copyright">
        <p><span>Bagus</span> Copyright &copy; 2011. All Rights Reserved.</p>
      </div>      
      <div class="col-right" id="credit">
        <p>Powered by <a href="http://www.nicecoder.com">Indexu <?php print $lep->config['version']; ?></a></p>
      </div>      
    </div><!-- /#footer -->    
  </div><!-- /#footer-out -->    

</div><!-- /#wrapper -->
			
<?php include TPL_PATH."footer.php"; ?>