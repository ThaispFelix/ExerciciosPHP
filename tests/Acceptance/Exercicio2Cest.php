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
         // Eu estou na página "exercicio2"
         $I->amOnPage("/exercicio2");
         // Eu vejo "Digite o valor:"
         $I->see("Digite o valor:");
         // Eu digito 20 no campo Divisor
         $I->fillField ("Divisor", "20");
         // Eu clico em Enviar
         $I->click("Enviar");
         // Eu vejo "É divisível por 2, por 5 e por 10"
         $I->see("É divisível por 2, por 5 e por 10");

         // Eu estou na página "exercicio2"
         $I->amOnPage("/exercicio2");
         // Eu vejo "Digite o valor:"
         $I->see("Digite o valor:");
         // Eu digito 15 no campo Divisor
         $I->fillField("Divisor", "15"); 
         // Eu clico em Enviar
         $I->click("Enviar");
         // Eu vejo "É divisível por 5"
         $I->see("É divisível por 5");  

         // Eu estou na página "exercicio2"
         $I->amOnPage("/exercicio2");
         // Eu vejo "Digite o valor:"
         $I->see("Digite o valor:");
         // Eu digito 4 no campo Divisor
         $I->fillField("Divisor", "4");
         // Eu clico em Enviar
         $I->click("Enviar");
         // Eu vejo "É divisível por 2"
         $I->see("É divisível por 2");

         // Eu estou na página "exercicio2"
         $I->amOnPage("/exercicio2");
         // Eu vejo "Digite o valor:"
         $I->see("Digite o valor:");
         // Eu digito 30 no campo Divisor
         $I->fillField("Divisor", "30");
         // Eu clico em Enviar
         $I->click("Enviar");
         // Eu vejo "É divisivel por 10"
         $I->see("É divisivel por 10");

         // Eu estou na página "exercicio2"
         $I->amOnPage("/exercicio2");
         // Eu vejo "Digite o valor:"
         $I->see("Digite o valor:");
         // Eu digito 11 no campo Divisor
         $I->fillField("Divisor", "11");
         // Eu clico em Enviar
         $I->click("Enviar");
         // Eu vejo "Não é divisível por 10, 5 ou 2"
         $I->see("Não é divisível por 10, 5 ou 2");

    }
}
