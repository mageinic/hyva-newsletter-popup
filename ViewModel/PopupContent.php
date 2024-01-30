<?php
/**
 * MageINIC
 * Copyright (C) 2023. MageINIC <support@mageinic.com>
 *
 * NOTICE OF LICENSE
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see https://opensource.org/licenses/gpl-3.0.html.
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category MageINIC
 * @package Hyva_MageINICNewsletterPopup
 * @copyright Copyright (c) 2023. MageINIC (https://www.mageinic.com/)
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MageINIC <support@mageinic.com>
 */

namespace Hyva\MageINICNewsletterPopup\ViewModel;

use MageINIC\NewsletterPopup\Block\NewsletterPopup;
use Magento\Cms\Block\BlockByIdentifier;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class PopupContent implements ArgumentInterface
{
    /**
     * Receive Popup Content
     *
     * @param NewsletterPopup $block
     * @return string
     * @throws LocalizedException
     */
    public function getPopupContent(NewsletterPopup $block): string
    {
        $html = "<div class='main-popup-content'>";

        if ($block->getPopUpSelect() == '2') {
            $html .= "<div class='main-popup-content'>";
            $html .= $block->getLayout()->createBlock(BlockByIdentifier::class)
                ->setIdentifier('newsletter-popup-content')->toHtml();
            $html .= "</div>";

            $html .= "<div class='newsletter-form'>";
            $html .= $block->getLayout()->createBlock(BlockByIdentifier::class)
                ->setIdentifier('front-content-form')->toHtml();
            $html .= "</div>";
        }

        if ($block->getPopUpSelect() == '1') {
            $html .= "<div class='offer-popup-content'>";
            $html .= $block->getLayout()->createBlock(BlockByIdentifier::class)
                ->setIdentifier('offer-popup')->toHtml();
            $html .= "</div>";
        }

        return $html;
    }
}
