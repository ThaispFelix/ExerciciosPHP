<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercício6Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see("Exercício 1");
        $I->click("Exercício 1");
        $I->see("Exercicio 1");
        $I->seeInTitle("Exercício 1");
    }

    // tests
    public function TitleExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio1");
        $I->seeInTitle("Exercício 1");
        $I->see("Exercicio 1", "h1");
    }

    // tests
    public function FormExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio1");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "11");
        $I->see("Digite o segundo valor:");
        $I->fillField("value1", "10");
        $I->click("Enviar");

        $I->amOnPage("/exercicio1");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "10");
        $I->see("Digite o segundo valor:");
        $I->fillField("value1", "10");
        $I->click("Enviar");

        $I->amOnPage("/exercicio1");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "10");
        $I->see("Digite o segundo valor:");
        $I->fillField("value1", "9");
        $I->click("Enviar");
    }

}