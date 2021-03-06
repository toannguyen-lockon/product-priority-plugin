<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2016 LOCKON CO.,LTD. All Rights Reserved.
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Plugin\ProductPriority\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'search',
            'text'
        );
        $builder->add(
            'category_name',
            'text',
            array(
                'disabled' => true,
            )
        );
    }

    public function getName()
    {
        return 'admin_product_priority_search';
    }
}
