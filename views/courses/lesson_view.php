<?php
$lesson = $this->lesson;
$course = $this->course;
?>
<h1>Урок №<?php echo $lesson->lesson_number; ?>. <?php echo $lesson->lesson_name; ?>.</h1>
<h3>из курса: <a href="/learns/?ctrl=Courses&act=ShowLessons&id=<?php echo $course->course_id; ?>"><?php echo $course->course_name; ?></a></h3>
<p><?php echo $lesson->lesson_text; ?></p>
