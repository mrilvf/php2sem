<?php require(__DIR__.'/../header.php'); ?>
<?php if ($article): ?>
<form action="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/update/<?=$article->getId();?>" method="POST">
  <div class="form-group">
    <label for="title">Title article</label>
    <input type="text" class="form-control" id="title" name="title" value="<?=htmlspecialchars($article->getTitle());?>">
  </div>
  <div class="form-group">
    <label for="text">Text article</label>
    <textarea name="text" id="text" class="form-control"><?=htmlspecialchars($article->getText());?></textarea>
  </div>
  <input type="hidden" name="authorId" value="<?=$article->getAuthorId()->getId();?>">
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php else: ?>
<p>Article not found.</p>
<?php endif; ?>
<?php require(__DIR__.'/../footer.php'); ?>
