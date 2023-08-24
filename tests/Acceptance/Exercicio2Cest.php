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
         $I->amOnPage("/exercicio2");
         $I->see("Digite o valor:");
         $I->fillField ("Divisor", "20");
         $I->click("Enviar");
         $I->see("É divisível por 2, por 5 e por 10");

         $I->amOnPage("/exercicio2");
         $I->see("Digite o valor:");
         $I->fillField("Divisor", "15"); 
         $I->click("Enviar");
         $I->see("É divisível por 5");  

         $I->amOnPage("/exercicio2");
         $I->see("Digite o valor:");
         $I->fillField("Divisor", "4");
         $I->click("Enviar");
         $I->see("É divisível por 2");

         $I->amOnPage("/exercicio2");
         $I->see("Digite o valor:");
         $I->fillField("Divisor", "11");
         $I->click("Enviar");
         $I->see("Não é divisível por 10, 5 ou 2");

    }
}
