<?php

namespace Padam87\EmailTemplateBundle\Model;

class EmailTemplate
{
    private $from;
    private $fromName;
    private $subject;
    private $body;

    /**
     * Can be used to put styles in a separete block, which is useful for CSS inliners.
     *
     * @example {% block style %}{{ source(asset('build/css/email.css')) }}{% endblock %}
     *
     * @var string
     */
    private $style;

    public function __construct(string $from, string $fromName, string $subject, string $body, string $style)
    {
        $this->from = $from;
        $this->fromName = $fromName;
        $this->subject = $subject;
        $this->body = $body;
        $this->style = $style;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getFromName(): ?string
    {
        return $this->fromName;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getStyle(): string
    {
        return $this->style;
    }
}
