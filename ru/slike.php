<?php
include "tpl/header.php";

$thumbnails = array();
$enlarged   = array();

foreach (new DirectoryIterator('../gfx/photo/mini') as $fileInfo)
	{
	if ($fileInfo->isDot()) continue;
	// ^ Izuzima . i ..
	if ($fileInfo->isDir()) continue;
	// ^ Izuzima fascikle
	$thumbnails[] = $fileInfo->getFilename();
	}

foreach (new DirectoryIterator('../gfx/photo/large') as $fileInfo)
	{
	if ($fileInfo->isDot()) continue;
	// ^ Izuzima . i ..
	if ($fileInfo->isDir()) continue;
	// ^ Izuzima fascikle
	$enlarged[] = $fileInfo->getFilename();
	}

$item                  =
	'<li>
   <div class="thumb fancybox">
    <a href="/gfx/photo/large/%s" target="_blank" rel="gallery">
     <img src="/gfx/photo/mini/%s" alt="" />
    </a>
   </div>
  </li>';
$item_without_enlarged =
	'<li>
   <div class="thumb">
    <img src="/gfx/photo/mini/%s" alt="" />
    <span>&nbsp;</span>
   </div>
  </li>';

sort($thumbnails, SORT_NUMERIC);

?>
	<div id="content" class="slike">
		<ul>
			<?php
			// Generate thumbnail list
			foreach ($thumbnails as $title)
				{
				if (in_array($title, $enlarged))
					{
					printf($item, $title, $title, $title);
					}
				else
					{
					printf($item_without_enlarged, $title);
					}
				}
			?>
		</ul>
		<div style="clear:both"></div>
		<a class="toVrh soft" href="#vrh">В начало страницы</a>
	</div><!--#content-->

<?php include "tpl/footer.php";
