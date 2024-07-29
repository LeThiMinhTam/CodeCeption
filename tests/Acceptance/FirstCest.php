<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
//    public function frontpageWorks(AcceptanceTester $I)
//    {
//        $I->amOnPage('/');
//        $I->fillField("emailid", "tamntl@gmail.com");
//        $I->click("btnLogin");
//        $I->see("Guru99 Bank");
//        $userName = $I->grabTextFrom("//td[normalize-space()='User ID :']/following-sibling::td");
//        $password = $I->grabTextFrom("//td[normalize-space()='Password :']/following-sibling::td");
//        $I->amOnPage("/Agile_Project/Agi_V1/");
//
//        $I->fillField("uid",$userName);
//        $I->fillField("password",$password);
//        $I->click("btnLogin");
//        $I->see("Guru99 Bank");
//    }

//    public function Homepage (AcceptanceTester $I){
//        $I->amOnPage('/');
//        $I->see('Sign In');
//    }
//    public function LoginPage_1 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->fillField("Email", "geneat.soft@gmail.com");
//        $I->fillField("Password", "123123");
//        $I->click("Login");
//        $I->amOnPage('/dashboard');
//        $I->see('DASHBOARD');
//    }
//    public function LoginPage_2 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->click("Login");
//        $I->see('This is a required field!');
//    }
//    public function LoginPage_3 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->fillField("Password", "123123");
//        $I->click("Login");
//        $I->see('This is a required field!');
//    }
//    public function LoginPage_4 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->fillField("Email", "geneat.soft@gmail.com");
//        $I->click("Login");
//        $I->see('This is a required field!');
//    }
//    public function LoginPage_5 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->fillField("Email", "geneat123.soft@gmail.com");
//        $I->fillField("Password", "123123");
//        $I->click("Login");
//        $I->see('Vui lòng đăng ký mới.');
//    }
    public function LoginPage_6 (AcceptanceTester $I){
        $I->amOnPage('/Login');
        $I->fillField("Email", "geneat.soft@gmail.com");
        $I->fillField("Password", "123456");
        $I->click("Login");
        $I->see('Sai mật khẩu cho tài khoản geneat.soft@gmail.com');
        $I->wait(20);
    }
//    public function SignUp_1 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->click("Sign Up");
//        $I->fillField("Email", "test3@gmail.com");
//        $I->fillField("Name", "test");
//        $I->fillField("Phone Number", "0123123123");
//        $I->fillField("Team", "Test");
//        $I->fillField("Password", "123123");
//        $I->fillField("Password Confirm", "123123");
//        $I->click("Sign Up");
//        $I->amOnPage('/Login');
//        $I->see("Sign In");
//        $I->wait(5);
//    }
//    public function SignUp_2 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->click("Sign Up");
//        $I->amOnPage("/register");
//        $I->click("Sign Up");
//        $I->see("This is a required field!");
//    }
//    public function SignUp_3 (AcceptanceTester $I){
//        $I->amOnPage('/Login');
//        $I->click("Sign Up");
//        $I->amOnPage("/register");
//        $I->fillField("Name", "test");
//        $I->fillField("Phone Number", "0123123123");
//        $I->fillField("Team", "Test");
//        $I->fillField("Password", "123123");
//        $I->fillField("Password Confirm", "123123");
//        $I->click("Sign Up");
//        $I->see("This is a required field!");
//    }
}
