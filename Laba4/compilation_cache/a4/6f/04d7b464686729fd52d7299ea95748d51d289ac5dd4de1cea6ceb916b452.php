<?php

/* ords.twig */
class __TwigTemplate_a46f04d7b464686729fd52d7299ea95748d51d289ac5dd4de1cea6ceb916b452 extends Twig_Template
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
        echo "    <a >
        <p>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["Название"]) ? $context["Название"] : null), "html", null, true);
        echo "</p>
        <div>
            <img src=";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ord"]) ? $context["ord"] : null), "immage", array()), "html", null, true);
        echo " />
        </div>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ords.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
