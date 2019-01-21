<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shopify{
    private $_API = array();
     private $_KEYS  = array('API_KEY' , 'API_SECRET', 'ACCESS_TOKEN' , 'SHOP_DOMAIN');
    public function __construct($data = FALSE)
    {
        if(is_array($data)){
            $this->setup($data);
        }
    }
    public function setup($data=array())
    {	
        foreach ($this->_KEYS as $key ) {
            if(array_key_exists($key,$data)){
                $this->_API[$key] = $this->verifySetup($key , $data[$key]);
            }
        }
    }
    private static function verifySetup($key='', $value=''){
        $value = trim($value);
        switch($key)
        {
            case 'SHOP_DOMAIN':
                  preg_match('/(https?:\/\/)?([a-zA-Z0-9\-\.])+/', $value, $matched);
                  
                  return $matched[0];
                  break;
            default:
                  return $value;
        }
    }
    public function installURL($data = array())
	{
		return 'https://' . $this->_API['SHOP_DOMAIN'] . '/admin/oauth/authorize?client_id=' . $this->_API['API_KEY'] . '&scope=' . implode(',', $data['scopes']).'&state='.$data['nonce'].(!empty($data['redirect']) ? '&redirect_uri=' . urlencode($data['redirect']) :'');
	}
    /**
	 * Verifies data returned by OAuth call
	 * @param array|string $data
	 * @return bool
	 * @throws \Exception
	 */
    public function signOutShops($data = array())
    {
    	return 'https://' . $this->_API['SHOP_DOMAIN'] . '/admin/auth/logout?access_token='.$this->_API['ACCESS_TOKEN'].'?redirect_uri=' . urlencode($data['bizeazyHome']);
    }
	public function verifyRequest($data = NULL, $bypassTimeCheck = FALSE)
	{
		$da = array();
		if (is_string($data))
		{
			$each = explode('&', $data);
			foreach($each as $e)
			{
				list($key, $val) = explode('=', $e);
				$da[$key] = $val;
			}
		}
		elseif (is_array($data))
		{
			$da = $data;
		}
		else
		{
			throw new \Exception('Data passed to verifyRequest() needs to be an array or URL-encoded string of key/value pairs.');
		}
		// Timestamp check; 1 hour tolerance
		if (!$bypassTimeCheck)
		{
			if (($da['timestamp'] - time() > 3600))
			{
				throw new \Exception('Timestamp is greater than 1 hour old. To bypass this check, pass TRUE as the second argument to verifyRequest().');
			}
		}
		if (array_key_exists('hmac', $da))
		{
			// HMAC Validation
			$queryString = http_build_query(array('code' => $da['code'], 'shop' => $da['shop'], 'timestamp' => $da['timestamp']));
			$match = $da['hmac'];
			$calculated = hash_hmac('sha256', $queryString, $this->_API['API_SECRET']);
		}
		else
		{
			// MD5 Validation, to be removed June 1st, 2015
			$queryString = http_build_query(array('code' => $da['code'], 'shop' => $da['shop'], 'timestamp' => $da['timestamp']), NULL, '');
			$match = $da['signature'];
			$calculated = md5($this->_API['API_SECRET'] . $queryString);
		}
		return $calculated === $match;
	}

    /**
	 * Calls API and returns OAuth Access Token, which will be needed for all future requests
	 * @param string $code
	 * @return mixed
	 * @throws \Exception
	 */
    private function curlHttpApiRequest($method, $url, $query='', $payload='', $request_headers=array())
	{
		$url = $this->curlAppendQuery($url, $query);

		$ch = curl_init($url);
		$this->curlSetopts($ch, $method, $payload, $request_headers);
		$response = curl_exec($ch);
		$errno = curl_errno($ch);
		$error = curl_error($ch);
		curl_close($ch);

		if ($errno) throw new ShopifyCurlException($error, $errno);
		list($message_headers, $message_body) = preg_split("/\r\n\r\n|\n\n|\r\r/", $response, 2);
		$this->last_response_headers = $this->curlParseHeaders($message_headers);

		return $message_body;
	}
	private function curlParseHeaders($message_headers)
	{
		$header_lines = preg_split("/\r\n|\n|\r/", $message_headers);
		$headers = array();
		list(, $headers['http_status_code'], $headers['http_status_message']) = explode(' ', trim(array_shift($header_lines)), 3);
		foreach ($header_lines as $header_line)
		{
			list($name, $value) = explode(':', $header_line, 2);
			$name = strtolower($name);
			$headers[$name] = trim($value);
		}


		return $headers;
	}
	private function curlAppendQuery($url, $query)
	{
		if (empty($query)) return $url;
		if (is_array($query)) return "$url?".http_build_query($query);
		else return "$url?$query";
	}
	private function curlSetopts($ch, $method, $payload, $request_headers)
	{
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_USERAGENT, 'ohShopify-php-api-client');
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);

		curl_setopt ($ch, CURLOPT_CUSTOMREQUEST, $method);
		if (!empty($request_headers)) curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

		if ($method != 'GET' && !empty($payload))
		{
			if (is_array($payload)) $payload = http_build_query($payload);
			curl_setopt ($ch, CURLOPT_POSTFIELDS, $payload);
		}
		
	}
	public function getShopifyData($shopDomain,$json,$token){
        $url="https://".$shopDomain."/admin/".$json."access_token=".$token;
        $response = $this->curlHttpResponce($url);
        return $response;   
     }

	public function getAccessToken($code = '')
	{
		$url = "https://". $this->_API['SHOP_DOMAIN'] . "/admin/oauth/access_token";
		
		$payload = "client_id=".$this->_API['API_KEY']."&client_secret=".$this->_API['API_SECRET']."&code=".$code;

		$response = $this->curlHttpApiRequest('POST', $url, '', $payload, array());
		$response = json_decode($response);
		return $response;
		if (isset($response['access_token']))
		return $response['access_token'];
		return '';
		
		exit;
		
	}
	public function postShopInfo($url,$shopInfo=array())
	{	
		// $shopInfo = json_encode($shopInfo);
		$response = $this->curlHttpApiRequest('POST', $url, '', $shopInfo, array());
		return $response;
		exit();
	}

    public function curlHttpResponce($url)
    {
    	$ch = curl_init();
		 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL, $url);
			$result = curl_exec($ch);
			curl_close($ch);
			 $obj = json_decode($result); 
		return $obj;
    }
   
    public function shopSessionData(){
    	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/shop.json?access_token=".$this->_API['ACCESS_TOKEN'];
		$response = $this->curlHttpResponce($url);
		return $response;	
     }
 
    public function getThemes(){
		 $url="https://".$this->_API['SHOP_DOMAIN']."/admin/themes.json?access_token=".$this->_API['ACCESS_TOKEN'];	
		$response = $this->curlHttpResponce($url);
		return $response;	
    }
    public function getThemesSetting($themesId){
    	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/themes/".$themesId."/assets.json?access_token=".$this->_API['ACCESS_TOKEN']."&asset[key]=config/settings_data.json";
		$response = $this->curlHttpResponce($url);
		
		return $response;	
    }
    public function getCollection(){
    	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/custom_collections.json?access_token=".$this->_API['ACCESS_TOKEN'];	
	 	$response = $this->curlHttpResponce($url);
	 	return $response;	
    }
 	public function getCollects(){
    	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/collects.json?access_token=".$this->_API['ACCESS_TOKEN'];	
	 	$response = $this->curlHttpResponce($url);
	 	return $response;	
    }
    public function collection_listings(){
     	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/collection_listings.json?access_token=".$this->_API['ACCESS_TOKEN'];	
	 	$response = $this->curlHttpResponce($url);
	 	return $response;	
    }
    public function userSessionData(){
	   	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/customers.json?access_token=".$this->_API['ACCESS_TOKEN'];	
	   	$response = $this->curlHttpResponce($url);
		return $response;	
	   	
    }
    public function shopsProduct()
    {

    	$url="https://".$this->_API['SHOP_DOMAIN']."/admin/products.json?access_token=".$this->_API['ACCESS_TOKEN'];
		$response = $this->curlHttpResponce($url);
		return $response;	
    }
    public function productCollectionWise($collection_id)
    {
		$url="https://".$this->_API['SHOP_DOMAIN']."/admin/products.json?collection_id=".$collection_id."&access_token=".$this->_API['ACCESS_TOKEN'];
    	$response = $this->curlHttpResponce($url);
    	return $response;
    }
    public function oneTimeApplicationCharges($payload)
	{
		$url = "https://". $this->_API['SHOP_DOMAIN']. "/admin/application_charges.json?access_token=".$this->_API['ACCESS_TOKEN'];

		$response = $this->curlHttpApiRequest('POST', $url, '', $payload, array());
		$response = json_decode($response);
		return $response;
		
	}
	public function monthlyApplicationCharges($payload)
	{
		$url = "https://". $this->_API['SHOP_DOMAIN']. "/admin/recurring_application_charges.json?access_token=".$this->_API['ACCESS_TOKEN'];

		$response = $this->curlHttpApiRequest('POST', $url, '', $payload, array());
		$response = json_decode($response);
		return $response;
		
	}
	public function monthlyApplicationChargesUpdate($ChargeId,$payload)
	{

		$url = "https://". $this->_API['SHOP_DOMAIN']. "/admin/recurring_application_charges.json/".$ChargeId."/customize.json?access_token=".$this->_API['ACCESS_TOKEN'];

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_USERAGENT, 'ohShopify-php-api-client');
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);

		curl_setopt ($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt ($ch, CURLOPT_POSTFIELDS, $payload);
		$response = curl_exec($ch);
	

		if (!$response) {
		    die("Connection Failure.n");
		}
		$response = json_decode($response);
		return $response;
	}
}