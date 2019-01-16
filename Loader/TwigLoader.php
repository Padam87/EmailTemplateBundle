<?php

namespace Padam87\EmailTemplateBundle\Loader;

use Padam87\EmailTemplateBundle\Model\EmailTemplate;
use Twig\Environment;

final class TwigLoader implements LoaderInterface
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function loadTemplate(string $template, array $context = []): EmailTemplate
    {
        $template = $this->twig->loadTemplate($template);

        return new EmailTemplate(
            $template->renderBlock('from', $this->twig->mergeGlobals($context)),
            $template->renderBlock('from_name', $this->twig->mergeGlobals($context)),
            $template->renderBlock('subject', $this->twig->mergeGlobals($context)),
            $template->renderBlock('body', $this->twig->mergeGlobals($context)),
            $template->renderBlock('style', $this->twig->mergeGlobals($context))
        );
    }
}
