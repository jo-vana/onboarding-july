<?php

/* themes/custom/onboarding/templates/node/node--event--teaser.html.twig */
class __TwigTemplate_a151faf9e3e861f3a170cd7ca244f354e8a0bd19b64f621d02271ef32f245e5f extends Twig_Template
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
        $tags = array("set" => 70, "if" => 83, "trans" => 87);
        $filters = array("clean_class" => 71, "date" => 105);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 70
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 71
($context["node"] ?? null), "bundle", array())), 1 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 74
($context["node"] ?? null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 75
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null))) : ("")), 5 => "clearfix");
        // line 79
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">



    ";
        // line 83
        if (($context["display_submitted"] ?? null)) {
            // line 84
            echo "        <footer>
            ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
            <div";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "author"), "method"), "html", null, true));
            echo ">
                ";
            // line 87
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 88
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
            </div>
        </footer>
    ";
        }
        // line 92
        echo "
    <div";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
        ";
        // line 95
        echo "        <div>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
        echo "</div>
        <div class=\"event-box\">
                ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
                ";
        // line 98
        if ( !($context["page"] ?? null)) {
            // line 99
            echo "                    <h4";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">
                        <a href=\"";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" >";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
                    </h4>
                ";
        }
        // line 103
        echo "                ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
            <div class=\"date-event-front\">
                <div class=\"date\">";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_start_date", array()), "value", array()), "d.M Y"), "html", null, true));
        echo "</div>
                <div class =\"time\">at ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_start_date", array()), "value", array()), "H:i"), "html", null, true));
        echo "</div>
            </div>

        </div>

    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/onboarding/templates/node/node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 106,  119 => 105,  113 => 103,  105 => 100,  100 => 99,  98 => 98,  94 => 97,  88 => 95,  84 => 93,  81 => 92,  73 => 88,  71 => 87,  67 => 86,  63 => 85,  60 => 84,  58 => 83,  50 => 79,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 71,  43 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/onboarding/templates/node/node--event--teaser.html.twig", "/var/www/html/webroot/themes/custom/onboarding/templates/node/node--event--teaser.html.twig");
    }
}
