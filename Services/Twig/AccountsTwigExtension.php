<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 05.09.2017
 * Time: 14:54
 */

namespace PM\PlentyMarketsBundle\Services\Twig;

use AppBundle\Entity\Project;
use PM\PlentyMarketsBundle\Component\Model\Account\Contact;
use PM\PlentyMarketsBundle\Services\RestfulService;
use Throwable;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;


/**
 * Class AccountsTwigExtension
 *
 * @package PM\PlentyMarketsBundle\Services\Twig
 */
class AccountsTwigExtension extends AbstractExtension
{
    /**
     * AccountsTwigExtension constructor.
     */
    public function __construct(private readonly RestfulService $restfulService)
    {
    }

    /**
     * Get Filters
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new TwigFilter(
                'pm_plenty_accounts_contact_by_id',
                [
                    $this,
                    'getContactById',
                ]
            ),
        ];
    }

    /**
     * Get Contact By Id
     *
     * @param int     $id
     *
     * @return Throwable|Contact
     */
    public function getContactById($id, Project $project)
    {
        return $this->restfulService->accounts($project->getConfig())->getContact($id);
    }

}