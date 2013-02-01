<?php

if (!isset($channelData)) {
	$channel = array();
}
if (!isset($channelData['title'])) {
	$channelData['title'] = "$title_for_layout";
}

echo $this->Rss->document(
	$this->Rss->channel(
		array(), $channelData, $this->fetch('content')
	)
);
?>
