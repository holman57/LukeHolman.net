<!DOCTYPE html><head><title>-tumblr-</title>

</head><body> 
<?
$xml = simplexml_load_file(‘http://stocklamp.tumblr.com/api/read/xml’);
$posts = $xml->xpath(“/tumblr/posts/post[@type=’regular’]”);
foreach($posts as $post) {?>  
<?echo $post[‘id’];?>
<?echo $post[‘url-with-slug’];?>”>
<?echo $post->{‘regular-title’};?>
<?echo $post->{‘regular-body’};?>
<?echo date(“jS D M, H:i”,strtotime($post[‘date’]));?>
<?}?>
<?php
// Authenticate via OAuth
$client = new Tumblr\API\Client(
  'ilRclLbPOyXi8XXcqzLQ5fJtIIgqSyvsOl23jQ0Je6plXcftjU',
  'o7ugvwshFPcxHN6njytFWwSwBidB3DoLG62KBNNUWgFt4ug7KF',
  'lBG8diGkXSNWxKediilxBurGswcqRmQYgII3QQPNw7yeX8wpyY',
  'lipB5GSxfzGiwXHsWrrNcL3AJOAzdVZqPgjKEMO5x7LSIJbIoH'
);

// Make the request
$client->getUserInfo();
echo var_dump($client);
?>
</body></html>