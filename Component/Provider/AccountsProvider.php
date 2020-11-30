<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 05.09.2017
 * Time: 14:52
 */

namespace PM\PlentyMarketsBundle\Component\Provider;

use DateTimeInterface;
use Exception;
use PM\PlentyMarketsBundle\Component\Model\Account\Contact;
use PM\PlentyMarketsBundle\Component\Response\ContactsResponse;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class AccountsProvider
 *
 * @package PM\PlentyMarketsBundle\Component\Provider
 */
class AccountsProvider extends BaseProvider
{
    /**
     * Get Variation
     *
     * @param int $contactId
     *
     * @return array|Exception|object|Contact
     */
    public function getContact($contactId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ACCOUNT_CONTACT, $contactId));
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), Contact::class, 'json');
    }

    /**
     * Get Contacts
     *
     * @param int   $page
     * @param array $query
     *
     * @return array|Exception|mixed|Contact[]
     */
    public function getContacts(int $page = 1, array $query = [])
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            RestfulUrl::ACCOUNT_CONTACTS,
            [
                'query' => array_merge(
                    [
                        'page' => $page,
                    ],
                    $query
                ),
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        /** @var ContactsResponse $data */
        $data = $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), ContactsResponse::class, 'json');

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        /* Get other pages */
        $merged = $this->getContacts($page + 1, $query);
        if ($merged instanceof Exception) {
            $this->getService()->getLogger()->error(
                'AccountsProvider:getContacts got some exception importing more pages',
                [
                    'message' => $merged->getMessage(),
                ]
            );

            $merged = [];
        }

        return array_merge($data->getEntries(), $merged);
    }


    /**
     * Get Contacts (Updated Since Date)
     *
     * @param DateTimeInterface|null $since
     *
     * @return array|Exception|mixed|Contact[]
     * @throws Exception
     */
    public function getContactsUpdatedSince(?DateTimeInterface $since = null)
    {
        $query = [
            'itemsPerPage' => 10000,
        ];

        if (null !== $since) {
            $query['updatedAtAfter'] = $since->format('Y-m-d');
        } else {
            $query['updatedAtAfter'] = '2020-01-01';
        }

        return $this->getContacts(1, $query);
    }
}