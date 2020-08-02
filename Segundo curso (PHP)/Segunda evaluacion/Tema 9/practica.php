<style>
.noticia {
border:1px solid black;
width:auto;
margin:15px;
padding:5px;
}
</style>
<?php
function rssReader($url,$begin="",$end=""){
$rss = simplexml_load_file($url);
if($rss){
$items = $rss->channel->item;
$out="";
foreach($items as $item){
  $out.=$begin.'<p>'.$item->title.'</p>';




  if($item->children('itunes', true)->subtitle->count()>0){
  $texto = $item->children('itunes', true)->subtitle;

}


$mp3 = $item->enclosure->attributes();
$url=$mp3['url'];

$out.="

<audio controls>
<source src='".$url."' type='audio/mpeg' width='300px;'>
</audio>"
;

$out.=$end;
}
}
return $out;
}
echo rssReader('https://www.ondacero.es/rss/podcast/8272/podcast.xml',
'<div class="noticia">','</div>');
?>