<ul>
    <?php foreach ($this->courses as $course): ?>
    <li><a href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>" class="tooltip"><?php echo $course->course_name; ?><span><?php echo $course->course_shortdescription; ?></span></a></li>
    <?php endforeach; ?>
</ul>

<hr>

<?php foreach ($this->courses as $course): ?>
<div id="listcourses">
    <img src="{ava}" class="courses_block_avatar">
    <div class="courses_name"><?php echo $course->course_name; ?></div>
    <div class="courses_desc"><?php echo $course->course_shortdescription; ?></div>
    <div class="clear"></div>
    <!-- Место для даты -->
    <div class="clear"></div>
    <button class="courses_button" href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>">Читать</button>
    <div class="clear"></div> 
</div>
<?php endforeach; ?>