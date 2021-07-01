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
use App\Models\User;
use App\Models\Inscription;
use App\Models\Liquidation;
use App\Models\Program;

require_once '../vendor/autoload.php';

class OpenPayController extends Controller {

    function __construct() {
        
    }

    public function index() {

        $request = array('register' => '00001', 'attrip' => array('name'));
        try {
            $openpay = \Openpay::getInstance('mbpnecurd3xny4z7dtwr', 'sk_b122651daeb54553b818ae9c83339deb', 'CO');

            $customer = array(
                'name' => 'Juan',
                'last_name' => 'Vazquez Juarez',
                'phone_number' => '4423456723',
                'email' => 'juan.vazquez@empresa.com.mx');

            $chargeRequest = array(
                'method' => 'card',
                'source_id' => 'k5prog6dr4fglfaxuadz',
                'amount' => 100,
                'currency' => 'COP',
                'description' => 'Cargo inicial a mi merchant',
                'order_id' => 'oid-00051',
                'device_session_id' => 'kR1MiQhz2otdIuUlQkbEyitIqVMiI16f',
                'customer' => $customer);

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
//        dd($request);
        try {
            // create instance OpenPay
            $user = User::where('id', $request->user_id)->first();
            $inscripcion = Inscription::where('user_id', $request->user_id)->first();
            $liquidacion = Liquidation::where('user_id', $request->user_id)->where('period', $inscripcion->periodo_academico)->first();
            $program = Program::where('id', $inscripcion->programa_id)->first();
//            dd($liquidacion);
            $openpay = \Openpay::getInstance('mbpnecurd3xny4z7dtwr', 'sk_b122651daeb54553b818ae9c83339deb', 'CO');

//            Openpay::setProductionMode(env('false'));
            // create object customer
            $customer = array(
                'name' => $inscripcion->pri_nombre . ' ' . $inscripcion->seg_nombre,
                'last_name' => $inscripcion->pri_apellido . ' ' . $inscripcion->seg_apellido,
                'phone_number' => $request->numberPhone,
                'email' => $request->email
            );

            $customer = array(
                'name' => $inscripcion->pri_nombre . ' ' . $inscripcion->seg_nombre,
                'last_name' => $inscripcion->pri_apellido . ' ' . $inscripcion->seg_apellido,
                'phone_number' => $request->numberPhone,
                'email' => $request->email);

            // create object charge
            $chargeRequest = array(
                'method' => 'card',
                'source_id' => $request->token_id,
                'amount' => (int) $request->monto,
                'currency' => 'COP',
                "iva" => "0",
                'description' => 'Pago Aunar Villavicencio ' . $program->Nombre,
                'order_id' => 'AunarVill3' . $liquidacion->id,
                'device_session_id' => $request->deviceIdHiddenFieldName,
                'customer' => $customer);

            $charge = $openpay->charges->create($chargeRequest);
//            dd($charge);
//            $charge2 = $openpay->charges->get($charge->id);
//            dd($charge2);
            return response()->json([
                        'data' => $charge->id
            ]);
//            return response()->json([
//                        'data' => $charge2->status
//            ]);
        } catch (OpenpayApiTransactionError $e) {
            
//            if($e->getErrorCode() == ''){
//                
//            }
            
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code_trans' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiRequestError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code_request' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiConnectionError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code_conection' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiAuthError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code_auth' => $e->getErrorCode(),
                            'description' => $e->getMessage(),
                            'http_code' => $e->getHttpCode(),
                            'request_id' => $e->getRequestId()
                        ]
            ]);
        } catch (OpenpayApiError $e) {
            return response()->json([
                        'error' => [
                            'category' => $e->getCategory(),
                            'error_code_error' => $e->getErrorCode(),
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

    public function token() {
        return view('admin.pagos.generarToken');
    }

    public function getToken(Request $request) {
        return $request;
    }

}
