<?php


class TestSearchCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('to test search');
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testSearch(AcceptanceTester $I)
    {
        $I->fillField('sQuery', 'Manali');
        $I->click('Search');
        $I->wait(5);
        $els = $I->grabTextFrom('//p[@class="details__paragraph"]');
        $I->assertContains('Manali', $els);

    }
}
