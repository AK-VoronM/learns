<?php
$lesson = $this->lesson;
$course = $this->course;
?>
<h1>Урок №<?php echo $lesson->lesson_number; ?>. <?php echo $lesson->lesson_name; ?>.</h1>
<h3>из курса: <a href="/learns/?ctrl=Lessons&act=ShowLessons&id=<?php echo $course->course_id; ?>"><?php echo $course->course_name; ?></a></h3>
<p><?php echo $lesson->lesson_text; ?></p>
<?php if($this->lesson_prew): ?>
<a href="/learns/?ctrl=Lessons&act=ShowLesson&id=<?php echo $this->lesson_prew->lesson_id; ?>"><button><?php echo $this->lesson_prew->lesson_name; ?> </button></a>
<?php endif; ?>
<?php if($this->lesson_next): ?>
<a href="/learns/?ctrl=Lessons&act=ShowLesson&id=<?php echo $this->lesson_next->lesson_id; ?>"><button><?php echo $this->lesson_next->lesson_name; ?> </button></a>
<?php endif; ?>