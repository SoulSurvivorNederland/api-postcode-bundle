<?php
/*
* (c) Api Postcode <info@api-postcode.nl>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace ApiPostcode\PostcodeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PostcodeController
 *
 * (c) Api Postcode <info@api-postcode.nl>
 */
class PostcodeController extends Controller
{
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function fetchAction(Request $request)
    {
        try {
            $postcode    = $request->get('zipcode');
            $houseNumber = $request->get('number');

            $address = $this->get('api.postcode.client')->fetchAddress($postcode, $houseNumber);

            return new JsonResponse($address->toArray());
        } catch (\Exception $exception) {
            return new JsonResponse(['message' => $exception->getMessage()], Response::HTTP_SERVICE_UNAVAILABLE);
        }
    }
}
