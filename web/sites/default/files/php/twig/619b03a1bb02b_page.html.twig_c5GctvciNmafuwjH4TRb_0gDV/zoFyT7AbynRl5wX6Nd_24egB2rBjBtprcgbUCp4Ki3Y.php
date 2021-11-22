<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/salt/templates/page.html.twig */
class __TwigTemplate_b521200b00420a217f0dade41608faf4056460e8c1854b1a9f89ff1f51c383db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 4, "if" => 48];
        $filters = ["t" => 3, "escape" => 50];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"page-wrapper\">
<div id=\"page\">
<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "</header>
";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 49
            echo "<div class=\"highlighted\">
<aside class=\"";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
</aside>
</div>
";
        }
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 56
            $this->displayBlock('featured', $context, $blocks);
        }
        // line 64
        echo "<div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "</div>
";
        // line 93
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 94
            echo "<div class=\"featured-bottom\">
<aside class=\"";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix\" role=\"complementary\">
";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
</aside>
</div>
";
        }
        // line 102
        echo "<footer class=\"site-footer\">
";
        // line 103
        $this->displayBlock('footer', $context, $blocks);
        // line 120
        echo "</footer>
</div>
</div>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 6
            echo "<nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
";
            // line 7
            if (($context["container_navbar"] ?? null)) {
                // line 8
                echo "<div class=\"container\">
<?php echo \"test\"; ?>
";
            }
            // line 11
            echo "     ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
     ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
     ";
            // line 13
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 14
                echo "       <div class=\"form-inline navbar-form float-right\">
         ";
                // line 15
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
       </div>
     ";
            }
            // line 18
            if (($context["container_navbar"] ?? null)) {
                // line 19
                echo "</div>
";
            }
            // line 21
            echo "</nav>
";
        }
        // line 23
        echo "<nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null)), "html", null, true);
        echo ">
";
        // line 24
        if (($context["container_navbar"] ?? null)) {
            // line 25
            echo "<div class=\"container\">
";
        }
        // line 27
        echo "   ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
   ";
        // line 28
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_form", []))) {
            // line 29
            echo "     <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
     <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
       ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
       ";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
                // line 33
                echo "         <div class=\"form-inline navbar-form float-right\">
           ";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
         </div>
       ";
            }
            // line 37
            echo "  </div>
   ";
        }
        // line 39
        echo "   ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 40
            echo "     <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
   ";
        }
        // line 42
        if (($context["container_navbar"] ?? null)) {
            // line 43
            echo "</div>
";
        }
        // line 45
        echo "</nav>
";
    }

    // line 56
    public function block_featured($context, array $blocks = [])
    {
        // line 57
        echo "<div class=\"featured-top\">
<aside class=\"featured-top__inner section ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " clearfix\" role=\"complementary\">
   ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
</aside>
</div>
";
    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        // line 66
        echo "<div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
<div class=\"row row-offcanvas row-offcanvas-left clearfix\">
     <main";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
       <section class=\"section\">
         <a id=\"main-content\" tabindex=\"-1\"></a>
         ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
       </section>
     </main>
   ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 76
            echo "     <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null)), "html", null, true);
            echo ">
       <aside class=\"section\" role=\"complementary\">
         ";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
       </aside>
     </div>
   ";
        }
        // line 82
        echo "   ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 83
            echo "     <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null)), "html", null, true);
            echo ">
       <aside class=\"section\" role=\"complementary\">
         ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
       </aside>
     </div>
   ";
        }
        // line 89
        echo "</div>
</div>
";
    }

    // line 103
    public function block_footer($context, array $blocks = [])
    {
        // line 104
        echo "<div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
";
        // line 105
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 106
            echo "   <div class=\"site-footer__top clearfix\">
     ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
     ";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
     ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
     ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
   </div>
";
        }
        // line 113
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 114
            echo "   <div class=\"site-footer__bottom\">
     ";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
   </div>
";
        }
        // line 118
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/salt/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 118,  358 => 115,  355 => 114,  353 => 113,  347 => 110,  343 => 109,  339 => 108,  335 => 107,  332 => 106,  330 => 105,  325 => 104,  322 => 103,  316 => 89,  309 => 85,  303 => 83,  300 => 82,  293 => 78,  287 => 76,  285 => 75,  279 => 72,  273 => 69,  268 => 67,  263 => 66,  260 => 65,  252 => 59,  248 => 58,  245 => 57,  242 => 56,  237 => 45,  233 => 43,  231 => 42,  227 => 40,  224 => 39,  220 => 37,  214 => 34,  211 => 33,  209 => 32,  205 => 31,  201 => 29,  199 => 28,  194 => 27,  190 => 25,  188 => 24,  183 => 23,  179 => 21,  175 => 19,  173 => 18,  167 => 15,  164 => 14,  162 => 13,  158 => 12,  153 => 11,  148 => 8,  146 => 7,  141 => 6,  139 => 5,  136 => 4,  130 => 120,  128 => 103,  125 => 102,  118 => 98,  114 => 97,  110 => 96,  106 => 95,  103 => 94,  101 => 93,  98 => 92,  96 => 65,  93 => 64,  90 => 56,  88 => 55,  81 => 51,  77 => 50,  74 => 49,  72 => 48,  69 => 47,  67 => 4,  63 => 3,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/salt/templates/page.html.twig", "C:\\xampps\\htdocs\\salt\\web\\themes\\salt\\templates\\page.html.twig");
    }
}
