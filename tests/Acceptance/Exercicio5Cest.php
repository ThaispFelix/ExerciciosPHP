<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio5Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 5');
        $I->click("Exercicio 5");
        $I->seeInTitle("Exercício 5");
    }

    // tests
    public function TitleExercicio5Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio5corrigido");
        $I->seeInTitle("Exercício 5");
        $I->see('Exercício 5', 'h1');
    }

    // tests
    public function FormExercicio5Test(AcceptanceTester $I)
    { 
        $I->amOnPage("/exercicio5corrigido");
        $I->see("Digite 3 valores para a criação de um triângulo");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "30");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "30");
        $I->see("Digite o terceiro valor:");
        $I->fillField("value3", "30");
        $I->click("value", "Testar");
        $I->see("Triângulo equilátero");

        $I->amOnPage("/exercicio5corrigido");
        $I->see("Digite 3 valores para a criação de um triângulo");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "10");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "10");
        $I->see("Digite o terceiro valor:");
        $I->fillField("value3", "20");
        $I->click("value", "Testar");
        $I->see("Triângulo isósceles");

        $I->amOnPage("/exercicio5corrigido");
        $I->see("Digite 3 valores para a criação de um triângulo");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "10");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "20");
        $I->see("Digite o terceiro valor:");
        $I->fillField("value3", "30");
        $I->click("value", "Testar");
        $I->see("Triângulo escaleno");

        $I->amOnPage("/exercicio5corrigido");
        $I->see("Digite 3 valores para a criação de um triângulo");
        $I->see("Digite o primeiro valor:");
        $I->fillField("value1", "0");
        $I->see("Digite o segundo valor:");
        $I->fillField("value2", "0");
        $I->see("Digite o terceiro valor:");
        $I->fillField("value3", "0");
        $I->click("value", "Testar");
        $I->see("O triângulo não existe"); 
    }
    
}    