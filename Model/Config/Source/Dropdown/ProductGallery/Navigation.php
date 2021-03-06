<?php

namespace Cloudinary\Cloudinary\Model\Config\Source\Dropdown\ProductGallery;

use Magento\Framework\Data\OptionSourceInterface;

class Navigation implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => 'none',
                'label' => 'None',
            ],
            [
                'value' => 'always',
                'label' => 'Always',
            ],
            [
                'value' => 'mouseover',
                'label' => 'Mouseover',
            ],
        ];
    }
}
