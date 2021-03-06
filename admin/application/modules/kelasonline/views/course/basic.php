<div class="panel panel-default">
    <div class="panel-body">
        <?php echo show_message() ?>
            <div class="form-group">
                <label for="">Code :</label>
                <p class="form-static"><span class="label label-primary"><?php echo $course->code ?></span></p>
            </div>
            <div class="form-group">
                <label>Name :</label>
                <?php echo form_input('name', set_value('name', $course->name), ['class' => 'form-control']); ?>
            </div>
            <div class="form-group">
                <label for="">Kategori :</label>
                <?php echo form_dropdown('category_id', $category_lists, set_value('category_id', $course->category_id), ['class' => 'c-select form-control']); ?>
            </div>
            <div class="form-group">
                <label>Deskripsi :</label>
                <?php echo form_textarea('description', set_value('description', $course->description, FALSE), ['class' => 'form-control editor']); ?>
            </div>
    </div>
</div>

