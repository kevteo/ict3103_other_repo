<?php

/*
 * This file is part of the phpunit-json-assertions package.
 *
 * (c) Enrico Stahn <enrico.stahn@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EnricoStahn\JsonAssert\Tests;

class AssertTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Showcase for the Wiki.
     *
     * @see https://github.com/estahn/phpunit-json-assertions/wiki/assertJsonMatchesSchema
     */
    public function testAssertJsonMatchesSchemaSimple()
    {
        $content = json_decode(file_get_contents(Utils::getJsonPath('assertJsonMatchesSchema_simple.json')));

        AssertTraitImpl::assertJsonMatchesSchema(Utils::getSchemaPath('assertJsonMatchesSchema_simple.schema.json'), $content);
    }

    public function testAssertJsonMatchesSchema()
    {
        $content = json_decode('{"foo":123}');

        AssertTraitImpl::assertJsonMatchesSchema(Utils::getSchemaPath('test.schema.json'), $content);
    }

    /**
     * @expectedException \PHPUnit_Framework_ExpectationFailedException
     */
    public function testAssertJsonMatchesSchemaFail()
    {
        $content = json_decode('{"foo":"123"}');

        AssertTraitImpl::assertJsonMatchesSchema(Utils::getSchemaPath('test.schema.json'), $content);
    }

    public function testAssertJsonMatchesSchemaFailMessage()
    {
        $content = json_decode('{"foo":"123"}');

        $exception = null;

        try {
            AssertTraitImpl::assertJsonMatchesSchema(Utils::getSchemaPath('test.schema.json'), $content);
        } catch (\PHPUnit_Framework_ExpectationFailedException $exception) {
            self::assertContains('- Property: foo, Contraint: type, Message: String value found, but an integer is required', $exception->getMessage());
            self::assertContains('- Response: {"foo":"123"}', $exception->getMessage());
        }

        self::assertInstanceOf('PHPUnit_Framework_ExpectationFailedException', $exception);
    }

    /**
     * Tests if referenced schemas are loaded automatically.
     */
    public function testAssertJsonMatchesSchemaWithRefs()
    {
        $content = json_decode('{"code":123, "message":"Nothing works."}');

        AssertTraitImpl::assertJsonMatchesSchema(Utils::getSchemaPath('error.schema.json'), $content);
    }

    /**
     * @expectedException \PHPUnit_Framework_ExpectationFailedException
     */
    public function testAssertJsonMatchesSchemaWithRefsFails()
    {
        $content = json_decode('{"code":"123", "message":"Nothing works."}');

        AssertTraitImpl::assertJsonMatchesSchema(Utils::getSchemaPath('error.schema.json'), $content);
    }

    public function testAssertJsonMatchesSchemaString()
    {
        $content = json_decode('{"foo":123}');
        $schema = file_get_contents(Utils::getSchemaPath('test.schema.json'));

        AssertTraitImpl::assertJsonMatchesSchemaString($schema, $content);
    }

    /**
     * Tests assertJsonValueEquals().
     *
     * @dataProvider assertJsonValueEqualsProvider
     *
     * @param string $expression
     * @param mixed  $value
     */
    public function testAssertJsonValueEquals($expression, $value)
    {
        $content = json_decode(file_get_contents(Utils::getJsonPath('testAssertJsonValueEquals.json')));

        AssertTraitImpl::assertJsonValueEquals($value, $expression, $content);
    }

    public function assertJsonValueEqualsProvider()
    {
        return [
            ['foo', '123'],
            ['a.b.c[0].d[1][0]', 1],
        ];
    }

    /**
     * @expectedException \PHPUnit_Framework_ExpectationFailedException
     */
    public function testAssertJsonValueEqualsFailsOnWrongDataType()
    {
        $content = json_decode(file_get_contents(Utils::getJsonPath('testAssertJsonValueEquals.json')));

        AssertTraitImpl::assertJsonValueEquals($content, 'a.b.c[0].d[1][0]', '1');
    }

    /**
     * @dataProvider testGetJsonObjectProvider
     */
    public function testGetJsonObject($expected, $actual)
    {
        self::assertEquals($expected, AssertTraitImpl::getJsonObject($actual));
    }

    public function testGetJsonObjectProvider()
    {
        return [
            [[], []],
            [[], '[]'],
            [new \stdClass(), new \stdClass()],
            [new \stdClass(), '{}'],
        ];
    }
}
