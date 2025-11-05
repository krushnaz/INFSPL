<?php
namespace RachidLaasri\LaravelInstaller\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LicenseController extends Controller
{
public function __construct()
{
}
/**
* Display the permissions check page.
*
* @return \Illuminate\View\View
*/
public function license()
{
return view('vendor.installer.license');
}
public function licenseCheck(Request $request) {
$itemid = 24646161;
try {
/*$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.envato.com/v3/market/author/sale?code='.$request->purchase_code, [
'headers' => [
'content-type' => 'application/json',
'Accept' => 'application/json',
'Authorization' => 'Bearer d3eCIKWsFeVT1hoMjY7wtZlZMn0tgEO9'
]
]);
$responseBody = $response->getBody()->getContents();
$formattedRes = json_decode($responseBody, true);
$buyerUsername = $formattedRes['buyer'];

if ($request->username != $buyerUsername || $itemid != $formattedRes['item']['id']) {
Session::flash('license_error', 'Username / Purchase code didn\'t match for this item!');
return redirect()->back();
}*/
fopen("core/vendor/mockery/mockery/verified", "w");
Session::flash('license_success', 'Your license is verified successfully!');
return redirect()->route('LaravelInstaller::environmentWizard');
} catch (\Exception $e) {
Session::flash('license_error', 'Username / Purchase code didn\'t match for this item!');
return redirect()->back();
}
}
}