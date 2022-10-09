<?php

/* module_types.custom.form */
class __TwigTemplate_020551398bb8acb96fc5377c859bb59897a0f51a3f74ece9600ed69ff596ba2f extends TwigBridge\Twig\Template
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
        echo "<form action=\"/form/1\" id=\"form_140956763\" method=\"post\">
\t<div class=\"form-group type_string field_need\">
\t\t<label>Мне нужно...</label>
\t\t<input class=\"form-control\" name=\"field_need\" placeholder=\"Мне нужно...\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group type_option field_kategory_id\">
\t\t<label>Категория</label>
\t\t<select class=\"form-control\" name=\"field_kategory_id\">
\t\t\t<option value=\"\"></option>
\t\t\t<option value=\"1\">Web-дизайн</option>
\t\t\t<option value=\"2\">Web-дизайн2</option>
\t\t</select>
\t</div>
\t<div class=\"form-group type_text field_text\">
\t\t<label>Опишите задачу</label>
\t\t<textarea class=\"form-control\" name=\"field_text\" placeholder=\"Опишите задачу\" rows=\"4\"></textarea>
\t</div>
\t<div class=\"form-group type_file field_apload\">
\t\t<label>Наличие фото помогает исполнителям лучше оценить вашу задачу и сформулировать свое предложение.</label>
\t\t<div class=\"file-upload-wrapper\">
\t\t\t<input name=\"field_apload\" type=\"hidden\" value=\"\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<button class=\"btn btn-default file-upload\" type=\"button\">Загрузить файл</button>
\t\t\t</div>
\t\t\t<a class=\"btn btn-link pull-left invisible\" href=\"/site/data/feedbacks/\" target=\"_blank\">Файл загружен</a>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
\t<div class=\"form-group type_datetime field_data\">
\t\t<label>Срок сдачи задания</label>
\t\t<div class=\"inputs\">
\t\t\t<input type=\"date\">
\t\t\t<input type=\"time\">
\t\t</div>
\t</div>
\t<div class=\"form-group type_option field_radios_id\">
\t\t<label>Вариант исполнения</label>
\t\t<select class=\"form-control\" name=\"field_radios_id\">
\t\t\t<option value=\"\"></option>
\t\t\t<option value=\"3\">Можно выполнить удалённо</option>
\t\t\t<option value=\"4\">Нужно личное присутствие</option>
\t\t</select>
\t</div>
\t<div class=\"form-group type_string field_place\">
\t\t<label>Город, улица, дом</label>
\t\t<input class=\"form-control\" name=\"field_place\" placeholder=\"Город, улица, дом\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"summ\">
\t\t<div class=\"form-group type_integer field_edge1\">
\t\t\t<label>от</label>
\t\t\t<input class=\"form-control\" name=\"field_edge1\" placeholder=\"от\" type=\"text\" value=\"\">
\t\t</div>
\t\t<div class=\"form-group type_integer field_edge2\">
\t\t\t<label>до</label>
\t\t\t<input class=\"form-control\" name=\"field_edge2\" placeholder=\"до\" type=\"text\" value=\"\">
\t\t</div>
\t</div>\t
\t<div class=\"form-group type_integer field_summ\">
\t\t<label>Точная сумма</label>
\t\t<input class=\"form-control\" name=\"field_summ\" placeholder=\"Точная сумма\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group type_string field_name required\">
\t\t<label>Имя</label>
\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group type_string field_surname\">
\t\t<label>Фамилия</label>
\t\t<input class=\"form-control\" name=\"field_surname\" placeholder=\"Фамилия\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group type_email field_email required\">
\t\t<label>E-mail</label>
\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t</div>
\t<div class=\"form-group type_integer field_phone required\">
\t\t<label>Телефон</label>
\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" required=\"\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group type_checkbox field_chekbox1\">
\t\t<input name=\"field_chekbox1\" type=\"hidden\" value=\"\">
\t\t<div class=\"checkbox\">
\t\t\t<label>
\t\t\t\t<input name=\"field_chekbox1\" type=\"checkbox\" value=\"1\">
\t\t\t\tПолучать email-уведомления о новых предложениях
\t\t\t</label>
\t\t</div>
\t</div>
\t<div class=\"form-group type_checkbox field_checkbox2\">
\t\t<input name=\"field_checkbox2\" type=\"hidden\" value=\"\">
\t\t<div class=\"checkbox\">
\t\t\t<label>
\t\t\t\t<input name=\"field_checkbox2\" type=\"checkbox\" value=\"1\">
\t\t\t\tПоказывать мое задание только исполнителям
\t\t\t</label>
\t\t</div>
\t</div>
\t<div class=\"form-group type_checkbox field_polici\">
\t\t<input name=\"field_polici\" type=\"hidden\" value=\"\">
\t\t\t<div class=\"checkbox\">
\t\t\t\t<label>
\t\t\t\t\t<input name=\"field_polici\" type=\"checkbox\" value=\"1\">
\t\t\t\t\tНажимая на кнопку, вы соглашаетесь с <a href=\"\">Политикой конфиденциальности</a>
\t\t\t\t</label>
\t\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Создать задание\">
\t</div>
\t\t
</form>";
    }

    public function getTemplateName()
    {
        return "module_types.custom.form";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <form action="/form/1" id="form_140956763" method="post">*/
/* 	<div class="form-group type_string field_need">*/
/* 		<label>Мне нужно...</label>*/
/* 		<input class="form-control" name="field_need" placeholder="Мне нужно..." type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group type_option field_kategory_id">*/
/* 		<label>Категория</label>*/
/* 		<select class="form-control" name="field_kategory_id">*/
/* 			<option value=""></option>*/
/* 			<option value="1">Web-дизайн</option>*/
/* 			<option value="2">Web-дизайн2</option>*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="form-group type_text field_text">*/
/* 		<label>Опишите задачу</label>*/
/* 		<textarea class="form-control" name="field_text" placeholder="Опишите задачу" rows="4"></textarea>*/
/* 	</div>*/
/* 	<div class="form-group type_file field_apload">*/
/* 		<label>Наличие фото помогает исполнителям лучше оценить вашу задачу и сформулировать свое предложение.</label>*/
/* 		<div class="file-upload-wrapper">*/
/* 			<input name="field_apload" type="hidden" value="">*/
/* 			<div class="pull-left">*/
/* 				<button class="btn btn-default file-upload" type="button">Загрузить файл</button>*/
/* 			</div>*/
/* 			<a class="btn btn-link pull-left invisible" href="/site/data/feedbacks/" target="_blank">Файл загружен</a>*/
/* 			<div class="clearfix"></div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group type_datetime field_data">*/
/* 		<label>Срок сдачи задания</label>*/
/* 		<div class="inputs">*/
/* 			<input type="date">*/
/* 			<input type="time">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group type_option field_radios_id">*/
/* 		<label>Вариант исполнения</label>*/
/* 		<select class="form-control" name="field_radios_id">*/
/* 			<option value=""></option>*/
/* 			<option value="3">Можно выполнить удалённо</option>*/
/* 			<option value="4">Нужно личное присутствие</option>*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="form-group type_string field_place">*/
/* 		<label>Город, улица, дом</label>*/
/* 		<input class="form-control" name="field_place" placeholder="Город, улица, дом" type="text" value="">*/
/* 	</div>*/
/* 	<div class="summ">*/
/* 		<div class="form-group type_integer field_edge1">*/
/* 			<label>от</label>*/
/* 			<input class="form-control" name="field_edge1" placeholder="от" type="text" value="">*/
/* 		</div>*/
/* 		<div class="form-group type_integer field_edge2">*/
/* 			<label>до</label>*/
/* 			<input class="form-control" name="field_edge2" placeholder="до" type="text" value="">*/
/* 		</div>*/
/* 	</div>	*/
/* 	<div class="form-group type_integer field_summ">*/
/* 		<label>Точная сумма</label>*/
/* 		<input class="form-control" name="field_summ" placeholder="Точная сумма" type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group type_string field_name required">*/
/* 		<label>Имя</label>*/
/* 		<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group type_string field_surname">*/
/* 		<label>Фамилия</label>*/
/* 		<input class="form-control" name="field_surname" placeholder="Фамилия" type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group type_email field_email required">*/
/* 		<label>E-mail</label>*/
/* 		<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 	</div>*/
/* 	<div class="form-group type_integer field_phone required">*/
/* 		<label>Телефон</label>*/
/* 		<input class="form-control" name="field_phone" placeholder="Телефон" required="" type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group type_checkbox field_chekbox1">*/
/* 		<input name="field_chekbox1" type="hidden" value="">*/
/* 		<div class="checkbox">*/
/* 			<label>*/
/* 				<input name="field_chekbox1" type="checkbox" value="1">*/
/* 				Получать email-уведомления о новых предложениях*/
/* 			</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group type_checkbox field_checkbox2">*/
/* 		<input name="field_checkbox2" type="hidden" value="">*/
/* 		<div class="checkbox">*/
/* 			<label>*/
/* 				<input name="field_checkbox2" type="checkbox" value="1">*/
/* 				Показывать мое задание только исполнителям*/
/* 			</label>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group type_checkbox field_polici">*/
/* 		<input name="field_polici" type="hidden" value="">*/
/* 			<div class="checkbox">*/
/* 				<label>*/
/* 					<input name="field_polici" type="checkbox" value="1">*/
/* 					Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>*/
/* 				</label>*/
/* 			</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="btn btn-default" type="submit" value="Создать задание">*/
/* 	</div>*/
/* 		*/
/* </form>*/
