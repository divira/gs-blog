<div class="blog_list_container">

  <!-- HTML5 Scoped StyleSheet
       Add any css styles that you require to this style declaration. A scoped
       stylesheet prevents your styles from contaminating the website's theme.
       Scoped stylesheets are virtually backwards compatible with most browsers.
  -->
  <style scoped>
    .blog_post_thumbnail {
      width:200px;
      height:auto;
      float:left;
      padding-right:10px;
      padding-bottom:10px;
    }
    .blog_list_container {
      clear:both;
    }	
  </style>
  
  <!-- Blog post title
       Only show the title of the post when not on the post itself as there is a
       function in place to add the post's title to the page's title.
  -->
  <?php if(!isset($_GET['post'])) { ?>
    <h3 class="blog_post_title"><a href="<?php echo $p['posturl']; ?>">
      <?php echo $p['title']; ?>
    </a></h3>
  <?php } ?>
  
  <!-- Blog post information
       This is where all the information about the post is displayed, such as the
       author, date and categories. Add or remove these from here as required.
       The relevant settings have now been removed from the blog admin.
  -->
  <p class="blog_post_info">
    <?php if(!empty($p['author'])){?><span class="blog_post_author"><?php i18n(BLOGFILE.'/BY'); ?> <?php echo $p['author']; ?></span><?php } ?>
    <?php if(!empty($p['date'])){?><span class="blog_post_date"><?php i18n(BLOGFILE.'/ON'); ?> <?php echo date(i18n_r(BLOGFILE.'/DATE_DISPLAY'), $p['date']); ?></span><?php } ?>
    <?php if(!empty($p['categories'][0])){?><span class="blog_post_category"><?php i18n(BLOGFILE.'/IN'); ?> <?php echo $p['categories'][0]; ?></span><?php } ?>
  </p>
  
  <!-- Post thumbnail
       This is the thumbnail for the post. It should be wrapped in an <a> linking to the full post.
       Images are currently (v3.3.0) stored in the '/data/uploads' folder.
  -->
  <?php if(!empty($p['thumbnail'])) { ?>
    <a href="<?php echo $p['posturl']; ?>">
      <img src="<?php echo $p['thumburl'].$p['thumbnail']; ?>" class="blog_post_thumbnail" />
    </a>
  <?php } ?>
  
  <!-- Post content
       This is where the content of the post will go. This will output the excerpt on the main page
       or the full post on the post's page. Only the output tag is required as the internal functions
       automatically determine showing of excerpt or full post.
  -->
  <div class="blog_post_content">
    <?php echo $p['content']; ?>
  </div>
  
  <!-- Post tags
       Show the tags that the post has been tagged with. This function outputs an array of tags where
       it is recommended that you use a foreach loop to create your list with a link in each one.
       $p['tagurl'] is available to give you the base url for the tags, just add the tag to the end
       of the final url.
  -->
  <p class="blog_tags">
    <b><?php i18n(BLOGFILE.'/TAGS'); ?> :</b>
    <?php foreach ($p['tags'] as $tag) { ?>
      <a href="<?php echo $p['tagsurl'].$tag; ?>"><?php echo $tag; ?></a>,&nbsp;
    <?php } ?>
  </p>
  
</div>
