<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio3Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see("Exercicio 3");
        $I->click("Exercicio 3");
        $I->seeInTitle("Exercício 3");
    }

    // tests
    public function TitleExercicio3Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio3");
        $I->seeInTitle("Exercício 3");
        $I->see('Exercício 3', 'h1');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Thais");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Feminino ");
         $I->see("Idade:");
         $I->fillField("idade", "24");
         $I->click("Enviar");
         $I->see("Aceita");

         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Thais");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Feminino ");
         $I->see("Idade:");
         $I->fillField("idade", "25");
         $I->click("Enviar");
         $I->see(" Aceita ");

         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Thais");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Feminino ");
         $I->see("Idade:");
         $I->fillField("idade", "26");
         $I->click("Enviar");
         $I->see(" Não aceita ");
      
         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Paulo");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Masculino ");
         $I->see("Idade:");
         $I->fillField("idade", "25");
         $I->click("Enviar");
         $I->see(" Não aceito ");

         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Ayo");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Não binário ");
         $I->see("Idade:");
         $I->fillField("idade", "25");
         $I->click("Enviar");
         $I->see(" Não aceito ");

         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Ayo");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Não binário "); 
         $I->click("Enviar");
         $I->see(" Falta preencher o campo idade ");

         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Paulo");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Masculino ");
         $I->click("Enviar");
         $I->see(" Falta preencher o campo idade ");

         $I->amOnPage("/exercicio3");
         $I->see("Nome:");
         $I->fillField("nome", "Thais");
         $I->see("Gênero:");
         $I->selectOption("form select[name='genero']", " Feminino ");
         $I->click("Enviar");
         $I->see(" Falta preencher o campo idade ");
    }

}
