<?php
require_once __DIR__ . '/Classes/Uploader.php';

$uploader = new Uploader('galleryImage');

$uploader->upload();

header ('location: .');