<?php require("html_templates/header.php");
echo 'Hello gomodev.org';

extension_loaded('ffmpeg') or die('Error in loading ffmpeg');

$ffmpegInstance = new ffmpeg_movie('media_samples/cbw3.avi');
echo "getDuration: " . $ffmpegInstance-&gt;getDuration() .


require("html_templates/footer.php"); ?> 
