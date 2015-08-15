<?php

namespace Moip\MoipHttpPhp;

/**
 * Interface para definição de um autenticador HTTP.
 */
interface HTTPAuthenticator
{
    /**
     * Autentica uma requisição HTTP.
     *
     * @param \Moip\MoipHttpPhp\HTTPRequest $httpRequest
     */
    public function authenticate(HTTPRequest $httpRequest);
}
