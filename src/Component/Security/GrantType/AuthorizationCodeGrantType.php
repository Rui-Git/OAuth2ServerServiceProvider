<?php
/*
 * This file is part of the OAuth2ServerServiceProvider.
 *
 * (c) Axel Etcheverry <axel@etcheverry.biz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Euskadi31\Component\Security\GrantType;

/**
 * AuthorizationCodeGrantType
 *
 * @author Axel Etcheverry <axel@etcheverry.biz>
 */
class AuthorizationCodeGrantType implements GrantTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'authorization_code';
    }
}