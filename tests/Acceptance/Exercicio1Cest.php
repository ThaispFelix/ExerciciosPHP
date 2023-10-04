<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio1Cest
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
        $I->seeInTitle("Exercício 1");
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
        $I->amOnPage("/exercicio1");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "11");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "10");
        $I->click("Enviar");
        $I->see("O resultado é: 29");

        $I->amOnPage("/exercicio1");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "10");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "10");
        $I->click("Enviar");
        $I->see("O resultado é: 15");

        $I->amOnPage("/exercicio1");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "10");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "9");
        $I->click("Enviar");
        $I->see("O resultado é: 14");

    }
}