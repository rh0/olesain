<?php
/**
 * preprocess page vars
 */
function olesain_preprocess_page(&$vars) {
  //Going ahead and processing our menu array to html and passing to page
  if($vars['main_menu']) {
    $vars['main_menu'] = theme('links', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'id' => 'main-menu-nav',
        'class' => array('links', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }
}

function olesain_preprocess_node(&$vars) {
  $vars['content']['links']['#theme'] = 'links';
  if(isset($vars['content']['links']['comment']['#links']['comment-new-comments'])) {
    unset($vars['content']['links']['comment']['#links']['comment-add']);
  }
  unset($vars['content']['links']['#attributes']['class'][1]);
  unset($vars['content']['links']['comment']['#links']['comment-new-comments']);
}

function olesain_preprocess_comment(&$vars) {
  $comment = $vars['elements']['#comment'];
  $vars['created_date'] = date('F j, Y', $comment->created);
  $vars['created_time'] = date('g:ia', $comment->created);
}
