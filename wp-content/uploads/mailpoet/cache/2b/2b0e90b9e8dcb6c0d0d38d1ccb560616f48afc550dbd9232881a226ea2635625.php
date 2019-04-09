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

/* layout.html */
class __TwigTemplate_ead8886abdc75d77504c2dc468d17013984ae897888bf8e1103bd7b0b45f7bd1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'templates' => [$this, 'block_templates'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'after_css' => [$this, 'block_after_css'],
            'translations' => [$this, 'block_translations'],
            'after_translations' => [$this, 'block_after_translations'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["sub_menu"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
jQuery('.toplevel_page_mailpoet-newsletters.menu-top-last')
  .addClass('wp-has-current-submenu')
  .find('a[href\$=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["sub_menu"] ?? null), "html", null, true);
            echo "\"]')
  .addClass('current')
  .parent()
  .addClass('current');
</script>
";
        }
        // line 11
        echo "
<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

<!-- handlebars templates -->
";
        // line 16
        $this->displayBlock('templates', $context, $blocks);
        // line 17
        echo "
<!-- main container -->
<div class=\"wrap\">
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

  <!-- title block -->
  ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "  <!-- content block -->
  ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "</div>

<!-- stylesheets -->
";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("admin.css");
        // line 33
        echo "

";
        // line 35
        echo do_action("mailpoet_styles_admin_after");
        echo "

<!-- rtl specific stylesheet -->
";
        // line 38
        if ($this->env->getExtension('MailPoet\Twig\Functions')->isRtl()) {
            // line 39
            echo "  ";
            echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("rtl.css");
            echo "
";
        }
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('after_css', $context, $blocks);
        // line 43
        echo "
<script type=\"text/javascript\">
  var mailpoet_date_format = \"";
        // line 45
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_time_format = \"";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_version = \"";
        // line 47
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetVersion();
        echo "\";
  var mailpoet_locale = \"";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getTwoLettersLocale();
        echo "\";
  var mailpoet_polls_data = ";
        // line 49
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsData());
        echo ";
  var mailpoet_polls_visibility = ";
        // line 50
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsVisibility());
        echo ";
  var mailpoet_premium_version = ";
        // line 51
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetPremiumVersion());
        echo ";
  var mailpoet_analytics_enabled = ";
        // line 52
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_enabled')->getCallable(), [])), "html", null, true);
        echo ";
  var mailpoet_analytics_data = ";
        // line 53
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_data')->getCallable(), []));
        echo ";
  var mailpoet_analytics_public_id = ";
        // line 54
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_public_id')->getCallable(), []));
        echo ";
  var mailpoet_analytics_new_public_id = ";
        // line 55
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_public_id_new')->getCallable(), [])), "html", null, true);
        echo ";
  // RFC 5322 standard; http://emailregex.com/ combined with https://google.github.io/closure-library/api/goog.format.EmailAddress.html#isValid
  var mailpoet_email_regex = /(?=^[+a-zA-Z0-9_.!#\$%&'*\\/=?^`{|}~-]+@([a-zA-Z0-9-]+\\.)+[a-zA-Z0-9]{2,63}\$)(?=^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,})))/;
</script>

<!-- javascripts -->
";
        // line 61
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "mailpoet.js");
        // line 64
        echo "

";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(["ajaxFailedErrorMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error has happened while performing a request, the server has responded with response code %d"), "senderEmailAddressWarning1" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("You might not reach the inbox of your subscribers if you use this email address.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning2" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Use an address like %suggested for the Sender and put %originalSender in the <em>Reply-to</em> field below.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning3" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.")]);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('translations', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('after_translations', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin_vendor_chunk.js", "admin_vendor.js");
        // line 79
        echo "

";
        // line 81
        echo do_action("mailpoet_scripts_admin_before");
        echo "

";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin.js");
        // line 85
        echo "

";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/analytics.js");
        echo "

";
        // line 89
        $context["has_valid_premium_key"] = $this->env->getExtension('MailPoet\Twig\Functions')->hasValidPremiumKey();
        // line 90
        echo "
";
        // line 91
        $context["helpscout_form_id"] = "dd918048-8d73-11e7-b5b5-0ec85169275a";
        // line 92
        if (($context["has_valid_premium_key"] ?? null)) {
            // line 93
            echo "  ";
            $context["helpscout_form_id"] = "6974b88d-8d85-11e7-b5b5-0ec85169275a";
        }
        // line 95
        echo "<script>!function(e,o,n){window.HSCW=o,window.HS=n,n.beacon=n.beacon||{};var t=n.beacon;t.userConfig={},t.readyQueue=[],t.config=function(e){this.userConfig=e},t.ready=function(e){this.readyQueue.push(e)},o.config={docs:{enabled:!0,baseUrl:\"https://mailpoet3.helpscoutdocs.com/\"},contact:{enabled:!0,formId:\"";
        echo twig_escape_filter($this->env, ($context["helpscout_form_id"] ?? null), "html", null, true);
        echo "\"}};var r=e.getElementsByTagName(\"script\")[0],c=e.createElement(\"script\");c.type=\"text/javascript\",c.async=!0,c.src=\"https://djtflbt20bdde.cloudfront.net/\",r.parentNode.insertBefore(c,r)}(document,window.HSCW||{},window.HS||{});</script>

<script type=\"text/javascript\">
  if(window['HS'] !== undefined) {
    // HelpScout Beacon: Configuration
    HS.beacon.config({
      icon: 'message',
      zIndex: 50000,
      instructions: \"";
        // line 103
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to give feedback to the MailPoet team? Contact us here. Please provide as much information as possible!");
        echo "\",
      showContactFields: true
    });

    // HelpScout Beacon: Custom information
    HS.beacon.ready(function() {
      HS.beacon.identify(
        ";
        // line 110
        echo json_encode(\MailPoet\Helpscout\Beacon::getData());
        echo "
      );
    });
  }
</script>
";
        // line 115
        $this->displayBlock('after_javascript', $context, $blocks);
    }

    // line 16
    public function block_templates($context, array $blocks = [])
    {
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
    }

    // line 42
    public function block_after_css($context, array $blocks = [])
    {
    }

    // line 72
    public function block_translations($context, array $blocks = [])
    {
    }

    // line 74
    public function block_after_translations($context, array $blocks = [])
    {
    }

    // line 115
    public function block_after_javascript($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 115,  277 => 74,  272 => 72,  267 => 42,  262 => 27,  257 => 25,  252 => 16,  248 => 115,  240 => 110,  230 => 103,  218 => 95,  214 => 93,  212 => 92,  210 => 91,  207 => 90,  205 => 89,  200 => 87,  196 => 85,  194 => 83,  189 => 81,  185 => 79,  183 => 76,  180 => 75,  178 => 74,  175 => 73,  173 => 72,  170 => 71,  168 => 66,  164 => 64,  162 => 61,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 43,  107 => 42,  104 => 41,  98 => 39,  96 => 38,  90 => 35,  86 => 33,  84 => 31,  79 => 28,  77 => 27,  74 => 26,  72 => 25,  62 => 17,  60 => 16,  53 => 11,  44 => 5,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html", "/var/www/html/wordpress/wp-content/plugins/mailpoet/views/layout.html");
    }
}
