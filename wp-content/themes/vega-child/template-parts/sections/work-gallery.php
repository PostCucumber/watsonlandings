<?php
use KeriganSolutions\FacebookPhotoGallery\FacebookPhotoGallery;

// Cursor before the returned data set
$before  = $_GET['before'] ?? null;
// Cursor after the returned data set
$after   = $_GET['after'] ?? null;

$gallery = new FacebookPhotoGallery();
$albums   = $gallery->albums(12, $before, $after);

?>

<div class="row photo-gallery">
	<?php
	foreach ($albums->data as $album) { ?>
		<div class="col-md-3">
			<figure class="image is-4by3">
				<a href="/our-work/?albumName=<?= $album->name ?>&albumId=<?= $album->id ?>">
					<img src="<?= $album->cover_photo->images[4]->source ?>" alt="<?= $album->name ?>" class="img-responsive">
				</a>
			</figure>
			<p class="has-text-centered"><?= $album->name ?></p>
		</div>
		<?php
	}
	?>
</div>