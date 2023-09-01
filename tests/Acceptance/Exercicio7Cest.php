<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function IndiceExercicio7Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 7');
        $I->click("Exercicio 7");
        $I->seeInTitle("Exercício 7");
    } 

    // tests
    public function TitleExercicio7Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio7");
        $I->seeInTitle("Exercício 7");
        $I->see('Exercício 7', 'h1');
    }

    // tests
    public function FormExercicio7Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio7");
        $I->see("Biblioteca Universitária");
        $I->see("Sistema de empréstimo de livros");
        $I->see("Nome do exemplar");
        $I->fillField("nome", "Bioquímica");
        $I->see("Identificação");
        $I->selectOption("select[name='identificacao']", "Professor");
        $I->click("Solicitar empréstimo");
        $I->see("Prazo de devolução é de 10 dias a partir de hoje");

        $I->amOnPage("/exercicio7");
        $I->see("Biblioteca Universitária");
        $I->see("Sistema de empréstimo de livros");
        $I->see("Nome do exemplar");
        $I->fillField("nome", "Bioquímica");
        $I->see("Identificação");
        $I->selectOption("select[name='identificacao']", "Aluno");
        $I->click("Solicitar empréstimo");
        $I->see("Prazo de devolução é de 3 dias a partir de hoje");

    }
}
