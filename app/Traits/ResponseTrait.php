<?php
namespace App\Traits;
use stdClass;

trait ResponseTrait
{

/*
    Response Standards :
    message : String or "",
    Error : Array or [] .
    data : object or array of object  or {},
    status : false or true
    code : one of http codes like (401,200,422 ...)
*/
  
     function generalResponse($status, $code, $message, $errors = null, $data = null)
    {
        $data = is_null($data) ? new stdClass() : $data;
        return response()->json(['status' => $status, 'code' => $code, 'message' => $message, 'errors' => $errors, 'data' => $data], $code);
    }
}
