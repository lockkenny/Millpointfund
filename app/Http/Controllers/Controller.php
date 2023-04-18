<?php


  

namespace App\Http\Controllers;

   

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class XMLController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        $xmlString = file_get_contents(public_path('sitemap.xml'));

        $xmlObject = simplexml_load_string($xmlString);

                   

        $json = json_encode($xmlObject);

        $phpArray = json_decode($json, true); 

   

        dd($phpArray);

    }

}
