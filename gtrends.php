<?php
// Random Trends //
$randomtrends = array('p1','p8','p13','p9'); // us, au, ca, uk
$rtrends = $randomtrends[rand(0,3)];
$url = 'http://www.google.com/trends/hottrends/atom/feed?pn='.$rtrends;
?>
<div class="tagTrends">
<span>TRENDS</span><br/>
<?php
if(@simplexml_load_file($url)){
$data = simplexml_load_file($url);
foreach($data->channel->item as $hot){
echo '<a href="'.get_bloginfo('url').'/search/'.permak($hot->title).'"># '.$hot->title.'</a>';
}
}
?>
</div>
<div class="clear"></div>

Perhatikan bagian search, silahkan disesuaikan dengan permalink agc anda.
