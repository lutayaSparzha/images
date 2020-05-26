<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;
use frontend\tests\fixtures\UserFixture;

class LoginCest
{
    public function _before(FunctionalTester $I)
    {
        $I->haveFixtures([
            'user' => [
                'class' => UserFixture::class,
            ],
        ]);
    }
    
    public function checkLoginWorking(FunctionalTester $I)
    {
        $I->amOnRoute('user/default/login');
        
        $formParams = [
            'LoginForm[email]' => '3@got.com',
            'LoginForm[password]' => '111111',
        ];
        
        $I->submitForm('#login-form', $formParams);
        
        $I->see('Valera Gazmanov', 'form button[type="submit"]');
    }
    
    public function checkLoginWrongPassword(FunctionalTester $I)
    {
        $I->amOnRoute('user/default/login');
        
        $formParams = [
            'LoginForm[email]' => '3@got.com',
            'LoginForm[password]' => '121111',
        ];
        
        $I->submitForm('#login-form', $formParams);
        
        $I->seeValidationError('Incorrect email or password.');
    }    
}
