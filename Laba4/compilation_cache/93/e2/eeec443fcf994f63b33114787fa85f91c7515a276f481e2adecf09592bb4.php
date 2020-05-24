<?php

/* menu.twig */
class __TwigTemplate_93e2eeec443fcf994f63b33114787fa85f91c7515a276f481e2adecf09592bb4 extends Twig_Template
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
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Меню</title>
    <link href=\"DATA/CSS/menustyle.css\" rel=\"stylesheet\" />
  </head>

  <body>";
        // line 12
        $this->env->loadTemplate("navigation.twig")->display($context);
        // line 13
        echo "
      <h2>Меню</h2>
      <section>";
        // line 16
        $this->env->loadTemplate("Bullshit.twig")->display(array_merge($context, array("some_wrds" => "Все блюда неизбежно связаны с воспоминаниями: где вы их съели, с кем
                                                      вы были, окрестности, погода, атмосфера — все это влияет на вкус
                                                      блюда. Мы бы хотели совершить это путешествие с Вами.")));
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myords"]) ? $context["myords"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ord"]) {
            // line 23
            $this->env->loadTemplate("ords.twig")->display(array_merge($context, array("Название" => $this->getAttribute($context["ord"], "Название", array()), "immage" => $this->getAttribute($context["ord"], "immage", array()))));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

      </section>";
        // line 31
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 32
        echo "
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  75 => 31,  71 => 27,  57 => 23,  40 => 22,  36 => 16,  32 => 13,  30 => 12,  19 => 1,);
    }
}
