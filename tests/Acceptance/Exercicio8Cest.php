<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 8');
        $I->click("Exercicio 8");
        $I->seeInTitle("Exercício 8");
    }

    // tests
    public function TitleExercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio8");
        $I->seeInTitle("Exercício 8");
        $I->see('Exercício 8', 'h1');
    }

    // tests
    public function FormExercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio8");
        $I->see("Verifique todos os valores de 1 até o número escolhido e o seu produto");
        $I->see("Digite um número:");
        $I->fillField("numero","0");
        $I->click("Enviar");
        $I->see("De 1 até 0:");
        $I->see("Produto: 1");

        $I->amOnPage("/exercicio8");
        $I->see("Verifique todos os valores de 1 até o número escolhido e o seu produto");
        $I->see("Digite um número:");
        $I->fillField("numero","1");
        $I->click("Enviar");
        $I->see("De 1 até 1:");
        $I->see("1");
        $I->see("Produto: 1");

        $I->amOnPage("/exercicio8");
        $I->see("Verifique todos os valores de 1 até o número escolhido e o seu produto");
        $I->see("Digite um número:");
        $I->fillField("numero","-1");
        $I->click("Enviar");
        $I->see("De 1 até -1:");
        $I->see("Produto: 1");

        $I->amOnPage("/exercicio8");
        $I->see("Verifique todos os valores de 1 até o número escolhido e o seu produto");
        $I->see("Digite um número:");
        $I->fillField("numero","-5");
        $I->click("Enviar");
        $I->see("De 1 até -5:");
        $I->see("Produto: 1");

        $I->amOnPage("/exercicio8");
        $I->see("Verifique todos os valores de 1 até o número escolhido e o seu produto");
        $I->see("Digite um número:");
        $I->fillField("numero","5");
        $I->click("Enviar");
        $I->see("De 1 até 5:");
        $I->see("1");
        $I->see("2");
        $I->see("3");
        $I->see("4");
        $I->see("5");
        $I->see("Produto: 120");

        $I->amOnPage("/exercicio8");
        $I->see("Verifique todos os valores de 1 até o número escolhido e o seu produto");
        $I->see("Digite um número:");
        $I->fillField("numero","10");
        $I->click("Enviar");
        $I->see("De 1 até 10:");
        $I->see("1");
        $I->see("2");
        $I->see("3");
        $I->see("4");
        $I->see("5");
        $I->see("6");
        $I->see("7");
        $I->see("8");
        $I->see("9");
        $I->see("10");
        $I->see("Produto: 3628800");

    }
}
