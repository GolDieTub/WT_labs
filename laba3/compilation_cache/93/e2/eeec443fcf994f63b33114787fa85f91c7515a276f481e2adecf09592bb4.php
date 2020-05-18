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
        // line 20
        echo "
        <h3>
          Завтраки
        </h3>

        <p>Континентальный завтрак</p>
        <img src=\"DATA/Images/breakfast.jpg\" />
        <p>Яйца Бенедикт</p>
        <img src=\"DATA/Images/eggs.jpg\" />
        <p>Овсяная каша с фруктами</p>
        <img src=\"DATA/Images/oatmeal.jpg\" />
        <p>Гранола</p>
        <img src=\"DATA/Images/granola.jpg\" />
        <p>Вафли</p>
        <img src=\"DATA/Images/waffels.jpg\" />
        <p>Творожная запеканка</p>
        <img src=\"DATA/Images/cake.jpg\" />
        <h4>Основное Меню</h4>
        <p>Суп из чечивицы</p>
        <img src=\"DATA/Images/soup.jpg\" />
        <p>Солянка</p>
        <img src=\"DATA/Images/soup2.jpg\" />
        <p>Салат с цыпленком</p>
        <img src=\"DATA/Images/salad.jpg\" />
        <p>Паста с курицей</p>
        <img src=\"DATA/Images/pasta.jpg\" />
        <p>Птитим с креветками</p>
        <img src=\"DATA/Images/ptitim.jpg\" />
      </section>";
        // line 50
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 51
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
        return array (  72 => 51,  70 => 50,  40 => 20,  36 => 16,  32 => 13,  30 => 12,  19 => 1,);
    }
}
