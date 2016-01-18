<div class="lessons">
        <ul>
            <?php foreach ($this->lessons as $lesson): ?>
            <li><a href="/learns/?ctrl=Lessons&act=ShowLesson&id=<?php echo $lesson->lesson_id; ?>" class="tooltip"><?php echo $lesson->lesson_name; ?><span><?php echo $lesson->lesson_shortdescription; ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    <a href="#" title="Для доступа к урокам - Вам необходимо добавить курс.">
    <div class="course_reg">
    </div>
    </a>
</div>
