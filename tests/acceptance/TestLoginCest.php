<?php


class TestLoginCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('to test login');
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testLogin(AcceptanceTester $I)
    {
        $I->seeInTitle('trivago.in');
        $I->wait(5);
        $I->click('//button[@class="siteheader__control"]');
        $I->click('Log in');
        $I->fillField('login[email]', 'pankhuri1110@yahoo.com');
        $I->fillField('login[password]', '19901110k2');
        $I->click('//button//span[text()="Log in"]');
        $I->wait(5);
        $I->see('pankhuri1110@yahoo.com');
    }
}
