<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercício10Cest
{
    public function _before(AcceptanceTester $I)
    {

    }

    // tests
    public function IndiceExercicio10Test(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->see('Exercicio 10');
        $I->click("Exercicio 10");
        $I->seeInTitle("Exercício 10");
    }

    // tests
    public function TitleExercicio10Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio10");
        $I->seeInTitle("Exercício 10");
        $I->see('Exercício 10', 'h1');
    }

    // tests
    public function FormExercicio10Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value1","1");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value2","2");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value3","3");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value4","4");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value5","5");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value6","6");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value7","7");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value8","8");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value9","9");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value10","10");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value11","-11");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value12","-12");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value13","-13");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value14","-14");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value15","-15");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value16","-16");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value17","-17");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value18","-18");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value19","-19");
        $I->click("Consultar");

        $I->amOnPage("/exercicio10");
        $I->see("Exercício 10");
        $I->see("Digite 20 números e saiba a soma dos positivos e o total de números negativos:");
        $I->fillField("value20","-20");
        $I->click("Consultar");

    }
}    