<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

use DB;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use App\Mobile;

class ExtractController extends BaseController
{
	function index(Request $request){
//		  $mobs = Mobile::get();

   		$client = new Client();
	/*	$crawler = $client->click($crawler->selectLink('Sign in')->link());
		$form = $crawler->selectButton('Sign in')->form();
		$crawler = $client->submit($form, array('login' => 'asmaa00', 'password' => ''));
		$crawler->filter('.flash-error')->each(function ($node) {
		    print $node->text()."\n";
		});
		*/
		
//return floatval(str_replace(',', '', "1,999.001 "));

$crawler = $client->request('GET', "$request->u");

				 $pages = ($crawler->filter(' .pagination li')->count() > 0)
				        ? $crawler->filter(' .pagination li:nth-last-child(2)')->text()
				        : 0;


				    for ($i = 1; $i < $pages+1 ; $i++) {
			       
				     $crawler = $client->request('GET', "substr($request->u,0,-1).$i");
				        
				        $crawler->filter(' .single-item')->each(function ($node) {
							$name   = trim( $node->filter(' .title')->text());
							$price = trim($node->filter('.is ')->text());
							$mob=Mobile::insert(['name' => $name, 'price' => floatval(str_replace(',', '', substr($price,0,-3)))]);
								print_r($name.' ===> '.str_replace(',', '', substr($price,0,-3))."<br>");
					     });
				    }

	}

}
