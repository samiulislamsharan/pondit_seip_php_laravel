<?php
require_once './vendor/autoload.php';

use Pondit\Bangla\{Audio, Video as BanglaVideo};
use Pondit\English\Video as EnglishVideo;

// include_once './app/Bangla/BanglaVideo.php';
// include_once './app/English/EnglishVideo.php';

$banglaVideo = new BanglaVideo;
$banglaAudio = new Audio;

$englishVideo = new EnglishVideo;