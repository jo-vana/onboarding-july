<?php

/* themes/custom/onboarding/templates/page.html.twig */
class __TwigTemplate_b8c42792f76959207ed3a2c30b3351ddf7f4c00c2eb3d8d2d3f1bdcd86212ebe extends Twig_Template
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
        $tags = array("if" => 26);
        $filters = array("t" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 18
        echo "<div id=\"page-wrapper\">
    <div id=\"page\">
        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
            <div class=\"section layout-container clearfix\">
                ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
            </div>
        </header>

        ";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 27
            echo "            <div class=\"primary_menu\">
                <section class=\"layout-container section clearfix\">
                    ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                </section>
            </div>
        ";
        }
        // line 33
        echo "

        ";
        // line 36
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 37
            echo "            <div class=\"page-banner\">
                <section class=\"page-banner__inner section layout-banner-containe clearfix\">
                    ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
                </section>
            </div>
        ";
        }
        // line 43
        echo "        <div id=\"main-wrapper\" class=\"layout-main-wrapper  clearfix\">
            <div id=\"main\" class=\"layout-container clearfix\">
                ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
                <main id=\"content\" class=\"column main-content\" role=\"main\">
                    <section class=\"section\">
                        <a id=\"main-content\" tabindex=\"-1\"></a>
                        ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                    </section>
                </main>

                ";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 54
            echo "                    <div id=\"sidebar-first\" class=\"column sidebar\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                ";
        }
        // line 60
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 61
            echo "                    <div id=\"sidebar-second\" class=\"column sidebar\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                ";
        }
        // line 67
        echo "            </div>
        </div>

        ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "events_front", array())) {
            // line 71
            echo "            <div id=\"events-front\" class=\"events-front layout-banner-container clearfix\">
                <section class=\"section\">
                    <div class=\"container\">
                    ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "events_front", array()), "html", null, true));
            echo "
                    </div>
                </section>
            </div>
        ";
        }
        // line 79
        echo "
        <footer class=\"site-footer\">
            <div class=\"layout-container\">
                ";
        // line 82
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 83
            echo "                    <div class=\"site-footer__top clearfix\">
                        ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
                        ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
                        ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
                        ";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 90
        echo "
            </div>
        </footer>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/onboarding/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 90,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  162 => 83,  160 => 82,  155 => 79,  147 => 74,  142 => 71,  140 => 70,  135 => 67,  128 => 63,  124 => 61,  121 => 60,  114 => 56,  110 => 54,  108 => 53,  101 => 49,  94 => 45,  90 => 43,  83 => 39,  79 => 37,  76 => 36,  72 => 33,  65 => 29,  61 => 27,  59 => 26,  52 => 22,  47 => 20,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/onboarding/templates/page.html.twig", "/var/www/html/webroot/themes/custom/onboarding/templates/page.html.twig");
    }
}
