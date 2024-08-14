<?php
// $this->assign('NOT', 'active');

	foreach ($notifications as $notification) {
      $type = !empty($messages[$notification['type']]) ? $messages[$notification['type']] : 'info';
      echo '<div class="alert alert-'.$type.'" id="'.$notification['id'].'">';
      echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      
        // pr($notification);
        echo "<p>".$notification['title']."</p>";
        echo "<p>".$notification['system_message']."</p>";
        echo "<p><i class='icon-comment-alt'></i> ".$notification['user_message']."</p>";

        echo '<div style="text-align: right;"><small class="muted">'.$notification['created'].'</small></div>';
      echo '</div>';
  }

echo $this->Html->link('All notifications >>', array('controller' => 'notifications', 'action' => 'index'), array('escape' => false, 'class' => 'btn btn-info'));

?>