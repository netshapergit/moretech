<?php

/* module_types.custom.footer */
class __TwigTemplate_b431f54b7d592cfabbabc1100f4f191bad25fe2b4d61c0c9138a845b4b2160fd extends TwigBridge\Twig\Template
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
\t\t<span></span>ВТБ <Br>ВСЕЛЕННАЯ
\t\t</p>
\t<div class=\"lok\" style=\"height:150px;\">
\t\t<!--img class=\"\" src=\"/site/theme/images/h1.png\">
\t\t<img class=\"\" src=\"/site/theme/images/h2.png\">
\t\t<img class=\"\" src=\"/site/theme/images/h3.png\"-->
\t</div>
</div>
<div class=\"col-md-3\">
\t




\t\t<a class=\"loj\" href=\"#\">О сервисе</a>
\t\t<a class=\"loj\" href=\"#\">Новости / События</a>
\t\t<a class=\"loj\" href=\"#\">Планеты</a>
\t\t<a class=\"loj\" href=\"#\">Найти астронавта</a>
\t\t<a class=\"loj\" href=\"#\">Задать вопрос создателю</a>
\t</div>
<div class=\"col-md-3\">
 
\t\t<a class=\"loj\" href=\"/profile\">Мой профиль</a>
\t\t<a class=\"loj\" href=\"/works\">Мои задания</a>
\t\t<a class=\"loj\" href=\"/top\">Избранное</a>
\t\t<a class=\"loj\" href=\"#\">Мой путь развития</a>
\t<a class=\"loj\" href=\"/settings\">Настройки</a>
\t 
\t</div>
<div class=\"col-md-3\">
\t<a class=\"loj  lov\" href=\"#\"><img class=\"lof\" src=\"/site/theme/images/a1.png\"> 8 (800) 123-55-67</a>
\t\t<a class=\"loj  lov\" href=\"#\"><img class=\"lof\" src=\"/site/theme/images/a2.png\"> support@vtbuniverse.ru</a>
\t
\t<p class=\"lov loz\">Команда<br><a href=\"depsite.ru\">NetShaper</a></p>
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
/* 		<span></span>ВТБ <Br>ВСЕЛЕННАЯ*/
/* 		</p>*/
/* 	<div class="lok" style="height:150px;">*/
/* 		<!--img class="" src="/site/theme/images/h1.png">*/
/* 		<img class="" src="/site/theme/images/h2.png">*/
/* 		<img class="" src="/site/theme/images/h3.png"-->*/
/* 	</div>*/
/* </div>*/
/* <div class="col-md-3">*/
/* 	*/
/* */
/* */
/* */
/* */
/* 		<a class="loj" href="#">О сервисе</a>*/
/* 		<a class="loj" href="#">Новости / События</a>*/
/* 		<a class="loj" href="#">Планеты</a>*/
/* 		<a class="loj" href="#">Найти астронавта</a>*/
/* 		<a class="loj" href="#">Задать вопрос создателю</a>*/
/* 	</div>*/
/* <div class="col-md-3">*/
/*  */
/* 		<a class="loj" href="/profile">Мой профиль</a>*/
/* 		<a class="loj" href="/works">Мои задания</a>*/
/* 		<a class="loj" href="/top">Избранное</a>*/
/* 		<a class="loj" href="#">Мой путь развития</a>*/
/* 	<a class="loj" href="/settings">Настройки</a>*/
/* 	 */
/* 	</div>*/
/* <div class="col-md-3">*/
/* 	<a class="loj  lov" href="#"><img class="lof" src="/site/theme/images/a1.png"> 8 (800) 123-55-67</a>*/
/* 		<a class="loj  lov" href="#"><img class="lof" src="/site/theme/images/a2.png"> support@vtbuniverse.ru</a>*/
/* 	*/
/* 	<p class="lov loz">Команда<br><a href="depsite.ru">NetShaper</a></p>*/
/* 	</div>*/
