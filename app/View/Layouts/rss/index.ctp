<?php

$this->set("channelData", array(
	'title' => "Layouts mais recentes",
	'link' => $this->Html->url('/', true),
	'description' => 'Layouts mais recentes no portfólio de inspiração 1.15',
	'language' => 'pt-BR',
	'image' => array("url" => IMAGES_URL . "box.png")
	));


foreach($layouts as $l)
{
	echo $this->Rss->item(array(), array(
		'title' => $l['Layout']['name'],
		'description' => $this->Html->image('upload/thumbs/'.$l['Layout']['filename']),
		'link' => '/layouts/view/' . $l['Layout']['id']
		));
}