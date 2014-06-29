<?php

/**
 * pjdietz\WellRESTed\Exceptions\CurlException
 *
 * @author PJ Dietz <pj@pjdietz.com>
 * @copyright Copyright 2014 by PJ Dietz
 * @license MIT
 */

namespace pjdietz\WellRESTed\Exceptions;

/**
 * Exception related to a cURL operation. The message and code should correspond
 * to the cURL error and error number that caused the excpetion.
 */
class CurlException extends WellRESTedException
{
}
