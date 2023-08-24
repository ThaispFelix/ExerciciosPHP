<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        
    }

    // tests
    public function IndiceExercicio4Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 4');
        $I->click("Exercicio 4");
        $I->seeInTitle("Exercício 4");
    }

    // tests
    public function TitleExercicio4Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio4corrigido");
        $I->seeInTitle("Exercício 4");
        $I->see('Exercício 4', 'h1');
    }

    // tests
    public function FormExercicio4Test(AcceptanceTester $I)
    {
         $I->amOnPage("/exercicio4corrigido");
         $I->see("Colocando números em ordem decrescente");
         $I->see("Primeiro número:");
         $I->fillField("value1", "300");
         $I->see("Segundo número:");
         $I->fillField("value2", "30");
         $I->see("Terceiro número:");
         $I->fillField("value3", "3");
         $I->click("Enviar");
         $I->see("A ordem decrescente é:");
         $I->see("300");
         $I->see("30");
         $I->see("3");

         $I->amOnPage("/exercicio4corrigido");
         $I->see("Colocando números em ordem decrescente");
         $I->see("Primeiro número:");
         $I->fillField("value1", "3");
         $I->see("Segundo número:");
         $I->fillField("value2", "30");
         $I->see("Terceiro número:");
         $I->fillField("value3", "300");
         $I->click("Enviar");
         $I->see("A ordem decrescente é:");
         $I->see("300");
         $I->see("30");
         $I->see("3");

         $I->amOnPage("/exercicio4corrigido");
         $I->see("Colocando números em ordem decrescente");
         $I->see("Primeiro número:");
         $I->fillField("value1", "3");
         $I->see("Segundo número:");
         $I->fillField("value2", "300");
         $I->see("Terceiro número:");
         $I->fillField("value3", "30");
         $I->click("Enviar");
         $I->see("A ordem decrescente é:");
         $I->see("300");
         $I->see("30");
         $I->see("3");

         $I->amOnPage("/exercicio4corrigido");
         $I->see("Colocando números em ordem decrescente");
         $I->see("Primeiro número:");
         $I->fillField("value1", "300");
         $I->see("Segundo número:");
         $I->fillField("value2", "3");
         $I->see("Terceiro número:");
         $I->fillField("value3", "30");
         $I->click("Enviar");
         $I->see("A ordem decrescente é:");
         $I->see("300");
         $I->see("30");
         $I->see("3");

         $I->amOnPage("/exercicio4corrigido");
         $I->see("Colocando números em ordem decrescente");
         $I->see("Primeiro número:");
         $I->fillField("value1", "300");
         $I->see("Segundo número:");
         $I->fillField("value2", "3");
         $I->see("Terceiro número:");
         $I->fillField("value3", "30");
         $I->click("Enviar");
         $I->see("A ordem decrescente é:");
         $I->see("300");
         $I->see("30");
         $I->see("3");

    }

}
