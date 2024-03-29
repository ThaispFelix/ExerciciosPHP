<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio6Cest
{
    public function _before(AcceptanceTester $I)
    {  
    }

    // tests
    public function IndiceExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 6');
        $I->click("Exercicio 6");
        $I->seeInTitle("Exercício 6");
    }

    // tests
    public function TitleExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio6");
        $I->seeInTitle("Exercício 6");
        $I->see('Exercício 6', 'h1');
    }

    // tests
    public function FormExercicio6Test(AcceptanceTester $I)
    {
        
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","1");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Janeiro");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","2");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Fevereiro");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","3");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Março");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","4");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Abril");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","5");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Maio");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","6");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Junho");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","7");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Julho");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","8");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Agosto");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","9");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Setembro");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","10");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Outubro");
    
        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","11");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Novembro");

        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","12");
        $I->click("Mês Correspondente:");
        $I->see("O Mês é Dezembro");

        $I->amOnPage("/exercicio6");
        $I->see("Digite um número de 1 a 12:");
        $I->fillField("Mês","13");
        $I->click("Mês Correspondente:");
        $I->see("Não existe mês correspondente");

    } 
}
