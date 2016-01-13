<ul>
    <?php foreach ($this->courses as $course): ?>
    <li><a href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>" class="tooltip"><?php echo $course->course_name; ?><span><?php echo $course->course_shortdescription; ?></span></a></li>
    <?php endforeach; ?>
</ul>

<hr>

<?php foreach ($this->courses as $course): ?>
<div class="courses_block">
  <a href="" onClick="Page.Go(this.href); return false">
    <img src="{ava}" class="courses_block_avatar">
  </a>
    <div class="courses_name"><?php echo $course->course_name; ?></div>
    <div class="courses_desc"><?php echo $course->course_shortdescription; ?></div>
    <div class="clear" style="height:0px;"></div>
    <!-- Место для даты -->
    <div class="clear" style="height:15px;"></div>
    <button class="courses_button">Читать</button>
    <div class="clear" style="height:15px;"></div> 
  </div>
</div>
<?php endforeach; ?>