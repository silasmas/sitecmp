<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class BaseController extends Controller
{
    /**
     * Handle response
     *
     * @param  $result
     * @param  $msg
     * @return \Illuminate\Http\Response
     */
    public function handleResponse($result, $msg)
    {
        $res = [
            'success' => true,
            'message' => $msg,
            'data'    => $result
        ];

        return response()->json($res, 200);
    }

    /**
     * Handle response error
     *
     * @param  $error
     * @param array  $errorMsg
     * @param  $code
     * @return \Illuminate\Http\Response
     */
    public function handleError($error, $errorMsg = [], $code = 404)
    {
        $res = [
            'success' => false,
            'message' => $error
        ];

        if (!empty($errorMsg)) {
            $res['data'] = $errorMsg;
        }

        return response()->json($res, $code);
    }

    /**
     * A recursive function for multidimensional arrays
     *
     * @param  $error
     * @param array  $errorMsg
     * @param  $code
     * @return \Illuminate\Http\Response
     */
    public function inArrayR($needle, $haystack, $strict = false)
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->inArrayR($needle, $item, $strict))) {
                return true;
            }
        }
    
        return false;
    }
}
