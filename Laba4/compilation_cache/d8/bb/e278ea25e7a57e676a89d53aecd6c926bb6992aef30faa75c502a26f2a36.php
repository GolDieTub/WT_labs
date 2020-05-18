<?php

/* Bullshit.twig */
class __TwigTemplate_d8bbe278ea25e7a57e676a89d53aecd6c926bb6992aef30faa75c502a26f2a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["some_wrds"]) ? $context["some_wrds"] : null), "html", null, true);
        echo "
</p>";
    }

    public function getTemplateName()
    {
        return "Bullshit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
