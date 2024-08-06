<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FaceBookCest
{
//    public function Login_1 (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->fillField('email', 'ltmt17032000@gmail.com');
//        $I->fillField('pass', '192102938');
//        $I->click('login');
//        $I->wait(5);
//        $I->see( 'Nhớ mật khẩu', '//span[contains(@class, "x193iq5w xeuugli x13faqbe x1vvkbs x1xmvt09 x1lliihq x1s928wv xhkezso x1gmr53x x1cpjm7i x1fgarty x1943h6x xtoi2st x3x7a5m x1603h9y x1u7k74 x1xlr1w8 xzsf02u x1yc453h")]');
//        $I->wait(5);
//    }
//    public function Login_2 (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->fillField('email', '');
//        $I->fillField('pass', '');
//        $I->click('login');
//        $I->wait(10);
//        $I->see("The email address or mobile number you entered isn't connected to an account. Find your account and log in.", "//*[@id='email_container']/div[2]");
//    }
//    public function Login_3 (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->fillField('email', 'ltmt17032000@gmail.com');
//        $I->fillField('pass', '');
//        $I->click('login');
//        $I->wait(10);
//        $I->see("Log in as Lê Thị Minh Tâm", "//span[contains(@class, '_50f6')]");
//        $I->wait(5);
//    }
//    public function Login_4 (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->fillField('email', '');
//        $I->fillField('pass', '192102938');
//        $I->click('login');
//        $I->wait(10);
//        $I->see("The email address or mobile number you entered isn't connected to an account. Find your account and log in.", "//*[@id='email_container']/div[2]");
//    }
//    public function Login_5 (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->fillField('email', 'a@gmail.com');
//        $I->fillField('pass', '192102938');
//        $I->click('login');
//        $I->wait(10);
//        $I->see("The password that you've entered is incorrect.", "//*[@class='clearfix _5466 _44mg']/div[2]");
//    }
//    public function Login_6 (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->fillField('email', 'ltmt17032000@gmail.com');
//        $I->fillField('pass', '123123');
//        $I->click('login');
//        $I->wait(10);
//        $I->see("Log in as Lê Thị Minh Tâm", "//span[contains(@class, '_50f6')]");
//    }
    public function SignUp_1 (AcceptanceTester $I){
        $I->amOnPage('/');
        $I->click("//*[@id='u_0_0_yK']");
        $I->wait(10);
    }
}
