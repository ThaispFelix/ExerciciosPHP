<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercício6Cest
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
        // Eu estou na pagina "exercicio6"
        $I->amOnPage("/exercicio6");
        // Eu vejo "Digite um número de 1 a 12:"
        $I->see("Digite um número de 1 a 12:");
        // Eu digito 1 no campo Mês
        $I->fillField("Mês","1");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 2 no campo Mês
        $I->fillField("Mês","2");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 3 no campo Mês
        $I->fillField("Mês","3");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 4 no campo Mês
        $I->fillField("Mês","4");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 5 no campo Mês
        $I->fillField("Mês","5");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 6 no campo Mês
        $I->fillField("Mês","6");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 7 no campo Mês
        $I->fillField("Mês","7");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 8 no campo Mês
        $I->fillField("Mês","8");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 9 no campo Mês
        $I->fillField("Mês","9");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 10 no campo Mês
        $I->fillField("Mês","10");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");
    
        // Eu digito 11 no campo Mês
        $I->fillField("Mês","11");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");

        // Eu digito 12 no campo Mês
        $I->fillField("Mês","12");
        // Eu clico em Mês Correspondente
        $I->click("Mês Correspondente:");

    } 
}
