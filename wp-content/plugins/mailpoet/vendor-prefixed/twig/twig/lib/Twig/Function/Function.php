<?php

namespace MailPoetVendor;

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Arnaud Le Blanc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
@\trigger_error('The Twig_Function_Function class is deprecated since version 1.12 and will be removed in 2.0. Use \\Twig\\TwigFunction instead.', \E_USER_DEPRECATED);
/**
 * Represents a function template function.
 *
 * Use \Twig\TwigFunction instead.
 *
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */
class Twig_Function_Function extends \MailPoetVendor\Twig_Function
{
    protected $function;
    public function __construct($function, array $options = [])
    {
        $options['callable'] = $function;
        parent::__construct($options);
        $this->function = $function;
    }
    public function compile()
    {
        return $this->function;
    }
}
/**
 * Represents a function template function.
 *
 * Use \Twig\TwigFunction instead.
 *
 * @author Arnaud Le Blanc <arnaud.lb@gmail.com>
 *
 * @deprecated since 1.12 (to be removed in 2.0)
 */

