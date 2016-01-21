<ul>
    <?php foreach ($this->courses as $course): ?>
    <li><a href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>" class="tooltip"><?php echo $course->course_name; ?><span><?php echo $course->course_shortdescription; ?></span></a></li>
    <?php endforeach; ?>
</ul>

<?php foreach ($this->courses as $course): ?>
<div id="listcourses">
    <img src="img/noPicture.png" class="courses_block_avatar">
    <div class="courses_name"><?php echo $course->course_name; ?></div>
    <div class="courses_desc"><?php echo $course->course_shortdescription; ?></div>
    <div class="clear"></div>
    <!-- Место для даты -->
    <div class="clear"></div>
    <a href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>"><button class="courses_button">Читать</button></a>
    <div class="clear"></div> 
</div>
<?php endforeach; ?>