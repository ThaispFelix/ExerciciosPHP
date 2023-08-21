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
         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Feminino"
         $I->selectOption("form select[name='genero']", " Feminino ");
         // Eu vejo "Idade:"
         $I->see("Idade:");
         // Eu digito "24" no campo "idade"
         $I->fillField("idade", "24");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Aceita"
         $I->see("Aceita");

         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Feminino"
         $I->selectOption("form select[name='genero']", " Feminino ");
         // Eu vejo "Idade:"
         $I->see("Idade:");
         // Eu digito "25" no campo "idade"
         $I->fillField("idade", "25");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Aceita"
         $I->see(" Aceita ");

         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Feminino"
         $I->selectOption("form select[name='genero']", " Feminino ");
         // Eu vejo "Idade:"
         $I->see("Idade:");
         // Eu digito "26" no campo "idade"
         $I->fillField("idade", "26");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Não aceita"
         $I->see(" Não aceita ");
      
         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Masculino"
         $I->selectOption("form select[name='genero']", " Masculino ");
         // Eu vejo "Idade:"
         $I->see("Idade:");
         // Eu digito "25" no campo "idade"
         $I->fillField("idade", "25");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Não aceito"
         $I->see(" Não aceito ");

         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Não binário"
         $I->selectOption("form select[name='genero']", " Não binário ");
         // Eu vejo "Idade:"
         $I->see("Idade:");
         // Eu digito "25" no campo "idade"
         $I->fillField("idade", "25");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Não aceito"
         $I->see(" Não aceito ");

         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Não binário"
         $I->selectOption("form select[name='genero']", " Não binário "); 
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Falta preencher o campo idade"
         $I->see(" Falta preencher o campo idade ");

         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Masculino"
         $I->selectOption("form select[name='genero']", " Masculino ");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Falta preencher o campo idade"
         $I->see(" Falta preencher o campo idade ");

         // Eu estou na página "exercicio3"
         $I->amOnPage("/exercicio3");
         // Eu vejo "Gênero:"
         $I->see("Gênero:");
         // Eu clico em "Feminino"
         $I->selectOption("form select[name='genero']", " Feminino ");
         // Eu clico em "Enviar"
         $I->click("Enviar");
         //Eu vejo "Falta preencher o campo idade"
         $I->see(" Falta preencher o campo idade ");
    }

}
