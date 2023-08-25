<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio9Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 9');
        $I->click("Exercicio 9");
        $I->seeInTitle("Exercício 9");
    }

    // tests
    public function TitleExercicio9Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio9");
        $I->seeInTitle("Exercício 9");
        $I->see('Exercício 9', 'h1');
    }

    // tests
    public function FormExercicio9Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio9");
        $I->see("Exercício 9");
        $I->see("Quantas vezes deseja imprimir a palavra SOL?");
        $I->see("Digite a quantidade de vezes que SOL deve se repetir:");
        $I->fillField("numero", "12");
        $I->click("Imprimir");
    }
}
