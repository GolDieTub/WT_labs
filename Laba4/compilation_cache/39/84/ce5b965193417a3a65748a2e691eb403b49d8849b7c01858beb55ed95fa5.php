<?php

/* login.twig */
class __TwigTemplate_3984ce5b965193417a3a65748a2e691eb403b49d8849b7c01858beb55ed95fa5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Claude Monet</title>
    <link href=\"DATA/CSS/style.css\" rel=\"stylesheet\" />
</head>

<body>";
        // line 11
        $this->env->loadTemplate("navigation.twig")->display($context);
        // line 12
        echo "
    <p> Столик, дата, время, заказ, цена</p>";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ords"]) {
            // line 15
            $this->env->loadTemplate("orders.twig")->display(array_merge($context, array("Столик" => $this->getAttribute($context["ords"], "Столик", array()), "время" => $this->getAttribute($context["ords"], "время", array()), "дата" => $this->getAttribute($context["ords"], "дата", array()), "заказ" => $this->getAttribute($context["ords"], "заказ", array()), "цена" => $this->getAttribute($context["ords"], "цена", array()))));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ords'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<form action=\"login.php\" method=\"post\">
    <table align=center>
        <tr>
            <td>Заказ:</td>
            <td><input type=\"textarea\" name=\"new_order\" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type=\"submit\" class=\"buttons\" value=\"Отправить\" /></td>
        </tr>
    </table>
</form>";
        // line 36
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 37
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  80 => 36,  66 => 22,  52 => 15,  35 => 14,  32 => 12,  30 => 11,  19 => 1,);
    }
}
