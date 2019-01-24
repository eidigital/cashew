<?php

namespace Accolade\Cashew;
require_once('cache.php');

class InstagramOAuth extends Cache {

	public function get_feed($path, $label, $accessToken){
			return parent::get_the_json($path, $label, 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$accessToken.'&count=20');
	}

}
