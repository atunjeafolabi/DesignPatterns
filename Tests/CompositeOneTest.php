<?php

declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Structural\Composite\ExampleOne\Form;
use DesignPatterns\Structural\Composite\ExampleOne\TextElement;
use DesignPatterns\Structural\Composite\ExampleOne\InputElement;
use PHPUnit\Framework\TestCase;

class CompositeOneTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        // This is just an example, in a real world scenario it is important to remember that web browsers do not
        // currently support nested forms

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}
