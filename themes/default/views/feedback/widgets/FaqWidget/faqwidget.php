<div class='portlet'>
    <div class='portlet-decoration'>
        <div class='portlet-title'>Вопросы и ответы</div>
    </div>
    <div class='portlet-content'>
        <?php if(isset($models) && $models != array()): ?>
            <ul>
                <?php foreach ($models as $model): ?>
                    <li><?php echo CHtml::link($model->theme, array('/feedback/contact/faqView/', 'id' => $model->id)); ?></li>
                <?php endforeach;?>
            </ul>
        <?php endif; ?>
    </div>
</div>
