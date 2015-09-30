<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Exception;

/**
 * BadCredentialsException is thrown when the user credentials are invalid.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class BadCredentialsException extends AuthenticationException
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        //未注册用户登录错误
        echo '<script>
        console.log("hello");
        $(document).ready(function(){
            var error="<em style=\'color:red\'>未注册的用户！</em>";
            $("#username").append(error);
        })
        console.log("hello2");
        </script>';
        return null;
    }
}
