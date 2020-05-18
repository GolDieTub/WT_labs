<?php

/* comment.twig */
class __TwigTemplate_d0c87b299349962b2a570a60a75fe9937b07dcc9aff06541aa6fa1a99eea62c9 extends Twig_Template
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
        echo "<com";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["res_name"]) ? $context["res_name"] : null), "html", null, true);
        // line 3
        echo twig_escape_filter($this->env, (isset($context["res_message"]) ? $context["res_message"] : null), "html", null, true);
        echo "
</com>";
    }

    public function getTemplateName()
    {
        return "comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
