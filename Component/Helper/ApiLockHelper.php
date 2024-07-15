<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 06.03.2018
 * Time: 11:39
 */

namespace PM\PlentyMarketsBundle\Component\Helper;

use PM\PlentyMarketsBundle\Entity\ApiLock;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;


/**
 * Class ApiLockHelper
 *
 * @package PM\PlentyMarketsBundle\Component\Helper
 */
class ApiLockHelper
{
    /**
     * Append Type Choice
     */
    public static function appendTypeChoiceToForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label'       => 'type',
                'choices'     => static::getTypeChoice(),
                'constraints' => new NotBlank(),
            ]);

    }

    /**
     * Get Types
     */
    public static function getTypeChoice(): array
    {
        $choices = MixedHelper::getConstantValuesByPrefix(ApiLock::class, 'TYPE_');

        return array_combine($choices, $choices);
    }
}