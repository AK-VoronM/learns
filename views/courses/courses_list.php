<ul>
    <?php foreach ($this->courses as $course): ?>
    <li><a href="#" class="tooltip"><?php echo $course->course_name; ?><span><?php echo $course->course_shortdescription; ?></span></a></li>
    <?php endforeach; ?>
</ul>