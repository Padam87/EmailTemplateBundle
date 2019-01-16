<?php

namespace Padam87\EmailTemplateBundle\Loader;

use Padam87\EmailTemplateBundle\Model\EmailTemplate;

interface LoaderInterface
{
    public function loadTemplate(string $template, array $context = []): EmailTemplate;
}
