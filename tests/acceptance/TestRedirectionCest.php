<?php


class TestRedirectionCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('to test correct redirection');
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testRedirection(AcceptanceTester $I)
    {
        $I->fillField('sQuery', 'Manali');
        $I->click('Search');
        $I->wait(5);
        $bestdeal = $I->grabTextFrom('//div[@class="item__best-details"]//em');
        $bestdeal = strtolower("$bestdeal");
        $I->click('View Deal');
        $I->wait(15);
        $I->switchToNextTab();
        $url = $I->getCurrentUrl();
        $I->assertContains($bestdeal, $url);

    }
}
