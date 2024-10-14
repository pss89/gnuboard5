<!-- layout에 args 전달 -->

<?php $this->layout('bbs/login/layout', $mainArgs) ?>

<?php $this->start('main_content') ?>
<?php echo $mainArgs['login']; ?>

<?php $this->stop() ?>