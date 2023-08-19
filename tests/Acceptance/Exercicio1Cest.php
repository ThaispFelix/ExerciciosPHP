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
        // Eu estou na página "exercicio1"
        $I->amOnPage("/exercicio1");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito 11 no campo valuu1
        $I->fillField("value1", "11");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito 10 no campo value2
        $I->fillField("value2", "10");
        // Eu clico em Enviar
        $I->click("Enviar");

        // Eu estou na página "exercicio1"
        $I->amOnPage("/exercicio1");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito 10 no campo valuu1
        $I->fillField("value1", "10");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito 10 no campo value2
        $I->fillField("value2", "10");
        // Eu clico em Enviar
        $I->click("Enviar");

        // Eu estou na página "exercicio1"
        $I->amOnPage("/exercicio1");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito 10 no campo valuu1
        $I->fillField("value1", "10");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito 9 no campo value2
        $I->fillField("value2", "9");
        // Eu clico em Enviar
        $I->click("Enviar");
    }


    
}