<?php

/* module_types.custom.menus */
class __TwigTemplate_a16de623622e49e843a89b980ed6fcde3304cc214db1dc2886dfcefce30ae944 extends TwigBridge\Twig\Template
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
        echo "

<div id=\"showMenu\">
  <img class=\"inner-width\"  src=\"/site/theme/images/group.png\">
</div>

<div id=\"navigation-hover\"></div>

<div id=\"navigation-menu\">
\t
\t <div class=\"menu-selection\">
  
    <div class=\"menu-text ofo-search\">Поиск <img class=\"inner-width\" ng-src=\"/site/theme/images/001_f.png\" src=\"/site/theme/images/001_f.png\"></div>
  </div>
  <div class=\"menu-selection\">
  
    <div class=\"menu-text home\"><a href=\"/\">Главная</a></div>
  </div>
 
  <div class=\"menu-selection\">
  
    <div class=\"menu-text home codepen\">Каталог услуг</div>
\t  
\t  <div class=\"menu-text home codepens\"><a href=\"/marketing\">Маркетинг</a></div>
\t   <div class=\"menu-text home codepens\"><a href=\"/programming\">Разработка</a></div>
\t   <div class=\"menu-text home codepens\"><a href=\"/design\">Дизайн</a></div>
\t  
  </div>
\t
\t
\t<div class=\"menu-selection\">
  
    <div class=\"menu-text home codepen\">Профиль</div>
\t  
\t  <div class=\"menu-text home codepens\"><a href=\"/profile\">Мой профиль</a></div>
\t   <div class=\"menu-text home codepens\"><a href=\"/settings\">Настройки</a></div>
\t   <div class=\"menu-text home codepens\"><a href=\"/works\">Все задания</a></div>
\t\t<div class=\"menu-text home codepens\"><a href=\"/top\">Избранное</a></div>
\t  <div class=\"menu-text home codepens\"><a href=\"/ispolnitel \">Исполнители</a></div>
\t\t <div class=\"menu-text home codepens\"><a href=\"/zadanie\">В работе</a></div>
  </div>
\t
\t
\t 
\t
\t\t<div class=\"menu-selection\">
  
  \t  
\t   <div class=\"menu-text sd\"><a href=\"/blogs\">Наш блог</a></div>
  </div>
\t
\t
\t\t 
 
\t
\t 
\t
\t
\t<a class=\"okli-1\" href=\"/\">Разместить задание</a>
\t
\t<a class=\"okli-1\" href=\"/\">Стать исполнителем</a>
\t
\t
\t<p class=\"okli-2\">
\tПодписывайтесь на нас в социальных сетях:
\t</p>
\t
\t
\t<span class=\"icon-zmdi\"><img class=\"inner-width\" ng-src=\"/site/theme/images/001_vk.png\" src=\"/site/theme/images/001_vk.png\"></span>\t<span class=\"icon-zmdi\"><img class=\"inner-width\" ng-src=\"/site/theme/images/002_instagram_symbol.png\" src=\"/site/theme/images/002_instagram_symbol.png\"></span>\t<span class=\"icon-zmdi\"><img class=\"inner-width\" ng-src=\"/site/theme/images/003_facebook_logo.png\" src=\"/site/theme/images/003_facebook_logo.png\"></span>
</div>";
    }

    public function getTemplateName()
    {
        return "module_types.custom.menus";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* */
/* */
/* <div id="showMenu">*/
/*   <img class="inner-width"  src="/site/theme/images/group.png">*/
/* </div>*/
/* */
/* <div id="navigation-hover"></div>*/
/* */
/* <div id="navigation-menu">*/
/* 	*/
/* 	 <div class="menu-selection">*/
/*   */
/*     <div class="menu-text ofo-search">Поиск <img class="inner-width" ng-src="/site/theme/images/001_f.png" src="/site/theme/images/001_f.png"></div>*/
/*   </div>*/
/*   <div class="menu-selection">*/
/*   */
/*     <div class="menu-text home"><a href="/">Главная</a></div>*/
/*   </div>*/
/*  */
/*   <div class="menu-selection">*/
/*   */
/*     <div class="menu-text home codepen">Каталог услуг</div>*/
/* 	  */
/* 	  <div class="menu-text home codepens"><a href="/marketing">Маркетинг</a></div>*/
/* 	   <div class="menu-text home codepens"><a href="/programming">Разработка</a></div>*/
/* 	   <div class="menu-text home codepens"><a href="/design">Дизайн</a></div>*/
/* 	  */
/*   </div>*/
/* 	*/
/* 	*/
/* 	<div class="menu-selection">*/
/*   */
/*     <div class="menu-text home codepen">Профиль</div>*/
/* 	  */
/* 	  <div class="menu-text home codepens"><a href="/profile">Мой профиль</a></div>*/
/* 	   <div class="menu-text home codepens"><a href="/settings">Настройки</a></div>*/
/* 	   <div class="menu-text home codepens"><a href="/works">Все задания</a></div>*/
/* 		<div class="menu-text home codepens"><a href="/top">Избранное</a></div>*/
/* 	  <div class="menu-text home codepens"><a href="/ispolnitel ">Исполнители</a></div>*/
/* 		 <div class="menu-text home codepens"><a href="/zadanie">В работе</a></div>*/
/*   </div>*/
/* 	*/
/* 	*/
/* 	 */
/* 	*/
/* 		<div class="menu-selection">*/
/*   */
/*   	  */
/* 	   <div class="menu-text sd"><a href="/blogs">Наш блог</a></div>*/
/*   </div>*/
/* 	*/
/* 	*/
/* 		 */
/*  */
/* 	*/
/* 	 */
/* 	*/
/* 	*/
/* 	<a class="okli-1" href="/">Разместить задание</a>*/
/* 	*/
/* 	<a class="okli-1" href="/">Стать исполнителем</a>*/
/* 	*/
/* 	*/
/* 	<p class="okli-2">*/
/* 	Подписывайтесь на нас в социальных сетях:*/
/* 	</p>*/
/* 	*/
/* 	*/
/* 	<span class="icon-zmdi"><img class="inner-width" ng-src="/site/theme/images/001_vk.png" src="/site/theme/images/001_vk.png"></span>	<span class="icon-zmdi"><img class="inner-width" ng-src="/site/theme/images/002_instagram_symbol.png" src="/site/theme/images/002_instagram_symbol.png"></span>	<span class="icon-zmdi"><img class="inner-width" ng-src="/site/theme/images/003_facebook_logo.png" src="/site/theme/images/003_facebook_logo.png"></span>*/
/* </div>*/
