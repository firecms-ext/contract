<?php

declare(strict_types=1);
/**
 * This file is part of FirecmsExt Contract.
 *
 * @link     https://www.klmis.cn
 * @document https://www.klmis.cn
 * @contact  zhimengxingyun@klmis.cn
 * @license  https://github.com/firecms-ext/contract/blob/master/LICENSE
 */
namespace FirecmsExt\Contract;

interface HasMobileNumber
{
    /**
     * Get the mobile number of the entity.
     * Must be E.164 international standard format (CC+NDC+SN, eg. +8618812345678).
     */
    public function getMobileNumber(): ?string;
}
