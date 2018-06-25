<?php


class TestPaginationCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('to test pagination');
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testPagination(AcceptanceTester $I)
    {
        $I->fillField('sQuery', 'Manali');
        $I->click('Search');
        $I->wait(5);
        $hotelname = $I->grabTextFrom('//div[@class="item__details"][1]//h3');
        echo $hotelname;
        $I->scrollTo('//div[@class="pagination__pages"]');
        $I->click('//div[@class="pagination__pages"]/button[2]');
        $I->wait(3);
        $I->scrollTo('//input[@name="sQuery"]');
        $newhotelname = $I->grabTextFrom('//div[@class="item__details"][1]//h3');
        echo $newhotelname;
        $I->assertNotEquals($hotelname, $newhotelname);
    }
}
