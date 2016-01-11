<ul>
    <?php foreach ($this->lessons as $lesson): ?>
    <li><a href="/learns/?ctrl=Courses&act=ShowLesson&id=<?php echo $lesson->lesson_id; ?>" class="tooltip"><?php echo $lesson->lesson_name; ?><span><?php echo $lesson->lesson_shortdescription; ?></span></a></li>
    <?php endforeach; ?>
</ul>