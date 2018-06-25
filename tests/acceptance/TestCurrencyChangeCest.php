<?php


class TestCurrencyChangeCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('test Currency change');
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testCurrencyChange(AcceptanceTester $I)
    {
        $I->fillField('sQuery', 'Manali');
        $I->click('Search');
        $I->wait(5);
        $I->selectOption('//select[@id="currency"]', 'EUR');
        $I->wait(3);
        $newprice = $I->grabTextFrom('//div[@class="item__best-details"]//strong');
        $I->assertContains('€', $newprice);
    }
}
