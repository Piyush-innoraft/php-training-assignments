<?php
 require './vendor/autoload.php';
 use GuzzleHttp\Client;
 use GuzzleHttp\Psr7\Request;
class assign1{
    public $method;
    public $api;
    public $title;
    public $t;
    public $lii;
    public $btn;
    public $url;
    function apicall($method,$api){
      $client = new Client();
      $res = $client->request($method, $api, [
      'auth' => ['user', 'pass']
      ]);
      return $res;
    }
    function decode($res){
      return json_decode((string)$res->getBody(),true);;
    }
    function execute($obj,$host,$i){
      
  $res=$obj->apicall('GET','https://ir-dev-d9.innoraft-sites.com/jsonapi/node/services');
  $json_objekat = $obj->decode($res);
  $title=($json_objekat['data'][$i]['attributes']['title']); 
  $text=$json_objekat['data'][$i]['attributes']['field_services']['value'];
  trim($text);
  $btn=$json_objekat['data'][$i]['attributes']['path']['alias'];
  $btn = "$host" . "$btn";
  $t=(explode("<ul>",$text)); 
  $lii=explode("<li>",$t[1]); 
  //trim($lii[$j]);
  $img_url=$json_objekat['data'][$i]['relationships']['field_image']['links']['related']['href'];
  $image = new assign1();
  $resimg = $image->apicall('GET',$img_url);
  $json_image_object = json_decode((string)$resimg->getBody(),true);
  $url=( $json_image_object['data']['attributes']['uri']['url']);
  $url = "$host" . "$url";

    }
    function printtext($title,$t,$lii,$btn){
      echo "<h1 class='titl'> $title </h1>";
      echo "<p id='para'>$t[0]</p>";
      echo "<ul>";
      for($j=1;$j<=count($lii);$j++)
      {
        if(!is_null($lii[$j])){
          echo "<li>$lii[$j]</li>";
        }
      }
      echo "<a href='$btn' class='butto'>Explore more</a>";

    } 
    function printimage($url){
      echo "<img src=$url alt='ok'class='imag'>";
    }
    function get_title() {
        return $this->title;
      }
      function get_t() {
        return $this->t;
      }
      function get_lii() {
        return $this->lii;
      }
      function get_btn() {
        return $this->btn;
      }
      function get_url() {
        return $this->url;
      }
    }

 ?>

