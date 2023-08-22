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
        // Eu estou na pagina "exercicio5corrigido"
        $I->amOnPage("/exercicio5corrigido");
        // Eu vejo "Digite 3 valores para a criação de um triângulo"
        $I->see("Digite 3 valores para a criação de um triângulo");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito 30 no campo value1
        $I->fillField("value1", "30");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito 30 no campo value2
        $I->fillField("value2", "30");
        // Eu vejo "Digite o terceiro valor:"
        $I->see("Digite o terceiro valor:");
        // Eu digito 30 no campo value3
        $I->fillField("value3", "30");
        // Eu clico em "Testar"
        $I->click(" Testar ");
        // Eu vejo "Triângulo equilátero"
        $I->see("Triângulo equilátero");

        // Eu estou na pagina "exercicio5corrigido"
        $I->amOnPage("/exercicio5corrigido");
        // Eu vejo "Digite 3 valores para a criação de um triângulo"
        $I->see("Digite 3 valores para a criação de um triângulo");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito 10 no campo value1
        $I->fillField("value1", "10");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito 10 no campo value2
        $I->fillField("value2", "10");
        // Eu vejo "Digite o terceiro valor:"
        $I->see("Digite o terceiro valor:");
        // Eu digito 20 no campo value3
        $I->fillField("value3", "20");
        // Eu clico em "Testar"
        $I->see(" Testar ");
        // Eu vejo "Triângulo isósceles"
        $I->see("Triângulo isósceles");

        // Eu estou na pagina "exercicio5corrigido"
        $I->amOnPage("/exercicio5corrigido");
        // Eu vejo "Digite 3 valores para a criação de um triângulo"
        $I->see("Digite 3 valores para a criação de um triângulo");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito 10 no campo value1
        $I->fillField("value1", "10");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito 20 no campo value2
        $I->fillField("value2", "20");
        // Eu vejo "Digite o terceiro valor:"
        $I->see("Digite o terceiro valor:");
        // Eu digito 30 no campo value3
        $I->fillField("value3", "30");
        // Eu clico em "Testar"
        $I->click(" Testar ");
        // Eu vejo "Triângulo escaleno"
        $I->see("Triângulo escaleno");

        // Eu estou na pagina "exercicio5corrigido"
        $I->amOnPage("/exercicio5corrigido");
        // Eu vejo "Digite 3 valores para a criação de um triângulo"
        $I->see("Digite 3 valores para a criação de um triângulo");
        // Eu vejo "Digite o primeiro valor:"
        $I->see("Digite o primeiro valor:");
        // Eu digito x no campo value1
        $I->fillField("value1", "0");
        // Eu vejo "Digite o segundo valor:"
        $I->see("Digite o segundo valor:");
        // Eu digito x no campo value2
        $I->fillField("value2", "0");
        // Eu vejo "Digite o terceiro valor:"
        $I->see("Digite o terceiro valor:");
        // Eu digito x no campo value3
        $I->fillField("value3", "0");
        // Eu clico em "Testar"
        $I->click(" Testar ");
        // Eu vejo "O triângulo não existe"
        $I->see("O triângulo não existe"); 

    }
    
}    