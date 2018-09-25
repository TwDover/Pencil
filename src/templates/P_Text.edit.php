<?php
/** @var \Stationer\Graphite\View $View */
/** @var \Stationer\Pencil\models\Node $Node */
echo $View->render('header');
?>
<div class="container">
    <h1>Edit Text</h1>

    <form action="/P_Text/edit/<?php echo $Node->node_id; ?>" method="post">
        <div class="form-group">
            <label for="label">Label</label>
            <input class="form-control" type="text" name="label" id="label" value="<?php echo $Node->label ?? ''; ?>">
        </div>

        <div class="form-group">
            <label for="featured">Featured</label>
            <input class="form-control" type="checkbox" name="featured" id="featured" <?php echo $Node->featured ? 'checked="checked"': ''; ?>>
        </div>

        <div class="form-group">
            <label for="published">Published</label>
            <input class="form-control" type="checkbox" name="published" id="published" <?php echo $Node->published ? 'checked="checked"':''; ?>>
        </div>

        <div class="form-group">
            <label for="trashed">Trashed</label>
            <input class="form-control" type="checkbox" name="trashed" id="trashed" <?php echo $Node->trashed ? 'checked="checked"':''; ?>>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description"><?php echo $Node->description; ?></textarea>
        </div>

        <div class="form-group">
            <label for="mimeType">MIME Type</label>
            <input type="text" name="mimeType" id="mimeType" class="form-control" value="<?php echo $Node->File->mimeType; ?>">
        </div>

        <div class="form-group">
            <label for="body">Text Body</label>
            <textarea class="form-control" name="body" id="body"><?php echo $Node->File->body; ?></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Save Text</button>
    </form>
</div>

<?php echo $View->render('footer');