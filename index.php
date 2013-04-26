<head>
<title>Nathan Johnson @ Flickr</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/lightbox.css" rel="stylesheet" />
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
</head>

<body>

<?php
//Function: Get flickr media and display based on user id
function getFlickrPhotos($id, $limit=150) {
    require_once("phpFlickr/phpFlickr.php");
    $f = new phpFlickr("ea247a6a3a3a32d38085c7e00fdd1bce");
    $photos = $f->people_getPublicPhotos($id, NULL, NULL, 159);
    $return.='<ul class="flickrPhotos">';
    foreach ($photos['photos']['photo'] as $photo) {
        $return.='<li><a rel="lightbox" href="' . $f->buildPhotoURL($photo, 'medium') . '" title="' . $photo['title'] . '"><img src="' . $f->buildPhotoURL($photo, 'square') . '" alt="' . $photo['title'] . '" title="' . $photo['title'] . '" /></a></li>';
    }
    echo $return.='</ul>';
} ?>

<div id=content">
<?php getFlickrPhotos('53720703@N05',150); ?>
</div>
</body>