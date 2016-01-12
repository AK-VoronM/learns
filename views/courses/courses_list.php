<ul>
    <?php foreach ($this->courses as $course): ?>
    <li><a href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>" class="tooltip"><?php echo $course->course_name; ?><span><?php echo $course->course_shortdescription; ?></span></a></li>
    <?php endforeach; ?>
</ul>