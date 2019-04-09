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

/* deactivationSurvey/js.html */
class __TwigTemplate_a20d2d1409ffd6c1205b42d442d3f364954e21260036b6fd91febd6da31eac79 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<script type=\"text/javascript\">
  jQuery(function(\$){
    var deactivateLink = \$('#the-list').find('[data-slug=\"mailpoet\"] span.deactivate a');
    var overlay = \$('#mailpoet-deactivate-survey');
    var closeButton = \$('#mailpoet-deactivate-survey-close');
    var formOpen = false;

    deactivateLink.on('click', function(event) {
      event.preventDefault();
      overlay.css('display', 'table');
      formOpen = true;
    });

    closeButton.on('click', function(event) {
      event.preventDefault();
      overlay.css('display', 'none');
      formOpen = false;
      location.href = deactivateLink.attr('href');
    });

    \$(document).keyup(function(event) {
      if ((event.keyCode === 27) && formOpen) {
        location.href = deactivateLink.attr('href');
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "deactivationSurvey/js.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "deactivationSurvey/js.html", "/var/www/html/wordpress/wp-content/plugins/mailpoet/views/deactivationSurvey/js.html");
    }
}
