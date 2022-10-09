<?php

/* module_types.custom.footer */
class __TwigTemplate_e0021854343f6bf0743623f5e1f3b58d499ba7bfa0b950351103da25841159d7 extends TwigBridge\Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"col-md-3\">
\t<p class=\"centered ofo\">
\t\t<span>RU</span>.MARKETING
\t\t</p>
\t<div class=\"lok\"><img class=\"\" src=\"/site/theme/images/h1.png\"><img class=\"\" src=\"/site/theme/images/h2.png\"><img class=\"\" src=\"/site/theme/images/h3.png\"></div>
\t</div>
<div class=\"col-md-3\">
\t




\t\t<a class=\"loj\" href=\"#\">О сервисе</a>
\t\t<a class=\"loj\" href=\"#\">Рейтинг исполнителей</a>
\t\t<a class=\"loj\" href=\"#\">Маркетинг</a>
\t\t<a class=\"loj\" href=\"#\">Разработка</a>
\t\t<a class=\"loj\" href=\"#\">Дизайн</a>
\t</div>
<div class=\"col-md-3\">
 
\t\t<a class=\"loj\" href=\"#\">Стать исполнителем</a>
\t\t<a class=\"loj\" href=\"#\">Создать задание</a>
\t\t<a class=\"loj\" href=\"#\">Текущие заказы</a>
\t\t<a class=\"loj\" href=\"#\">Блог</a>
\t 
\t</div>
<div class=\"col-md-3\">
\t<a class=\"loj  lov\" href=\"#\"><img class=\"lof\" src=\"/site/theme/images/a1.png\"> 8 (800) 123-55-67</a>
\t\t<a class=\"loj  lov\" href=\"#\"><img class=\"lof\" src=\"/site/theme/images/a2.png\"> info@rumar.ru</a>
\t
\t<p class=\"lov loz\">при поддержки<br><a href=\"depsite.ru\">Департамента сайтов</a></p>
\t</div>";
    }

    public function getTemplateName()
    {
        return "module_types.custom.footer";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div class="col-md-3">*/
/* 	<p class="centered ofo">*/
/* 		<span>RU</span>.MARKETING*/
/* 		</p>*/
/* 	<div class="lok"><img class="" src="/site/theme/images/h1.png"><img class="" src="/site/theme/images/h2.png"><img class="" src="/site/theme/images/h3.png"></div>*/
/* 	</div>*/
/* <div class="col-md-3">*/
/* 	*/
/* */
/* */
/* */
/* */
/* 		<a class="loj" href="#">О сервисе</a>*/
/* 		<a class="loj" href="#">Рейтинг исполнителей</a>*/
/* 		<a class="loj" href="#">Маркетинг</a>*/
/* 		<a class="loj" href="#">Разработка</a>*/
/* 		<a class="loj" href="#">Дизайн</a>*/
/* 	</div>*/
/* <div class="col-md-3">*/
/*  */
/* 		<a class="loj" href="#">Стать исполнителем</a>*/
/* 		<a class="loj" href="#">Создать задание</a>*/
/* 		<a class="loj" href="#">Текущие заказы</a>*/
/* 		<a class="loj" href="#">Блог</a>*/
/* 	 */
/* 	</div>*/
/* <div class="col-md-3">*/
/* 	<a class="loj  lov" href="#"><img class="lof" src="/site/theme/images/a1.png"> 8 (800) 123-55-67</a>*/
/* 		<a class="loj  lov" href="#"><img class="lof" src="/site/theme/images/a2.png"> info@rumar.ru</a>*/
/* 	*/
/* 	<p class="lov loz">при поддержки<br><a href="depsite.ru">Департамента сайтов</a></p>*/
/* 	</div>*/
