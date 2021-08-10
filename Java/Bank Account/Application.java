/**
 * The Application class is implemented to run the code from other classes.
 * 
 * @Author: Owen Ramsey
 * @Version 1.0
 */

public class Application 
{
    public static void main(String[] args)
    {
        Tidy.clrScreen();

        //Create the savings account and display values prior to and after depositing and withdrawing money.
        SavingsAccount s1 = new SavingsAccount("12345","Dave");
        s1.printAccountType();
        Tidy.waits(2000);
        s1.setBalance(500);
        s1.getBalanceStr();
        Tidy.waits(2000);
        s1.addInterest();
        Tidy.waits(2000);
        s1.deposit(200);
        Tidy.waits(2000);
        s1.getBalanceStr();
        Tidy.waits(2000);
        s1.withdraw(5000);
        Tidy.waits(2000);
        s1.getBalanceStr();
        Tidy.waits(2000);
        s1.withdraw(1000);
        Tidy.waits(2000);
        s1.getBalanceStr();

        System.out.println("----------------------------------------------\n");


        //Create the checking account and display values prior to and after depositing and withdrawing money.
        CheckingAccount c1 = new CheckingAccount("54321", "Jeff");
        c1.printAccountType();
        Tidy.waits(2000);
        c1.setBalance(500);
        c1.getBalanceStr();
        Tidy.waits(2000);
        c1.deposit(200);
        Tidy.waits(2000);
        c1.getBalanceStr();
        Tidy.waits(2000);
        c1.withdraw(100);
        Tidy.waits(2000);
        c1.getBalanceStr();
        Tidy.waits(2000);
        c1.withdraw(1000);
        Tidy.waits(2000);
        c1.getBalanceStr();







    }

}
// End class Application
