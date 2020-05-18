<?php

/* navigation.twig */
class __TwigTemplate_81dc8d65a21a525d4b2b02012cc1842549e9efd948949240a875c6571c33fd26 extends Twig_Template
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
        echo "<header class=\"site-header\">
    <h1>Claude Monet</h1>
    <nav>
        <a href=";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["link_index"]) ? $context["link_index"] : null), "html", null, true);
        echo " class=\"navigation_link\">Главная</a>
        <a href=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["link_menu"]) ? $context["link_menu"] : null), "html", null, true);
        echo " class=\"navigation_link\">Меню</a>
        <a href=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["link_contscts"]) ? $context["link_contscts"] : null), "html", null, true);
        echo " class=\"navigation_link\">Контакты</a>
        <a href=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["link_about"]) ? $context["link_about"] : null), "html", null, true);
        echo " class=\"navigation_link\">О компании</a>
        <a href=";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["link_f1"]) ? $context["link_f1"] : null), "html", null, true);
        echo " class=\"navigation_link\">Отзывы</a>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
