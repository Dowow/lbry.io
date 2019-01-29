<?php $title = $title ?? __('download.other') ?>

<aside>
  <h3><?php echo $title ?></h3>
  <?php $buckets = array_fill(0, 3, []) ?>
  <?php $columns = 2 ?>
  <?php $index = 0 ?>

  <?php foreach ($osChoices as $osChoice): ?>
    <?php ob_start() ?>
    <?php list($url, $title, $icon) = $osChoice ?>
    <a href="<?php echo $url ?>">
      <span class="<?php echo $icon ?> icon-fw"></span><?php echo $title ?>
    </a>
    <?php $buckets[floor($index++ / $columns)][] = ob_get_clean() ?>
  <?php endforeach ?>

  <?php foreach (array_filter($buckets) as $bucketRow): ?>
  <ul>
    <li><?php echo implode('</li><li>', $bucketRow) ?></li>
  </ul>
  <?php endforeach ?>
</aside>
