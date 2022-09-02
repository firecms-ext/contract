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

interface HasLocalePreference
{
    /**
     * Get the preferred locale of the entity.
     */
    public function getPreferredLocale(): ?string;
}
