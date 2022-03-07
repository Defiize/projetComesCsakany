<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* professeurs/index.html.twig */
class __TwigTemplate_ffccd06db60100200e0701359d3815f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professeurs/index.html.twig"));

        // line 1
        echo "<div class=\"professeur\">
\t<a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeurs_create");
        echo "\">
\t\tAjouter un professeur</a>
\t<table>
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professeurs"]) || array_key_exists("professeurs", $context) ? $context["professeurs"] : (function () { throw new RuntimeError('Variable "professeurs" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["professeur"]) {
            // line 6
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "nom", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "prenom", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "mail", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeurs_update", ["id" => twig_get_attribute($this->env, $this->source, $context["professeur"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">Editer</a>
\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeurs_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["professeur"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "professeurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  77 => 13,  73 => 12,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  49 => 5,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"professeur\">
\t<a href=\"{{path('professeurs_create')}}\">
\t\tAjouter un professeur</a>
\t<table>
\t\t{% for professeur in professeurs %}
\t\t\t<tr>
\t\t\t\t<td>{{ professeur.id }}</td>
\t\t\t\t<td>{{ professeur.nom }}</td>
\t\t\t\t<td>{{ professeur.prenom }}</td>
\t\t\t\t<td>{{ professeur.mail }}</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ path('professeurs_update', {'id': professeur.id}) }}\">Editer</a>
\t\t\t\t\t<a href=\"{{ path('professeurs_delete', {'id': professeur.id}) }}\">Supprimer</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}
\t</table>
</div>
", "professeurs/index.html.twig", "C:\\Users\\bcsakanay\\Documents\\DEV\\edt\\templates\\professeurs\\index.html.twig");
    }
}
