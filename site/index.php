<?php require("html_templates/header.php");
echo 'Hello gomodev.org !';

extension_loaded('ffmpeg') or die('Error in loading ffmpeg');

$ffmpegInstance = new ffmpeg_movie('media_samples/cbw3.avi');
echo "getDuration: " . $ffmpegInstance->getDuration();


exec('ffmpeg -f image2 -r 1/5 -i media_samples/image%03d.png media_samples/out.mpg');

require("html_templates/footer.php"); ?> 
