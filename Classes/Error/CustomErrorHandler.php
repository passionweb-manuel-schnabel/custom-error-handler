<?php

namespace Passionweb\CustomErrorHandler\Error;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Error\PageErrorHandler\PageErrorHandlerInterface;
use TYPO3\CMS\Core\Http\RedirectResponse;

class CustomErrorHandler implements PageErrorHandlerInterface
{
    public function __construct(
        protected int $statusCode,
        protected array $configuration
    ){
    }

    public function handlePageError(
        ServerRequestInterface $request,
        string $message,
        array $reasons = []
    ): ResponseInterface {
        // add your custom error handling here instead of the following example

        // use reason and message to decide what to do
        if(
            array_key_exists('code', $reasons) &&
            $message === 'The requested page does not exist'
        ) {
            return new RedirectResponse('/custom-page-does-not-exist', $this->statusCode);
        }
        // if no reason or message matches, use your selected default error handling
        return new RedirectResponse('/' . $this->statusCode, $this->statusCode);
    }
}
