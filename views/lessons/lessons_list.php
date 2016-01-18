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


<hr>

<?php foreach ($this->lessons as lesson): ?>
<div id="listcourses">
    <img src="{ava}" class="courses_block_avatar">
    <div class="courses_name"><?php echo $lesson->lesson_name; ?></div>
    <div class="courses_desc"><?php echo $lesson->lesson_shortdescription; ?></div>
    <div class="clear"></div>
    <!-- Место для даты -->
    <div class="clear"></div>
    <button class="courses_button" href="/learns/?ctrl=Lessons&act=ShowLesson&id=<?php echo $lesson->lesson_id; ?>">Читать</button>
    <div class="clear"></div> 
</div>
<?php endforeach; ?>