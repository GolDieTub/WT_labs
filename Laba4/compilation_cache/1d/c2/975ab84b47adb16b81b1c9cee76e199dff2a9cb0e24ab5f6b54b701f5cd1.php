<?php

/* orders.twig */
class __TwigTemplate_1dc2975ab84b47adb16b81b1c9cee76e199dff2a9cb0e24ab5f6b54b701f5cd1 extends Twig_Template
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
        echo "<div>
    <p>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["Столик"]) ? $context["Столик"] : null), "html", null, true);
        echo " ~/~";
        echo twig_escape_filter($this->env, (isset($context["дата"]) ? $context["дата"] : null), "html", null, true);
        echo " ~/~";
        echo twig_escape_filter($this->env, (isset($context["время"]) ? $context["время"] : null), "html", null, true);
        echo " ~/~";
        echo twig_escape_filter($this->env, (isset($context["заказ"]) ? $context["заказ"] : null), "html", null, true);
        echo " ~/~";
        echo twig_escape_filter($this->env, (isset($context["цена"]) ? $context["цена"] : null), "html", null, true);
        echo "</p>

</div>";
    }

    public function getTemplateName()
    {
        return "orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
