<?php require(__DIR__.'/../header.php'); ?>
<form action="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/update/<?=$article->getId();?>" method="POST">
  <div class="form-group">
    <label for="title">Title article</label>
    <input type="text" class="form-control" id="title" name="title" value="<?=htmlspecialchars($article->getTitle(), ENT_QUOTES);?>">
  </div>
  <div class="form-group">
    <label for="text">Text article</label>
    <textarea name="text" id="text" class="form-control"><?=htmlspecialchars($article->getText(), ENT_QUOTES);?></textarea>
  </div>
  <input type="hidden" name="authorId" value="<?=htmlspecialchars($article->getAuthorId()->getId(), ENT_QUOTES);?>">
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require(__DIR__.'/../footer.php'); ?>
