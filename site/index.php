<?php require("html_templates/header.php");
echo 'Hello gomodev.org ! publish date : 11.03.2014 / 20:13';

//extension_loaded('ffmpeg') or die('Error in loading ffmpeg');

//$ffmpegInstance = new ffmpeg_movie('media_samples/cbw3.avi');
//echo "getDuration: " . $ffmpegInstance->getDuration();


//exec('ffmpeg -f image2 -r 1/5 -i media_samples/image%03d.png media_samples/out.mpg');
?>

<div ng-app="myApp">
    <div ng-controller="mainCtrl">
      <input type="file" file-model="myFile"/>
        <button ng-click="uploadFile()">upload me</button>
    </div>
    
</div>
<?php
require("html_templates/footer.php"); ?> 
