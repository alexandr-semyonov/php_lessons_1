<?php
require_once __DIR__ . '/classes/Uploader.php';

$uploader = new Uploader('galleryImage');

$uploader->upload();

header ('location: gallery.php');