<?php

/**
* @author shivam <shivam.developer7@gmail.com>
* @copyright Copyright (c) 2018 www.conversionbug.com
*/

namespace ConversionBug\CurrencyFormat\Model;


/**
 * Currency model
 *
 * @api
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Currency extends \Magento\Directory\Model\Currency
{

    /**
     * Apply currency format to number with specific rounding precision
     *
     * @param   float $price
     * @param   int $precision
     * @param   array $options
     * @param   bool $includeContainer
     * @param   bool $addBrackets
     * @return  string
     */
    public function formatPrecision(
        $price,
        $precision,
        $options = [],
        $includeContainer = true,
        $addBrackets = false
    ) {
        $options['position'] = \Magento\Framework\Currency::RIGHT;
        if (!isset($options['precision'])) {
            $options['precision'] = $precision;
        }
        if ($includeContainer) {
            return '<span class="price">' . ($addBrackets ? '[' : '') . $this->formatTxt(
                $price,
                $options
            ) . ($addBrackets ? ']' : '') . '</span>';
        }
        return $this->formatTxt($price, $options);
    }
}
