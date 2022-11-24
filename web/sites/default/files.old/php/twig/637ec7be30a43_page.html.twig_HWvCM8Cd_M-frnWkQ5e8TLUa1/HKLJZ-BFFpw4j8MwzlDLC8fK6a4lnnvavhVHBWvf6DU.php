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

/* themes/bridgemojo/templates/page.html.twig */
class __TwigTemplate_d1ade72f8c66af727ddcd331e6e5f1d476aa330155217cff797dfa6c45a829fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'subhead_left' => [$this, 'block_subhead_left'],
            'subhead_center' => [$this, 'block_subhead_center'],
            'subhead_right' => [$this, 'block_subhead_right'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["clean_class" => 62, "escape" => 65, "t" => 74];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 194
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        // line 97
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 101
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 102
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 107
            echo "      ";
        }
        // line 108
        echo "    </div>

    <div class=\"row\">
      ";
        // line 112
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "subhead_left", [])) {
            // line 113
            echo "        ";
            $this->displayBlock('subhead_left', $context, $blocks);
            // line 118
            echo "      ";
        }
        // line 119
        echo "
      ";
        // line 121
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "subhead_center", [])) {
            // line 122
            echo "        ";
            $this->displayBlock('subhead_center', $context, $blocks);
            // line 127
            echo "      ";
        }
        // line 128
        echo "
      ";
        // line 130
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "subhead_right", [])) {
            // line 131
            echo "        ";
            $this->displayBlock('subhead_right', $context, $blocks);
            // line 136
            echo "      ";
        }
        // line 137
        echo "    </div>

    <div class=\"row\">
      ";
        // line 141
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 142
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 147
            echo "      ";
        }
        // line 148
        echo "
      ";
        // line 150
        echo "      ";
        // line 151
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 152
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 153
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 154
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 155
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 158
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 161
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 162
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 165
            echo "        ";
        }
        // line 166
        echo "
        ";
        // line 168
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 169
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 172
            echo "        ";
        }
        // line 173
        echo "
        ";
        // line 175
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 179
        echo "      </section>

      ";
        // line 182
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 183
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 188
            echo "      ";
        }
        // line 189
        echo "    </div>
  </div>
";
    }

    // line 102
    public function block_header($context, array $blocks = [])
    {
        // line 103
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 113
    public function block_subhead_left($context, array $blocks = [])
    {
        // line 114
        echo "          <div class=\"col-sm-4\">
            ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "subhead_left", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 122
    public function block_subhead_center($context, array $blocks = [])
    {
        // line 123
        echo "          <div class=\"col-sm-4\">
            ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "subhead_center", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 131
    public function block_subhead_right($context, array $blocks = [])
    {
        // line 132
        echo "          <div class=\"col-sm-4\">
            ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "subhead_right", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 142
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 143
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 144
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 162
    public function block_highlighted($context, array $blocks = [])
    {
        // line 163
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 169
    public function block_help($context, array $blocks = [])
    {
        // line 170
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 175
    public function block_content($context, array $blocks = [])
    {
        // line 176
        echo "          <a id=\"main-content\"></a>
          ";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 183
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 184
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 194
    public function block_footer($context, array $blocks = [])
    {
        // line 195
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 196
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bridgemojo/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 196,  410 => 195,  407 => 194,  400 => 185,  397 => 184,  394 => 183,  388 => 177,  385 => 176,  382 => 175,  375 => 170,  372 => 169,  365 => 163,  362 => 162,  355 => 144,  352 => 143,  349 => 142,  342 => 133,  339 => 132,  336 => 131,  329 => 124,  326 => 123,  323 => 122,  316 => 115,  313 => 114,  310 => 113,  303 => 104,  300 => 103,  297 => 102,  291 => 189,  288 => 188,  285 => 183,  282 => 182,  278 => 179,  275 => 175,  272 => 173,  269 => 172,  266 => 169,  263 => 168,  260 => 166,  257 => 165,  254 => 162,  251 => 161,  245 => 158,  243 => 155,  242 => 154,  241 => 153,  240 => 152,  239 => 151,  237 => 150,  234 => 148,  231 => 147,  228 => 142,  225 => 141,  220 => 137,  217 => 136,  214 => 131,  211 => 130,  208 => 128,  205 => 127,  202 => 122,  199 => 121,  196 => 119,  193 => 118,  190 => 113,  187 => 112,  182 => 108,  179 => 107,  176 => 102,  173 => 101,  166 => 97,  163 => 96,  158 => 91,  154 => 89,  151 => 88,  145 => 85,  142 => 84,  139 => 83,  135 => 80,  126 => 74,  123 => 73,  120 => 72,  116 => 70,  113 => 69,  107 => 67,  105 => 66,  100 => 65,  98 => 62,  97 => 61,  96 => 59,  94 => 58,  91 => 57,  85 => 194,  83 => 193,  80 => 192,  78 => 96,  75 => 94,  71 => 57,  69 => 56,  67 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bridgemojo/templates/page.html.twig", "/Users/mjones/dev.bridgemojo.com/web/themes/bridgemojo/templates/page.html.twig");
    }
}
