<?php

$source = implode(" ", file("source.html"));

/*
$pattern1 = '|.*?">.*?<div class="snippet snippet-(.*?)"><div class="thumbnail-wrapper.*? goog-inline-block"><div class="thumbnail-wrapper goog-inline-block"><a href=
"(.*?)" class="thumbnail" data-a="(.*?)" data-c="(.*?)"><img src=".*?" data-lazysrc="(.*?)" style="visibility: .*?;" alt="(.*?)"></a><div class="ratings goog-inline-block" title=".*?
(.*?) (.*?)"><div class="goog-inline-block star SPRITE_star_on_dark"></div><div class="goog-inline-block star SPRITE_star_on_dark"></div><div class="goog-inline-block star SPRITE_star_on_dark"></div><div class="goog-inline-block star SPRITE_star_on_dark"></div><div class="goog-inline-block star SPRITE_star_half_dark"></div></div></div></div><div class="details goog-inline-block"><div><a class="title" title="(.*?)" data-a="(.*?)" data-c="(.*?)" href="(.*?)">(.*?)</a></div><span class="attribution"><div class="goog-inline-block"><a class="goog-inline-block" href="(.*?)">(.*?)</a></div></span><p class="snippet-content">(.*?)</p><div style="width: 100%"><div class="buy-wrapper "><div class="buy-border"><a class="buy-link buy-button goog-inline-block buy-alternate-offer-default" id=".*?" href="javascript:void(0)" data-c="(.*?)" data-a="(.*?)" data-docattribution="(.*?)" data-docconsumptionuri="" data-docid="(.*?)" data-doctitle="(.*?)" data-dociconurl="(.*?)" data-doctype="(.*?)" data-parentdocid="" data-doccurrencycode="(.*?)" data-docprice="(.*?)" data-docpricemicros="(.*?)" data-isfree="(.*?)" data-ispurchased="(.*?)" data-offertype="(.*?)" data-rentalgrantperioddays="" data-rentalactiveperiodhours="" data-offertitle="" data-offerdescription="" data-docpubprivacypolicyurl="" data-docrequirespsv="(.*?)" data-docrequiressubaddress="(.*?)"><span class="buy-button-price">(.*?)</span></a></div></div></div></div></div>.*|i';
*/
$pattern1 = '|.*?">.*?<div class="snippet snippet-(.*?)"><div class="thumbnail-wrapper.*? goog-inline-block"><div class="thumbnail-wrapper goog-inline-block"><a href=.*|i';

$cells = explode('carousel-cell', $source);

$first = TRUE;
foreach ($cells as $cell) {
	if ($first) {
		$first = FALSE;
		continue;
	}

	if (preg_match($pattern1, $cell, $matches1)) {

	} else {
		$error = array(
		    'msg' => "Cell pattern doesn't match.",
		    'pattern' => $pattern1,
		    'cell' => $cell
		);
		print "<pre><code>";
		var_dump($error);
		print "</code></pre>";
		die();
	}
}
