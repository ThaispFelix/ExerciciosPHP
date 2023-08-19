<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see("Exercicio 1");
        $I->click("Exercicio 1");
        $I->seeInTitle("Exercicio 1");
    }

    // tests
    public function TitleExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio1");
        $I->seeInTitle("Exercício 1");
        $I->see('Exercício 1', 'h1');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        
    }


    
}