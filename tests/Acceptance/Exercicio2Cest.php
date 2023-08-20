<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio2Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see("Exercicio 2");
        $I->click("Exercicio 2");
        $I->seeInTitle("Exercício 2");
    }

    // tests
    public function TitleExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio2");
        $I->seeInTitle("Exercício 2");
        $I->see('Exercício 2', 'h1');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
       
    }
}
