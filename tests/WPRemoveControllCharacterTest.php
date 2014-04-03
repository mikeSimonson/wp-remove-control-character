<?php
class WPRemoveControllCharacterTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->wprcc = new WPRemoveControllCharacter;
    }

    /**
     * @test
     * @dataProvider provider
     */
    public function removesTheControllCharacters($content, $expect)
    {
        $result = $this->wprcc->remove($content);
        $this->assertSame($result, $expect);
    }

    public function provider()
    {
        $c1 = 'テストテスト';
        $e1 = 'テストテスト';

        $c2 = <<<__EOS__
テストテスト
テストテスト
テスト 
__EOS__;

        $e2 = <<<__EOS__
テストテスト
テストテスト
テスト
__EOS__;
        return array(
            array($c1, $e1),
            array($c2, $e2),
        );
    }
}
