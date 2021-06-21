<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Openpay;
use Exception;
use OpenpayApiError;
use OpenpayApiAuthError;
use OpenpayApiRequestError;
use OpenpayApiConnectionError;
use OpenpayApiTransactionError;
use Illuminate\Http\JsonResponse;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;

require_once '../vendor/autoload.php';

class OpenPayController extends Controller {

    function __construct() {
        
    }

    public function index() {

        $request = array('register' => '00001', 'attrip' => array('name'));
        dd($request);
        try {
            // create instance OpenPay
            $openpay = Openpay::getInstance(env('mbpnecurd3xny4z7dtwr'), env('sk_b122651daeb54553b818ae9c83339deb'));

            Openpay::setProductionMode(env('false'));

            // create object customer
            $customer = array(
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email
            );

            // create object charge
            $chargeRequest = array(
                'method' => 'card',
                'source_id' => $request->token,
                'amount' => env('20000'),
                'currency' => 'MXN',
                'description' => 'Cargo de ejemplo Programación JJE',
                'device_session_id' => $request->deviceSessionId,
                'customer' => $customer
            );

            $charge = $openpay->charges->create($chargeRequest);

            return response()->json([
                        'data' => $charge->id
            ]);
        } catch (OpenpayApiTransactionError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiRequestError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiConnectionError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiAuthError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (Exception $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        }
    }

    /**
     * Create charge in OpenPay
     * https://www.openpay.mx/docs/api/?php#con-id-de-tarjeta-o-token
     * 
     */
    public function store(Request $request) {
        try {
            // create instance OpenPay
            $openpay = Openpay::getInstance(env('mbpnecurd3xny4z7dtwr'), env('sk_b122651daeb54553b818ae9c83339deb'));

            Openpay::setProductionMode(env('false'));

            // create object customer
            $customer = array(
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email
            );

            // create object charge
            $chargeRequest = array(
                'method' => 'card',
                'source_id' => $request->token,
                'amount' => env('20000'),
                'currency' => 'MXN',
                'description' => 'Cargo de ejemplo Programación JJE',
                'device_session_id' => $request->deviceSessionId,
                'customer' => $customer
            );

            $charge = $openpay->charges->create($chargeRequest);

            return response()->json([
                        'data' => $charge->id
            ]);
        } catch (OpenpayApiTransactionError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiRequestError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiConnectionError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiAuthError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (Exception $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        }
    }

}
